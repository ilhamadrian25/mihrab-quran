<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\CampaignModel;
use Midtrans\Config;
use Midtrans\Snap;

class Transaction extends BaseController
{
    public function processPayment()
  {
    $trans = new TransactionModel();

    Config::$serverKey = getenv('TOKEN_SERVER_KEY'); // Ganti dengan server key Anda
    Config::$isProduction = false; // Set false jika menggunakan mode sandbox

    $donationAmount = $this->request->getPost('donation-amount');
    $idProgram = $this->request->getPost('idProgram');
    $fullName = $this->request->getPost('full-name');
    $phoneNumber = $this->request->getPost('phone-number');
    $supportMessage = $this->request->getPost('support-message');

    $amount = str_replace('.', '', $donationAmount);

    $orderId = uniqid();
    $params = array(
      'transaction_details' => array(
        'order_id' => $orderId,
        'gross_amount' => $amount,
      ),
      'customer_details' => array(
        'first_name' => $fullName,
        'phone' => $phoneNumber,
      ),
      'item_details' => array(
        array(
          'id' => 'donation',
          'price' => $amount,
          'quantity' => 1,
          'name' => 'Donation',
        ),
      ),
      'credit_card' => array(
        'secure' => true,
      ),
    );
        $data = [
            'id_program' => $idProgram,
            'order_id'  =>  $orderId,
            'status_transaction' => 'pending',
            'donation_amount' => $amount,
            'full_name' => $fullName,
            'phone_number' => $phoneNumber,
            'support_message' => $supportMessage,
        ];

        $trans->insert($data);

    $token = Snap::getSnapToken($params);

    session()->set('snap_token', $token, 86400);

    if (!$fullName) {
    return $this->response->setJSON([
      'success' => false,
      'message' => 'Harap isi nama',
    ]);
    }else {
    return $this->response->setJSON([
      'success' => true,
      'token' => $token,
    ]);
    }

  }

    public function store()
    {
        $Trans = new TransactionModel();

        $idprogram = $this->request->getPost('id_program');
        $donationAmount = $this->request->getPost('donation-amount');
        $fullName = $this->request->getPost('full_name');
        $phoneNumber = $this->request->getPost('phone_number');
        $supportMessage = $this->request->getPost('support_message');
        $transactionId = $this->request->getPost('transaction_id');
        $orderId = $this->request->getPost('order_id');
        
        $grossAmount = intval($donationAmount);

        $transUser = $Trans->where('order_id', $orderId)->first();

        if ($transUser) {

        $data = [
            'transaction_id' => $transactionId,
            'status_transaction' => 'pending',
        ];
            $Trans->where($transUser['order_id'], $orderId)->update($data);

        $responses = [
            'status'    =>      'success',
            'message'   =>      'Menunggu pembayaran'
        ];
        }else {
        $responses = [
            'status'    =>      'error',
            'message'   =>      'Order pembayaran tidak ditemukan'
        ];
        }
        
        return $this->response->setJSON($responses);
    }

public function handleNotification()
{
    try {
        $request = service('request');
        $notification_body = json_decode($request->getBody(), true);

        $invoice = $notification_body['order_id'];
        $transaction_id = $notification_body['transaction_id'];
        $status_code = $notification_body['status_code'];

        $transM = new TransactionModel();
        $Campaign = new CampaignModel();
        $trans = $transM->where('order_id', $invoice)->first();

        $DataCampagin = $Campaign->where('id_program', $trans['id_program'])->first();

        if (!$trans) {
            return $this->response->setJSON(['code' => 0, 'message' => 'Terjadi kesalahan | Pembayaran tidak valid'], 400);
        }

        if ($trans && $trans['status_transaction'] == 'success') {
            $response = [
                'status' => 'error',
                'message' => 'Transaksi sudah berhasil sebelumnya'
            ];
            return $this->response->setJSON($response);
        } else {
            switch ($status_code) {
                case '200':
                    $data = [
                        'transaction_id' => $transaction_id,
                        'status_transaction' => 'success',
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $transM->update($trans['id_transaction'], $data);

                    $data2 = [
                        'total_donation' => $DataCampagin['total_donation'] + $trans['donation_amount'],
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $Campaign->update($trans['id_program'], $data2);

                    if ($DataCampagin['target_donation'] <= $DataCampagin['total_donation'] + $trans['donation_amount']) {
                        $data3 = [
                            'status_donation' => 'finished'
                        ];
                        $Campaign->update($trans['id_program'], $data3);
                    }
                    break;
                case '201':
                    $data4 = [
                        'transaction_id' => $transaction_id,
                        'status_transaction' => 'pending'
                    ];
                    $transM->update($trans['id_transaction'], $data4);
                    break;

                case '202':
                    $data5 = [
                        'transaction_id' => $transaction_id,
                        'status_transaction' => 'expire'
                    ];
                    $transM->update($trans['id_transaction'], $data5);
                    break;

                default:
                    throw new \Exception('Kode status pembayaran tidak valid');
            }
            $response = [
                'status' => 'success',
                'message' => 'Pembayaran berhasil diperbarui'
            ];
            return $this->response->setJSON($response);
        }
    } catch (\Exception $e) {
        return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
}

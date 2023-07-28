<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\CampaignModel;
use App\Models\SettingsModel;
use App\Models\TransactionModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $camp = new CampaignModel;
        $users = new UsersModel;
        $settings = new SettingsModel;
        $trans = new TransactionModel;

        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();

        $result = $trans->where('status_transaction', 'success')->selectSum('donation_amount')->get()->getRow();
        $totalDonation = $result->donation_amount;

        $idrConverter = $this->formatAngka($totalDonation);

        $data = [
            'trans_success' =>          $trans->where('status_transaction', 'success')->findAll(),
            'top_campaign'  =>          $camp->orderBy('total_donation', 'desc')->limit(5)->findAll(),
            'settings'      =>          $settings->where('id_settings', 1)->first(),
            'total_donatur'  =>         $trans->countAll(),
            'total'         =>          $camp->countAll(),
            'campaign'      =>          $camp->findAll(),
            'total_donation' =>         $idrConverter,
            'title'         =>          'Dashboard',
            'user'          =>          $user,
        ];

        // print_r($data);

        return view('admin/dashboard', $data);
    }

    public function formatAngka($number) {
        $suffix = '';
        
        if ($number >= 1000000000) {
            $number = round($number / 1000000000, 0);
            $suffix = ' Milyar';
        } elseif ($number >= 1000000) {
            $number = round($number / 1000000, 0);
            $suffix = ' Juta';
        } elseif ($number >= 1000) {
            $number = round($number / 1000, 0);
            $suffix = ' Ribu';
        }
        
        return $number . $suffix;
    }
}

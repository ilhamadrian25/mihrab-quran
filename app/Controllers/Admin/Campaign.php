<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\CampaignModel;
use App\Models\SettingsModel;
use App\Models\TransactionModel;
use DateTime as GlobalDateTime;

class Campaign extends BaseController
{
    public function index()
    {
        helper('text');
        $campaignModel = new CampaignModel;
        $users = new UsersModel;
        $settings = new SettingsModel;
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Campaign',
            'user'          =>          $user,
            'campaign'      =>          $campaignModel->findAll(),
            'settings'      =>          $settings->where('id_settings', 1)->first()
        ];

        return view('admin/campaign/campaign', $data);
    }

    public function create()
    {
        $users = new UsersModel;
        $settings = new SettingsModel;
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Buat Campaign',
            'user'          =>          $user,
            'settings'      =>          $settings->where('id_settings', 1)->first(),
        ];

        return view('admin/campaign/create-campaign', $data);
    }

    public function store()
    {
        $CampaignModel = new CampaignModel();

        $file = $this->request->getFile('file');
        $role = session()->get('role');

        if ($role != 'admin') {
            $response = [
                'status' => 'error',
                'message' => 'Akses ditolak. Anda harus memiliki peran admin untuk melakukan tindakan ini.'
            ];
        } else {
            $title = $this->request->getPost('title');
            $description = $this->request->getPost('description');
            $target_donation = $this->request->getPost('target_donation');
            $start_date = $this->request->getPost('start_date');
            $end_date = $this->request->getPost('end_date');

            // Validate fields
            if (empty($title) || empty($description) || empty($target_donation) || empty($start_date) || empty($end_date)) {
                $response = [
                    'status' => 'error',
                    'message' => 'Harap isi semua form.'
                ];
            } else {
                // Process file upload and data insertion
                if ($file->isValid() && !$file->hasMoved()) {
                    $extension = $file->getExtension();
                    $newFileName = uniqid() . '.' . $extension; // Nama file acak dengan ekstensi asli

                    $file->move('uploads/', $newFileName);

                    $slug = preg_replace('/[^a-zA-Z0-9]+/', '-', $title);
                    $slug = strtolower($slug);

                    
                   if ($target_donation < 10000) {
                        $response = [
                            'status' => 'error',
                            'message' => 'Total donasi tidak boleh kurang dari Rp 10.000,00'
                        ];
                   } else {
                     // Insert data to database
                        $data = [
                            'title' => $title,
                            'slug'  =>  $slug,
                            'description' => $description,
                            'target_donation' => $target_donation,
                            'start_date' => $start_date,
                            'end_date' => $end_date,
                            'image' => $newFileName
                        ];
                        // $datu = $CampaignModel->where('slug', $slug)->first();
                        // if ($slug === $datu['slug']) {
                        //     $response = [
                        //         'status'    =>  'error',
                        //         'message'   =>  'Slug telah dipakai atau ganti judul baru!'
                        //     ];
                        // } else {
                            $CampaignModel->insert($data);

                            $response = [
                                'status' => 'success',
                                'message' => 'Data berhasil ditambahkan.'
                            ];
                        // }
                        
                   }
                   
                } else {
                    $response = [
                        'status' => 'error',
                        'message' =>  "Harap upload gambar"
                    ];
                }
            }
        }

        return $this->response->setJSON($response);


    }

    public function details($slug)
    {
        $cm = new CampaignModel;
        $settings = new SettingsModel;
        $trans = new TransactionModel;

        $dc = $cm->where('slug', $slug)->first();

        if ($dc) {
        $users = new UsersModel;
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Details ' . $dc['title'],
            'user'          =>          $user,
            'data'          =>          $dc,
            'settings'      =>          $settings->where('id_settings', 1)->first(),
            'donatur'       =>          $trans->where('id_program', $dc['id_program'])->findAll(),
        ];

        // print_r($data);
            return view('admin/campaign/details-campaign', $data);
        } else {
           return view('errors/html/error_404.php');
        }
        
    }

    public function edit($slug)
    {   $cm = new CampaignModel;
        $settings = new SettingsModel;

        $dc = $cm->where('slug', $slug)->first();

        if ($dc) {
        $users = new UsersModel;
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Edit Campaign',
            'user'          =>          $user,
            'data'          =>          $dc,
            'settings'      =>          $settings->where('id_settings', 1)->first(),
        ];
        return view('admin/campaign/edit-campaign', $data);
    }
    }

    public function update($slug)
    {
        $campaignModel = new CampaignModel();
        
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');
        $targetDonation = $this->request->getPost('target_donation');
        $background = $this->request->getFile('background');
        
        if (empty($title) || empty($description) || empty($startDate) || empty($endDate) || empty($targetDonation)) {
            $response = [
                'status'    =>  'error',
                'message'   =>  "Form tidak boleh kosong"
            ];
        } else {
           if ($background->isValid() && !$background->hasMoved()) {
                $extension = $background->getExtension();
                $newFileName = uniqid() . '.' . $extension;
        
                $background->move('uploads', $newFileName);

                $data = [
                    'title' =>  $title,
                    'description'   =>  $description,
                    'image'    =>  $newFileName,
                    'description'   =>  $description,
                    'target_donation'   =>  $targetDonation,
                    'start_date'    =>  $startDate,
                    'end_date'      =>  $endDate,
                    'updated_at'    =>  date('Y-m-d H:i:s')
                ];

                $campaignModel->update($id, $data);

                $response = [
                    'status'    =>  'success',
                    'message'   =>  'Data berhasil diupdate'
                ];
            } else {
                $data = [
                    'title' =>  $title,
                    'description'   =>  $description,
                    'target_donation'   =>  $targetDonation,
                    'start_date'    =>  $startDate,
                    'end_date'      =>  $endDate,
                    'updated_at'    =>  date('Y-m-d H:i:s')
                ];

                $campaignModel->update($id, $data);

                $response = [
                    'status'    =>  'success',
                    'message'   =>  'Data berhasil di update'
                ];
            }
        }
        

        return $this->response->setJSON($response);
    }
    public function delete($id)
    {
        $model = new CampaignModel();

        $cm = $model->where('id_program', $id)->first();
        if ($cm) {
            $model->where('id_program', $id)->delete();
            $response = [
                'status'    =>      'success',
                'message'   =>      'Data berhasil dihapus'
            ];
        } else {
            $response = [
                'status'    =>      'error',
                'message'   =>      'Data gagal dihapus'
            ];
        }
        

        return $this->response->setJSON($response);
    }
}

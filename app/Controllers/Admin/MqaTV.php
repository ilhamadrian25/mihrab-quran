<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\MqatvModel;
use App\Models\SettingsModel;

class MqaTV extends BaseController
{
    public function index()
    {
        $users = new UsersModel;
        $mqa = new MqatvModel;
        $settings = new SettingsModel;

        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Data Mqa Tv',
            'user'          =>          $user,
            'data'          =>          $mqa->findAll(),
            'settings'      =>          $settings->where('id_settings', 1)->first(),
        ];
        return view('admin/mqa-tv/mqa-tv', $data);
    }
        public function delete($id)
        {
            // Logika untuk menghapus data dengan ID tertentu

            $model = new MqatvModel();

            $model->where('id_mqa_tv', $id)->delete();
            // Jika berhasil dihapus
            $response = [
                'status' => 'success',
                'message' => 'Data berhasil dihapus!',
            ];

            // Jika gagal menghapus
            // $response = [
            //     'status' => 'error',
            //     'message' => 'Failed to delete data. Please try again.',
            // ];

            return $this->response->setJSON($response);
        }

        public function store()
        {
            $model = new MqatvModel();
            // Validasi input
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'url_video' => 'required|valid_url'
            ]);

            if (!$validation->run($this->request->getPost())) {
                // Jika validasi gagal, kirimkan respon error
                return $this->response->setStatusCode(400)->setJSON([
                    'status' => 'error',
                    'message' => $validation->getErrors(),
                ]);
            }

            // Ambil data URL video dari input
            $urlVideo = $this->request->getPost('url_video');

            // Lakukan operasi untuk menyimpan URL video ke database
            // ...
            // ...
            $data = [
                'url_video' =>  $urlVideo
            ];
            $model->insert($data);

            // Jika berhasil, kirimkan respon sukses
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Video berhasil ditambahkan',
            ]);
        }
}

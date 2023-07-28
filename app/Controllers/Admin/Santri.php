<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\SantriModel;
use App\Models\SettingsModel;

class Santri extends BaseController
{
    public function index()
    {
        $users = new UsersModel;
        $santriModel = new SantriModel;
        $settings = new SettingsModel;

        $santri = $santriModel->findAll();

        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Data santri',
            'user'          =>          $user,
            'data'          =>          $santri,
            'settings'      =>          $settings->where('id_settings', 1)->first(),
        ];

        return view('admin/santri/santri', $data);
    }

    public function create()
    {
        $users = new UsersModel;
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Tambah data santri',
            'user'          =>          $user
        ];

        return view('admin/santri/create-santri', $data);
    }

    public function store()
    {
        $sm = new SantriModel();

        $name = $this->request->getPost('name');
        $address = $this->request->getPost('address');
        $dob = $this->request->getPost('dob');
        
        if (empty($name) || empty($address) || empty($dob)) {
            $response = [
                'status' => 'error',
                'message' => 'Harap isi semua form!'
            ];
        } else {
            $data = [
                'name'  =>  $name,
                'address'   =>  $address,
                'dob'   =>  $dob
            ];

            $sm->insert($data);

            $response = [
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan'
            ];
        }

        return $this->response->setJSON($response);
    }

    public function delete($id)
    {
        $model = new SantriModel();

        $cm = $model->where('id', $id)->first();
        if ($cm) {
            $model->where('id', $id)->delete();
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


    public function update($id)
    {
        $santriModel = new SantriModel();
        $name = $this->request->getPost('editName');

        if (!$name) {
            // Jika validasi gagal, kembalikan pesan error validasi
            $response = [
                'status' => 'error',
                'message' => 'Nama harus diisi.'
            ];
            return $this->response->setJSON($response);
        }

        // Ambil data yang akan diperbarui dari basis data
        $santri = $santriModel->find($id); // Menggunakan metode find untuk mencari data berdasarkan ID
        if (!$santri) {
            // Jika data Santri tidak ditemukan, kembalikan pesan error
            $response = [
                'status' => 'error',
                'message' => 'Data Santri tidak ditemukan.'
            ];
            return $this->response->setJSON($response);
        }

        // Perbarui data Santri
        $santriData = [
            'name' => $this->request->getPost('editName'),
            'address' => $this->request->getPost('editAddress'),
            'dob' => $this->request->getPost('editDob')
        ];
        $santriModel->update($id, $santriData); // Menggunakan metode update dengan ID dan data yang akan diperbarui

        // Berhasil memperbarui data Santri
        $response = [
            'status' => 'success',
            'message' => 'Data berhasil diperbarui.'
        ];
        return $this->response->setJSON($response);

    }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\PengurusModel;
use App\Models\SettingsModel;

class Pengurus extends BaseController
{
    public function index()
    {
        $pengurus = new PengurusModel;
        $users = new UsersModel;
        $settings = new SettingsModel;

        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();
        


        $data = [
            'title'         =>          'Data pengurus',
            'user'          =>          $user,
            'data'          =>          $pengurus->findAll(),
            'settings'      =>          $settings->where('id_settings', 1)->first(),
        ];
        return view('admin/pengurus/pengurus', $data);
    }

    public function store()
    {
        $model = new PengurusModel();


        $name = $this->request->getPost('name');
        $position = $this->request->getPost('position');
        $address = $this->request->getPost('address');

        $file = $this->request->getFile('image_profile');
        
        
        
        if ($file->isValid() && !$file->hasMoved()) {

            $extension = $file->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $file->move('uploads/', $newFileName);

            if(empty($name) || empty($position) || empty($address) || empty($file)){
                $response = [
                    'status'    =>      'error',
                    'message'   =>      'Harap isi semua form!'
                ];

            }else {
                    $data = [
                        'name'      =>      $name,
                        'profile_image'     =>      $newFileName,
                        'position'  =>  $position,
                        'address'   =>  $address
                    ];

                    $model->insert($data);

                    $response = [
                        'status'    =>      'success',
                        'message'   =>      'Data berhasil di tambah'
                    ];
            }
        } else {
            $response = [
                'status'    =>      'error',
                'message'   =>      'Harap upload gambar!'
            ];
        }
        
        return $this->response->setJSON($response);
    }

    public function delete($id)
    {
        $model = new PengurusModel;

        $pengurus = $model->where('id_pengurus', $id)->first();

        if ($pengurus) {

            $model->where('id_pengurus', $id)->delete();
            $response = [
                'status'    =>      'success',
                'message'   =>      'Data berhasil dihapus'
            ];
        } else {
            $response = [
                'status'    =>      'error',
                'message'   =>      'Data tidak ditemukan!'
            ];
        }
        

        return $this->response->setJSON($response);
    }
}

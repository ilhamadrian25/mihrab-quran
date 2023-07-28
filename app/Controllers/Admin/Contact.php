<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        //
    }

    public function update()
    {
        $contact = new ContactModel();

        $id_contact = 1;

        $address = $this->request->getPost('address');
        $no_telp = $this->request->getPost('no_telp');
        $email = $this->request->getPost('email');
        $maps = $this->request->getPost('maps');

        $data = [
            'address'   =>  $address,
            'no_telp'   =>  $no_telp,
            'email'     =>  $email,
            'maps'      =>  $maps
        ];

        if ($data) {
            $contact->update($id_contact, $data);
            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $response = [
                'status'    =>  'error',
                'message'   =>  'Data gagal berhasil di update'
            ];
        }
        return $this->response->setJSON($response);
    }
}

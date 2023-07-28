<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title'     =>      'LOGIN'
        ];

        return view('admin/login', $data);
    }

    public function store()
    {
        $UsersModel = new UsersModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $users = $UsersModel->where('email', $email)->first();

        if ($users) {
            if (password_verify($password, $users['password'])) {
                $data = [
                    'name'  =>  $users['name'],
                    'username' =>  $users['username'],
                    'role'      =>  $users['role'],
                    'logged'    =>  TRUE,
                ];

                session()->set($data);
                return redirect()->to('/admin/dashboard');
            }else {
                session()->setFlashdata('error', 'Email atau Password tidak sesuai');
                return redirect()->to('login');
            }
        }else {
            session()->setFlashdata('error', 'Email atau Password tidak sesuai');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('login');
    }
}

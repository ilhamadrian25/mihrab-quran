<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\SettingsModel;
use App\Models\TransactionModel;

class Donate extends BaseController
{
    public function index()
    {
        $users = new UsersModel;
        $settings = new SettingsModel;
        $trans = new TransactionModel;


        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();

        $data = [
            'title'     =>      'List Donate',
            'user'      =>      $user,
            'settings'  =>      $settings->where('id_settings', 1)->first(),
            'data'      =>      $trans->findAll(),
        ];

        return view('admin/donate/donate', $data);
    }
    
    public function create_donate()
    {
        $data = [
            'title'     =>      'Buat Campaign'
        ];

        return view('admin2/create-donate', $data);
    }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\SettingsModel;
use App\Models\ProfileWebsiteModel;


class Profile extends BaseController
{
    public function index()
    {
        $UsersModel = new UsersModel;
        $settings = new SettingsModel;
        $ProfileWebsite = new ProfileWebsiteModel;

        $user = $UsersModel->select('id, profile_image, username, name, email')
                           ->where('username', session()->get('username'))
                           ->first();

        $data = [
            'settings'  =>  $settings->where('id_settings', 1)->first(),
            'title'   =>  'Profile',
            'user'      =>  $user,
        ];

        return view('admin/profile/profile', $data);
    }
}

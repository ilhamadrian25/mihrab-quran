<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\SettingsModel;
use App\Models\SantriModel;
use App\Models\SocialMediaModel;
use App\Models\PageContentModel;


class Santri extends BaseController
{
    public function index()
    {
        $SocialMedia = new SocialMediaModel();
        $SantriPage = new PageContentModel();
        $settings = new SettingsModel();
        $contact = new ContactModel();
        $santri = new SantriModel();

        $data = [
            'santri'    =>  $SantriPage->where('page_name', 'santri-page')->first(),
            'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
            'settings'  =>  $settings->where('id_Settings', 1)->first(),
            'contact'   =>  $contact->where('id_contact', 1)->first(),
            'data'  =>  $santri->findAll(),
            'title' => 'Data santri',
        ];
        return view('santri', $data);
    }
}

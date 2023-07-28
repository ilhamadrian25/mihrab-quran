<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MqatvModel;
use App\Models\SettingsModel;
use App\Models\ContactModel;
use App\Models\SocialMediaModel;
use App\Models\PageContentModel;

class MqaTV extends BaseController
{
    public function index()
    {
        $mqa = new MqatvModel();
        $mqatv = new MqaTvModel();
        $contact = new ContactModel();
        $settings = new SettingsModel();
        $pagecontent = new PageContentModel();
        $SocialMedia = new SocialMediaModel();

        $data = [
            'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
            'mqatv' =>  $pagecontent->where('page_name', 'mqa-tv-page')->first(),
            'settings'  =>  $settings->where('id_settings', 1)->first(),
            'contact'  =>  $contact->where('id_contact', 1)->first(),
            'data'      =>      $mqa->paginate(10),
            'pager'     =>      $mqa->pager,
            'title' =>  'Mqa tv'
        ];

        return view('mqa-tv', $data);
    }
}

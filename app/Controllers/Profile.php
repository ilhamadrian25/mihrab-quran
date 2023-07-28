<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingsModel;
use App\Models\ContactModel;
use App\Models\PengurusModel;
use App\Models\SocialMediaModel;
use App\Models\ProfileWebsiteModel;
use App\Models\PageContentModel;

class Profile extends BaseController
{
    public function index()
    {
        $contact = new ContactModel();
        $settings = new SettingsModel();
        $pengurus = new PengurusModel();
        $SocialMedia = new SocialMediaModel();
        $ProfileWebsite = new ProfileWebsiteModel();
        $PageContent = new PageContentModel();

        $data = [
            'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
            'profile'   =>  $PageContent->where('id_page_content', 12)->first(),
            'settings'  =>  $settings->where('id_Settings', 1)->first(),
            'contact'   =>  $contact->where('id_contact', 1)->first(),
            'data'  =>  $pengurus->findAll(),
            'title' => 'Profile',
        ];
        return view('profile', $data);
    }
}

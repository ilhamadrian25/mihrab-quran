<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\SettingsModel;
use App\Models\GalleryModel;
use App\Models\SocialMediaModel;
use App\Models\PageContentModel;

class Gallery extends BaseController
{
    public function index()
    {
        $contact = new ContactModel();
        $settings = new SettingsModel();
        $gallery = new GalleryModel();
        $SocialMedia = new SocialMediaModel();
        $PageContent = new PageContentModel();

        $data = [
            'gallery'   =>  $PageContent->where('page_name', 'gallery-page')->first(),
            'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
            'settings'  =>  $settings->where('id_settings', 1)->first(),
            'contact'  =>  $contact->where('id_contact', 1)->first(),
            'data'      =>      $gallery->paginate(5),
            'pager'     =>      $gallery->pager,
            'title' =>  'Album',
        ];

        return view('gallery', $data);
    }
}

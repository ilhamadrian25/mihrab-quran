<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PageContentModel;
use App\Models\TransactionModel;
use App\Models\SocialMediaModel;
use App\Models\SettingsModel;
use App\Models\CampaignModel;
use App\Models\ContactModel;
use Midtrans\Config;
use Midtrans\Snap;

class Campaign extends BaseController
{
    public function index()
    {
        $campaign = new CampaignModel();
        $contact = new ContactModel();
        $settings = new SettingsModel();
        $SocialMedia = new SocialMediaModel();
        $PageContent = new PageContentModel();

        $data = [
          'campaign'  =>  $PageContent->where('page_name', 'campaign-page')->first(),
          'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
          'settings'  =>  $settings->where('id_Settings', 1)->first(),
          'contact'   =>  $contact->where('id_contact', 1)->first(),
          'data'  =>  $campaign->findAll(),
          'title' =>  'Program',
        ];
        return view('campaign', $data);
    }

    public function details($slug)
    {
      $SocialMedia = new SocialMediaModel();
      $settings = new SettingsModel();
      $campaign = new CampaignModel();
      $trans = new TransactionModel();
      $contact = new ContactModel();

      $camp = $campaign->where('slug', $slug)->first();

      if ($camp) {

      $data = [
        'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
        'settings'  =>  $settings->where('id_settings', 1)->first(),
        'contact'  =>  $contact->where('id_contact', 1)->first(),
        'title' =>  $camp['title'],
        'data'  =>  $camp,
      ];

      print_r(session()->get());
        return view('payment', $data);
      }else {
        return view('errors/html/error_404.php');
      }
    }
}

<?php

namespace App\Controllers;
use App\Models\CampaignModel;
use App\Models\ContactModel;
use App\Models\SettingsModel;
use App\Models\SocialMediaModel;
use App\Models\TransactionModel;
use App\Models\PageContentModel;

class Home extends BaseController
{
    public function index()
    {
        $SocialMedia = new SocialMediaModel();
        $settings = new SettingsModel();
        $campaign = new CampaignModel();
        $trans = new TransactionModel();
        $contact = new ContactModel();
        $PageContent = new PageContentModel();

        $result = $trans->where('status_transaction', 'success')->selectSum('donation_amount')->get()->getRow();
        $totalDonation = $result->donation_amount;

        $data = [
            'donatur'   =>  $trans->where('status_transaction', 'success')->countAll(),
            'banner1'   =>  $PageContent->where('page_name', 'home-banner-1')->first(),    
            'banner2'   =>  $PageContent->where('page_name', 'home-banner-2')->first(),    
            'banner3'   =>  $PageContent->where('page_name', 'home-banner-3')->first(),    
            'banner4'   =>  $PageContent->where('page_name', 'home-banner-4')->first(),    
            'banner5'   =>  $PageContent->where('page_name', 'home-banner-5')->first(),  
            'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
            'profile'   =>  $PageContent->where('id_page_content', 12)->first(),  
            'settings'  =>  $settings->where('id_settings', 1)->first(),
            'contact'  =>  $contact->where('id_contact', 1)->first(),
            'campaign'  =>  $campaign->findAll(),
            'title' =>  'Mihrab qur`an al-fatih',
            'donation'  =>  $totalDonation,
        ];

        // print_r($totalDonation);
        return view('home', $data);
        }

        public function formatAngka($number) {
        $suffix = '';
        
        if ($number >= 1000000000) {
            $number = round($number / 1000000000, 0);
            $suffix = ' Milyar';
        } elseif ($number >= 1000000) {
            $number = round($number / 1000000, 0);
            $suffix = ' Juta';
        } elseif ($number >= 100000) {
            $number = round($number / 100000, 0);
            $suffix = ' Ratus ribu';
        } elseif ($number >= 1000) {
            $number = round($number / 1000, 0);
            $suffix = ' Ribu';
        }
        
        return $number . $suffix;
    }
}

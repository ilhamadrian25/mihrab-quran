<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\ContactModel;
use App\Models\SettingsModel;
use App\Models\SocialMediaModel;
use App\Models\PageContentModel;
use CodeIgniter\Files\File;

class Website extends BaseController
{
    public function index()
    {
        $users = new UsersModel;
        $contact = new ContactModel;
        $settings = new SettingsModel;
        $PageContent = new PageContentModel;
        $socialmedia = new SocialMediaModel;

        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();

        $data = [
            'detailsarticle'=>          $PageContent->where('page_name', 'details-article-page')->first(),    
            'banner1'       =>          $PageContent->where('page_name', 'home-banner-1')->first(),    
            'banner2'       =>          $PageContent->where('page_name', 'home-banner-2')->first(),    
            'banner3'       =>          $PageContent->where('page_name', 'home-banner-3')->first(),    
            'banner5'       =>          $PageContent->where('page_name', 'home-banner-5')->first(),
            'banner4'       =>          $PageContent->where('page_name', 'home-banner-4')->first(),    
            'campaign'      =>          $PageContent->where('page_name', 'campaign-page')->first(),    
            'gallery'       =>          $PageContent->where('page_name', 'gallery-page')->first(),    
            'profile'       =>          $PageContent->where('page_name', 'profile-page')->first(),    
            'article'       =>          $PageContent->where('page_name', 'article-page')->first(),    
            'santri'        =>          $PageContent->where('page_name', 'santri-page')->first(),    
            'mqatv'         =>          $PageContent->where('page_name', 'mqa-tv-page')->first(),    
            'socialmedia'   =>          $socialmedia->where('id_social_media', 1)->first(),
            'settings'      =>          $settings->where('id_settings', 1)->first(),
            'contact'       =>          $contact->where('id_contact', 1)->first(),
            'title'         =>          'Pengaturan Webiste',
            'user'          =>          $user,
        ];
        // print_r($data);
        return view('admin/website/website', $data);
    }

    public function update()
    {
        $settings = new SettingsModel();
        $id_settings = 1;

        $title = $this->request->getPost('title');

        if (empty($title)) {
            $response = [
                'status'        =>      'error',
                'message'       =>      'Form tidak boleh kosong'
            ];
        } else {
            $data = [
                'title'     =>      $title,
            ];
    
            $settings->update($id_settings, $data);

            $response = [
            'status'    =>      'success',
            'message'   =>      'Data berhasil diupdate'
            ];
        }
        return $this->response->setJSON($response);
    }

    public function update_favicon()
    {
        if ($this->request->getFile('file')->isValid()) {
            $image = $this->request->getFile('file');

            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/', 'favicon.ico');

            return redirect()->to(base_url('admin/website'));
        } else {
            echo 'Gagal mengunggah gambar.';
        }
    }
}

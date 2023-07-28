<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SocialMediaModel;

class SocialMedia extends BaseController
{
    public function index()
    {
        //
    }

    public function update()
    {
        $SocialMedia = new SocialMediaModel();
        
        $id_social_media = 1;

        $facebook = $this->request->getPost('facebook_url');
        $youtube = $this->request->getPost('youtube_url');
        $instagram = $this->request->getPost('instagram_url');


        $data = [
            'facebook_url'  =>  $facebook,
            'youtube_url'  =>  $youtube,
            'instagram_url'  =>  $instagram,
        ];

        if (!empty($data)) {
            $SocialMedia->update($id_social_media, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        }
        
        return $this->response->setJSON($response);
    }
}

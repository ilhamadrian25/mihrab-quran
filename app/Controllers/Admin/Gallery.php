<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GalleryModel;
use App\Models\SettingsModel;

class Gallery extends BaseController
{
    public function index()
    {
        $gm = new GalleryModel;
        $users = new UsersModel;
        $settings = new SettingsModel; 
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'title'         =>          'Data album',
            'user'          =>          $user,
            'data'          =>          $gm->orderBy('id_gallery', 'desc')->findAll(),
            'settings'      =>          $settings->where('id_settings', 1)->first(),
        ];

        return view('admin/gallery/gallery', $data);
    }

    public function store()
    {
        $model = new GalleryModel;
         // Load the validation library
        $validation = \Config\Services::validation();

        // Set validation rules

        $validation->setRules(
            [
                'albumImage' => 'uploaded[albumImage]|mime_in[albumImage,image/jpg,image/jpeg,image/png]|max_size[albumImage,2048]'
            ],
            [   // Errors
                'albumImage' => [
                    'uploaded' => 'Please select an image to upload.',
                    'mime_in' => 'Invalid file format. Only JPG, JPEG, and PNG files are allowed.',
                    'max_size' => 'The file size exceeds the maximum limit.'
                    ],
            ]
        );

        // Check if validation passes
        if (!$validation->withRequest($this->request)->run()) {
            // Return validation errors
            $errors = $validation->getErrors();
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $errors
            ]);
        }

        // File upload code
        $image = $this->request->getFile('albumImage');

        // Generate a unique name for the uploaded file
        $imageName = $image->getRandomName();

        // Move the uploaded file to the desired location
        if (!$image->move('./uploads', $imageName)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to upload the image.'
            ]);
        }

        $data = [
            'image'     =>      $imageName
        ];
        $model->insert($data);
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Album successfully added!'
        ]);
    }

    public function delete()
    {
        $model = new GalleryModel;

        $request = $this->request->getPost();
        $albumId = $request['albumId'];


        $model->where('id_gallery', $albumId)->delete();
        $response = [
            'status' => 'success',
            'message'   =>  'Album berhasil dihapus'
        ];

        return $this->response->setJSON($response);
    }
}

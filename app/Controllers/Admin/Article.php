<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\SettingsModel;
use App\Models\ArticleModel;

class Article extends BaseController
{
    public function index()
    {
        $users = new UsersModel;
        $settings = new SettingsModel;
        $article = new ArticleModel;

        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();

        $data = [
            'settings'      =>          $settings->where('id_settings', 1)->first(),
            'data'          =>          $article->findAll(),
            'title'         =>          'Artikel',
            'user'          =>          $user,
        ];

        // print_r($data);
        return view('admin/article/article', $data);
    }

    public function create()
    {
        $users = new UsersModel;
        $settings = new SettingsModel;
        
        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();


        $data = [
            'settings'      =>          $settings->where('id_settings', 1)->first(),
            'title'         =>          'Buat Artikel',
            'user'          =>          $user,
        ];

        return view('admin/article/create-article', $data);
    }

    public function store()
    {
        $users = new UsersModel();
        $article = new ArticleModel();

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $file = $this->request->getFile('image');
        $status = $this->request->getPost('status');
        

        if (empty($title) || empty($content) || empty($file) || empty($status)) {

            $response = [
                'status'        =>      'error',
                'message'       =>      'Isi semua form!'
            ];
            
        } else {

        if ($file->isValid() && !$file->hasMoved()) {

            $text = strtolower($title);
            $text = preg_replace('/[^a-z0-9-]+/', '-', $text);
            $text = trim($text, '-');
            $text = preg_replace('/-+/', '-', $text);

            // Check the uniqueness of the slug
            if ($article->where('slug', $text)->countAllResults() > 0) {
                // Slug is not unique, generate a new one
                $text = $text . '-' . uniqid();
            }

            $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();
                    
            $extension = $file->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $file->move('uploads/', $newFileName);

            $data = [
                'user_id'       =>      $user['id'],
                'title'         =>      $title,
                'content'       =>      $content,
                'slug'          =>      $text,
                'image'         =>      $newFileName,
                'status'        =>      $status
            ];

            $article->insert($data);

            $response = [
                'status'    =>      'success',
                'message'   =>      'Artikel berhasil dibuat'
            ];

        } else {
            // Validation failed, return the validation errors
            $response = [
                'status' => 'error',
                'message' => $this->validator->getErrors(),
            ];

        }
    }
    return $this->response->setJSON($response);

    }

    public function delete($id)
    {
        $model = new ArticleModel;

        $pengurus = $model->where('id_article', $id)->first();

        if ($pengurus) {

            $model->where('id_article', $id)->delete();
            $response = [
                'status'    =>      'success',
                'message'   =>      'Data berhasil dihapus'
            ];
        } else {
            $response = [
                'status'    =>      'error',
                'message'   =>      'Data tidak ditemukan!'
            ];
        }
        

        return $this->response->setJSON($response);
    }

    public function edit($slug)
    {
        $ArticleModel = new ArticleModel();
        $users = new UsersModel;
        $settings = new SettingsModel;

        $article = $ArticleModel->where('slug', $slug)->first();


        $user = $users->select('id, profile_image, name, username, email, role')
                      ->where('username', session()->get('username'))
                      ->first();

        $data = [
            'settings'      =>          $settings->where('id_settings', 1)->first(),
            'data'          =>          $article,
            'title'         =>          'Edit ' . $article['title'],
            'user'          =>          $user,
        ];


        if ($article) {
            return view('admin/article/edit-article', $data);
        } else {
            return view('errors/html/error_404');
        }
    }

    public function update($id_article)
    {
        $ArticleModel = new ArticleModel();

        $article = $ArticleModel->where('id_article', $id_article)->first();
        if (empty($article)) {
            return view('errors/html/error_404');
        };

        $title = $this->request->getPost('title');
        $image = $this->request->getFile('image');
        $status = $this->request->getPost('status');
        $content = $this->request->getPost('content');


        if ($image->isValid() && !$image->hasMoved()) {
            if ($title && $status && $content) {
                $extension = $image->getExtension();
                $newFileName = uniqid() . '.' . $extension;

                $image->move('uploads', $newFileName);

                $data = [
                    'title'     =>      $title,
                    'image'     =>      $newFileName,
                    'status'    =>      $status,
                    'content'   =>      $content
                ];

                $ArticleModel->update($id_article, $data);

                $response = [
                    'status'        =>      'success',
                    'message'       =>      'Data berhasil diupdate'
                ];

            } else {
                $response = [
                    'status'        =>      'error',
                    'message'       =>      'Form tidak boleh kosong'
                ];
            }
        } else {

            if ($title && $status && $content) {
                $data = [
                    'title'     =>      $title,
                    'status'    =>      $status,
                    'content'   =>      $content
                ];
            
                $ArticleModel->update($id_article, $data);
                $response = [
                    'status'        =>      'success',
                    'message'       =>      'Data berhasil di update'
                ];
            } else {
                $response = [
                    'status'        =>      'error',
                    'message'       =>      'Form tidak boleh kosong'
                ];
            }
        }

        return $this->response->setJSON($response);
    }
}
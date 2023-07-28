<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PageContentModel;

class PageContent extends BaseController
{
    public function index()
    {
        //
    }
    
    public function banner1()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 1;
        
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $heading = $this->request->getPost('heading');
        $description = $this->request->getPost('description');
        $background = $this->request->getFile('background');



        if ($background->isValid() && !$background->hasMoved()) {
            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'heading'   =>  $heading,
                'description'   =>  $description,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $data = [
                'title' =>  $title,
                'heading'   =>  $heading,
                'description'   =>  $description,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        }
        

        return $this->response->setJSON($response);

    }

    public function banner2()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 2;
        
        $title = $this->request->getPost('title');
        $heading = $this->request->getPost('heading');
        $description = $this->request->getPost('description');

            
            if (empty($title) || empty($heading) || empty($description)) {
                $response = [
                    'status'    =>  'error',
                    'message'   =>  'Form tidak boleh kosong'
                ];
            } else {
                $data = [
                'title' =>  $title,
                'heading'   =>  $heading,
                'description'   =>  $description,
                'updated_at'    =>  date('Y-m-d H:i:s')
                ];

                $PageContent->update($id_page_content, $data);

                $response = [
                    'status'    =>  'success',
                    'message'   =>  'Data berhasil di update'
                ];
            }

        return $this->response->setJSON($response);

    }

    public function banner3()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 3;
        
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $heading = $this->request->getPost('heading');
        $description = $this->request->getPost('description');
        $background = $this->request->getFile('background');

        if ($background->isValid() && !$background->hasMoved()) {

            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'heading'   =>  $heading,
                'description'   =>  $description,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];

        } else {

            $data = [
                'title' =>  $title,
                'heading'   =>  $heading,
                'description'   =>  $description,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];

        }

        return $this->response->setJSON($response);

    }

    public function banner4()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 4;
        
        $title = $this->request->getPost('title');
        $heading = $this->request->getPost('heading');
        $background = $this->request->getFile('background');

                if ($background->isValid() && !$background->hasMoved()) {

                    $extension = $background->getExtension();
                    $newFileName = uniqid() . '.' . $extension;
            
                    $background->move('image/pages', $newFileName);

                    $data = [
                        'title' =>  $title,
                        'heading'   =>  $heading,
                        'background'    =>  $newFileName,
                        'updated_at'    =>  date('Y-m-d H:i:s')
                    ];

                    $PageContent->update($id_page_content, $data);

                    $response = [
                        'status'    =>  'success',
                        'message'   =>  'Data berhasil di update'
                    ];
                } else {
                    $data = [
                        'title' =>  $title,
                        'heading'   =>  $heading,
                        'updated_at'    =>  date('Y-m-d H:i:s')
                    ];

                    $PageContent->update($id_page_content, $data);

                    $response = [
                        'status'    =>  'success',
                        'message'   =>  'Data berhasil di update'
                    ];
                }

        return $this->response->setJSON($response);

    }

    public function profile()
    {
    $PageContent = new PageContentModel();

    $id_page_content = 12;

    $background = $this->request->getFile('background');
    $title = $this->request->getVar('title');
    $heading = $this->request->getVar('heading');
    $description = $this->request->getVar('description');

    if ($background->isValid() && !$background->hasMoved()) {
        $extension = $background->getExtension();
        $newFileName = uniqid() . '.' . $extension;

        $background->move('image/pages', $newFileName);

        $data = [
            'title' =>  $title,
            'heading'   =>  $heading,
            'description' => $description,
            'background'    =>  $newFileName,
            'updated_at'    =>  date('Y-m-d H:i:s')
        ];

        $PageContent->update($id_page_content, $data);

        $response = [
            'status'    =>  'success',
            'message'   =>  'Data berhasil di update'
        ];
    } else {
        $data = [
            'title' =>  $title,
            'heading'   =>  $heading,
            'description' => $description,
            'updated_at'    =>  date('Y-m-d H:i:s')
        ];

        $PageContent->update($id_page_content, $data);

        $response = [
            'status'    =>  'success',
            'message'   =>  'Data berhasil di update'
        ];
    }

    return $this->response->setJSON($response);
    }

    public function santri()
    {
        $PageContent = new PageContentModel();

        $page_name = 'santri-page';
        $id_page_content = 13;
        
        $title = $this->request->getPost('title');
        $background = $this->request->getFile('background');

        if (empty($background)) {
            
            if (empty($title)) {
                $response = [
                    'status'    =>  'error',
                    'message'   =>  'Form tidak boleh kosong'
                ];
            } else {
                $data = [
                'title' =>  $title,
                'updated_at'    =>  date('Y-m-d H:i:s')
                ];

                $PageContent->update($id_page_content, $data);

                $response = [
                    'status'    =>  'success',
                    'message'   =>  'Data berhasil di update'
                ];
            }

        } else {

            if (empty($title)) {
                
                $response = [
                    'status'    =>  'error',
                    'message'   =>  'Harap isi semua form!'
                ];

            } else {

                if ($background->isValid() && !$background->hasMoved()) {
                    
                $extension = $background->getExtension();
                $newFileName = uniqid() . '.' . $extension;
        
                $background->move('image/pages', $newFileName);

                $data = [
                    'title' =>  $title,
                    'background'    =>  $newFileName,
                    'updated_at'    =>  date('Y-m-d H:i:s')
                ];

                $PageContent->update($id_page_content, $data);

                $response = [
                    'status'    =>  'success',
                    'message'   =>  'Data berhasil di update'
                ];
                } else {
                    $response = [
                        'status'    =>  'success',
                        'message'   =>  'Harap upload gambar!!'
                    ];
                }                

            }  
        }

        return $this->response->setJSON($response);
    }

    public function campaign()
    {
        $PageContent = new PageContentModel();

        $page_name = 'santri-page';
        $id_page_content = 14;
        
        $title = $this->request->getPost('title');
        $background = $this->request->getFile('background');

        if ($background->isValid() && !$background->hasMoved()) {
            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
            
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $data = [
                'title'     =>      $title
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'  =>  'success',
                'message'=>  'Data berhasil diupdate'
            ];
        }
        
        
        return $this->response->setJSON($response);


        // if (empty($background)) {
            
        //     if (empty($title)) {
        //         $response = [
        //             'status'    =>  'error',
        //             'message'   =>  'Form tidak boleh kosong'
        //         ];
        //     } else {
        //         $data = [
        //         'title' =>  $title,
        //         'updated_at'    =>  date('Y-m-d H:i:s')
        //         ];

        //         $PageContent->update($id_page_content, $data);

        //         $response = [
        //             'status'    =>  'success',
        //             'message'   =>  'Data berhasil di update'
        //         ];
        //     }

        // } else {

        //     if (empty($title)) {
                
        //         $response = [
        //             'status'    =>  'error',
        //             'message'   =>  'Harap isi semua form!'
        //         ];
        //     } else {

        //         if ($background->isValid() && !$background->hasMoved()) {

        //             $extension = $background->getExtension();
        //             $newFileName = uniqid() . '.' . $extension;
            
        //             $background->move('image/pages', $newFileName);

        //             $data = [
        //                 'title' =>  $title,
        //                 'background'    =>  $newFileName,
        //                 'updated_at'    =>  date('Y-m-d H:i:s')
        //             ];

        //             $PageContent->update($id_page_content, $data);

        //             $response = [
        //                 'status'    =>  'success',
        //                 'message'   =>  'Data berhasil di update'
        //             ];

        //         } else {

        //            $response = [
        //             'status'    =>  'error',
        //             'message'   =>  'Harap upload gambar'
        //            ];

        //         }
                
        //     }  
        // }

    }

    public function mqa_tv()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 15;
        
        $title = $this->request->getPost('title');
        $background = $this->request->getFile('background');



        if ($background->isValid() && !$background->hasMoved()) {
            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $data = [
                'title' =>  $title,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        }
        

        return $this->response->setJSON($response);
    }

    public function gallery()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 16;
        
        $title = $this->request->getPost('title');
        $background = $this->request->getFile('background');



        if ($background->isValid() && !$background->hasMoved()) {
            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $data = [
                'title' =>  $title,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        }
        

        return $this->response->setJSON($response);
    }
    public function article()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 17;
        
        $title = $this->request->getPost('title');
        $background = $this->request->getFile('background');



        if ($background->isValid() && !$background->hasMoved()) {
            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $data = [
                'title' =>  $title,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        }
        

        return $this->response->setJSON($response);
    }

    public function details_article()
    {
        $PageContent = new PageContentModel();

        $id_page_content = 18;
        
        $title = $this->request->getPost('title');
        $background = $this->request->getFile('background');



        if ($background->isValid() && !$background->hasMoved()) {
            $extension = $background->getExtension();
            $newFileName = uniqid() . '.' . $extension;
    
            $background->move('image/pages', $newFileName);

            $data = [
                'title' =>  $title,
                'background'    =>  $newFileName,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        } else {
            $data = [
                'title' =>  $title,
                'updated_at'    =>  date('Y-m-d H:i:s')
            ];

            $PageContent->update($id_page_content, $data);

            $response = [
                'status'    =>  'success',
                'message'   =>  'Data berhasil di update'
            ];
        }
        

        return $this->response->setJSON($response);
    }

}

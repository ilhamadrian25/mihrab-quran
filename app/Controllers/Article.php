<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SocialMediaModel;
use App\Models\PageContentModel;
use App\Models\SettingsModel;
use App\Models\ContactModel;
use App\Models\ArticleModel;
use CodeIgniter\Pager\Pager;

class Article extends BaseController
{
    public function index()
    {
        $PageContentModel = new PageContentModel();
        $SocialMedia = new SocialMediaModel();
        $ArticleModel = new ArticleModel();
        $settings = new SettingsModel();
        $contact = new ContactModel();

        $data = [
            'article'   =>  $PageContentModel->where('page_name', 'article-page')->first(),
            'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
            'settings'  =>  $settings->where('id_settings', 1)->first(),
            'contact'  =>  $contact->where('id_contact', 1)->first(),
            'data'  =>  $ArticleModel->where('status', 'publish')->paginate(10),
            'pager'  =>  $ArticleModel->pager,
            'title' =>    "Artikel",
        ];

        return view('article', $data);
    }

    public function details($slug)
    {
        $PageContentModel = new PageContentModel();
        $SocialMedia = new SocialMediaModel();
        $ArticleModel = new ArticleModel();
        $settings = new SettingsModel();
        $contact = new ContactModel();

        $article = $ArticleModel->where('slug', $slug)->first();

        if ($article) {
            $data = [
                'details_article'   =>  $PageContentModel->where('page_name', 'details-article-page')->first(),
                'social_media'  =>  $SocialMedia->where('id_social_media', 1)->first(),
                'settings'  =>  $settings->where('id_settings', 1)->first(),
                'contact'  =>  $contact->where('id_contact', 1)->first(),
                'data'      =>      $article,
                'title'     =>  $article['title']
            ];
            return view('details-article', $data);
        } else {
            return view('errors/html/error_404.php');
        }
    }

    public function edit($slug)
    {
        $ArticleModel = new ArticleModel();

        $article = $ArticleModel->where('slug', $slug)->first();


        if ($article) {
            echo 'hello';
            // return view('admin/article/edit-article');
        } else {
            // return view('errors/html/error_404');
            echo 'helloa';
        }
        
    }

    public function update()
    {

    }
}

<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
// use \App\Middleware\VerifyAuthMiddleware;

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index', ['filter' => 'LoginFilter']);
$routes->post('/store', 'Auth::store');

// Frontend
$routes->get('/gallery', 'Gallery::index');
$routes->get('/mqa-tv', 'MqaTv::index');
$routes->get('/campaign', 'Campaign::index');
$routes->get('/c/(:any)', 'Campaign::details/$1');
$routes->get('/profile', 'Profile::index');
$routes->get('/santri', 'Santri::index');

$routes->post('pembayaran/process_payment', 'Transaction::processPayment');
$routes->post('/transaction', 'Transaction::store');
$routes->post('/transaction/handle-notification', 'Transaction::handleNotification');

$routes->get('/article', 'Article::index');
$routes->get('/a/(:any)', 'Article::details/$1');

$routes->get('/order-status', 'Order::index');
$routes->get('/session', 'Session::snap_token');
$routes->post('/remove-snap-token', 'Session::remove_snap_token');


$routes->get('/logout', 'Auth::logout');



    $routes->group('admin', ['filter' => 'auth'], function ($routes) {
        // Rute untuk tampilan dashboard admin
        $routes->get('dashboard', 'Admin\Dashboard::index', ['filter' => 'AdminFilter']);
        
        // Gallery
        $routes->get('gallery', 'Admin\Gallery::index', ['filter' => 'AdminFilter']);
        $routes->post('gallery', 'Admin\Gallery::store', ['filter' => 'AdminFilter']);
        $routes->post('gallery/delete', 'Admin\Gallery::delete', ['filter' => 'AdminFilter']);
        
        // Profile
        // $routes->get('profile', 'Admin\Profile::index', ['filter' => 'AdminFilter']);
        
        // Article
        $routes->get('article/create-article', 'Admin\Article::create', ['filter' => 'AdminFilter']);
        $routes->post('article/delete/(:num)', 'Admin\Article::delete/$1', ['filter' => 'AdminFilter']);
        $routes->get('article/edit/(:any)', 'Admin\Article::edit/$1', ['filter' => 'AdminFilter']);
        $routes->post('article/edit/(:any)', 'Admin\Article::update/$1', ['filter' => 'AdminFilter']);
        $routes->post('article', 'Admin\Article::store', ['filter' => 'AdminFilter']);
        $routes->get('article', 'Admin\Article::index', ['filter' => 'AdminFilter']);

        
        // Donate
        $routes->get('donate', 'Admin\Donate::index', ['filter' => 'AdminFilter']);
        $routes->get('donate/create-donate', 'Admin\Donate::create_donate', ['filter' => 'AdminFilter']);
        
        // MQA TV
        $routes->get('mqa-tv', 'Admin\MqaTV::index', ['filter' => 'AdminFilter']);
        $routes->post('mqa-tv', 'Admin\MqaTV::store', ['filter' => 'AdminFilter']);
        $routes->delete('mqatv/delete/(:num)', 'Admin\MqaTv::delete/$1', ['filter' => 'AdminFilter']);
        
        
        // Campaign
        $routes->get('campaign', 'Admin\Campaign::index', ['filter' => 'AdminFilter']);
        $routes->get('campaign/details/(:any)', 'Admin\Campaign::details/$1', ['filter' => 'AdminFilter']);
        $routes->get('campaign/create-campaign', 'Admin\Campaign::create', ['filter' => 'AdminFilter']);
        $routes->get('campaign/edit/(:any)', 'Admin\Campaign::edit/$1', ['filter' => 'AdminFilter']);
        $routes->post('campaign', 'Admin\Campaign::store', ['filter' => 'AdminFilter']);
        $routes->post('campaign/delete/(:num)', 'Admin\Campaign::delete/$1', ['filter' => 'AdminFilter']);
        $routes->post('campaign/update/(:any)', 'Admin\Campaign::update/$1', ['filter' => 'AdminFilter']);
        
        // Santri
        $routes->get('santri', 'Admin\Santri::index', ['filter' => 'AdminFilter']);
        $routes->post('santri', 'Admin\Santri::store', ['filter' => 'AdminFilter']);
        $routes->post('santri/update/(:num)', 'Admin\Santri::update/$1', ['filter' => 'AdminFilter']);
        $routes->post('santri/delete/(:num)', 'Admin\Santri::delete/$1', ['filter' => 'AdminFilter']);
        
        // Pengurus
        $routes->get('pengurus', 'Admin\Pengurus::index', ['filter' => 'AdminFilter']);
        $routes->post('pengurus', 'Admin\Pengurus::store', ['filter' => 'AdminFilter']);
        $routes->post('pengurus/delete/(:num)', 'Admin\Pengurus::delete/$1', ['filter' => 'AdminFilter']);
        
        // Website
        $routes->get('website', 'Admin\Website::index', ['filter' => 'AdminFilter']);
        $routes->post('website/update', 'Admin\Website::update', ['filter' => 'AdminFilter']);
        $routes->post('website/update-favicon', 'Admin\Website::update_favicon', ['filter' => 'AdminFilter']);

        // Contact
        $routes->post('contact', 'Admin\Contact::update', ['filter' => 'AdminFilter']);
        
        // Social Media
        $routes->post('social-media', 'Admin\SocialMedia::update', ['filter' => 'AdminFilter']);

        // Page Home 
        $routes->post('banner-1', 'Admin\PageContent::banner1', ['filter' => 'AdminFilter']);
        $routes->post('banner-2', 'Admin\PageContent::banner2', ['filter' => 'AdminFilter']);
        $routes->post('banner-3', 'Admin\PageContent::banner3', ['filter' => 'AdminFilter']);
        $routes->post('banner-4', 'Admin\PageContent::banner4', ['filter' => 'AdminFilter']);
        
        // Page Profile
        $routes->post('profile-page', 'Admin\PageContent::profile', ['filter' => 'AdminFilter']);
        
        // Page Santri
        $routes->post('santri-page', 'Admin\PageContent::santri', ['filter' => 'AdminFilter']);
        
        // Page Campaign
        $routes->post('campaign-page', 'Admin\PageContent::campaign', ['filter' => 'AdminFilter']);
        
        // Page Mqa TV
        $routes->post('mqa-tv-page', 'Admin\PageContent::mqa_tv', ['filter' => 'AdminFilter']);
        
        // Gallery Page
        $routes->post('gallery-page', 'Admin\PageContent::gallery', ['filter' => 'AdminFilter']);

        // Article Page
        $routes->post('article-page', 'Admin\PageContent::article', ['filter' => 'AdminFilter']);
        $routes->post('details-article-page', 'Admin\PageContent::details_article', ['filter' => 'AdminFilter']);
    });
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

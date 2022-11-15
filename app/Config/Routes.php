<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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

$routes->group('kamar', function ($routes) {
    $routes->get('', 'Admin\Kamar\setKamar::index');
    $routes->get('tambah', 'Admin\Kamar\setKamar::tambah');
    $routes->get('edit', 'Admin\Kamar\setKamar::update');
    $routes->post('save', 'Admin\Kamar\setKamar::save');
});
$routes->group('jenis', function ($routes) {
    $routes->get('', 'Admin\Kamar\jenisKamar::index');
    $routes->get('tambah', 'Admin\Kamar\jenisKamar::tambah');
    $routes->get('edit', 'Admin\Kamar\jenisKamar::update');
    $routes->post('save', 'Admin\Kamar\jenisKamar::save');
});
$routes->group('tarif', function ($routes) {
    $routes->get('', 'Admin\Kamar\tarifKamar::index');
    $routes->get('tambah', 'Admin\Kamar\tarifKamar::tambah');
    $routes->get('edit', 'Admin\Kamar\tarifKamar::update');
});
$routes->group('reservasi', function ($routes) {
    $routes->get('', 'Admin\Reservasi::index');
});
$routes->group('users', function ($routes) {
    $routes->get('', 'Admin\Users::index');
    $routes->get('tambah', 'Admin\Users::tambah');
    $routes->get('edit', 'Admin\Users::edit');
    $routes->post('save', 'Admin\Users::save');
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

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
    // index
    $routes->get('', 'Admin\Kamar\setKamar::index');
    // tambah
    $routes->get('tambah', 'Admin\Kamar\setKamar::tambah');
    $routes->post('save', 'Admin\Kamar\setKamar::save');
    // hapus
    $routes->get('hapus-kamar/(:num)', 'Admin\Kamar\setKamar::hapusKamar/$1');
    // edit
    $routes->get('edit-kamar/(:segment)', 'Admin\Kamar\setKamar::editKamar/$1');
    $routes->post('update-kamar/(:segment)', 'Admin\Kamar\setKamar::updateKamar/$1');
});
$routes->group('jenis', function ($routes) {
    // index
    $routes->get('', 'Admin\Kamar\jenisKamar::index');
    // tambah
    $routes->get('tambah', 'Admin\Kamar\jenisKamar::tambah');
    $routes->post('save', 'Admin\Kamar\jenisKamar::save');
    // tambah-foto
    $routes->get('tambah-foto',  'Admin\Kamar\jenisKamar::tambahFoto');
    $routes->post('simpan-foto/(:num)',  'Admin\Kamar\jenisKamar::simpanFoto/$1');
    // edit
    $routes->get('edit/(:num)', 'Admin\Kamar\jenisKamar::edit/$1');
    $routes->post('update/(:num)', 'Admin\Kamar\jenisKamar::update/$1');
    // hapus
    $routes->get('hapus/(:num)', 'Admin\Kamar\jenisKamar::hapus/$1');
    // foto
    $routes->get('foto/(:num)', 'Admin\Kamar\jenisKamar::foto/$1');
    $routes->post('update-foto/(:num)', 'Admin\Kamar\jenisKamar::updateFoto/$1');
    $routes->post('hapus-foto', 'Admin\Kamar\jenisKamar::hapusFoto');
});
$routes->group('tarif', function ($routes) {
    $routes->get('', 'Admin\Kamar\tarifKamar::index');
    $routes->get('tambah', 'Admin\Kamar\tarifKamar::tambah');
    $routes->get('edit', 'Admin\Kamar\tarifKamar::update');
});
$routes->group('reservasi', function ($routes) {
    // step 1 isi data diri
    $routes->get('', 'Admin\Reservasi::index');
    $routes->post('step-1-save', 'Admin\Reservasi::step1_save');
    // step 2 pilih kamar
    $routes->post('step-2-save', 'Admin\Reservasi::step2_save');
    // step 3 detail reservasi
    $routes->post('step-3-save', 'Admin\Reservasi::step3_save');
    $routes->post('batal', 'Admin\Reservasi::batal');
});
$routes->group('booking', function ($routes) {
    $routes->get('', 'Admin\booking::index');
});
$routes->group('users', function ($routes) {
    $routes->get('', 'Admin\Users::index');

    $routes->get('tambah', 'Admin\Users::tambah');
    $routes->post('save', 'Admin\Users::save');
    $routes->get('hapus/(:any)', 'Admin\Users::hapus/$1');
    $routes->get('edit/(:any)', 'Admin\Users::edit/$1');
    $routes->post('update/(:any)', 'Admin\Users::update/$1');
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

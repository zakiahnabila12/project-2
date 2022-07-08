<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::event');
$routes->get('/detail/(:num)', 'Home::detail/$1');


$routes->get('/kegiatan', 'Kegiatan::index');
$routes->get('/kegiatan/add', 'Kegiatan::new');
$routes->add('/kegiatan/add/go', 'Kegiatan::create');
$routes->get('/kegiatan/edit/(:num)', 'Kegiatan::edit/$1');
$routes->add('/kegiatan/edit/go', 'Kegiatan::update');
$routes->get('/kegiatan/delete/(:num)', 'Kegiatan::delete/$1');

$routes->get('/pendaftaran', 'Pendaftaran::index');
$routes->get('/pendaftaran/add', 'Pendaftaran::new');
$routes->add('/pendaftaran/add/go', 'Pendaftaran::create');
$routes->get('/pendaftaran/edit/(:num)', 'Pendaftaran::edit/$1');
$routes->add('/pendaftaran/edit/go', 'Pendaftaran::update');
$routes->get('/pendaftaran/delete/(:num)', 'Pendaftaran::delete/$1');

$routes->get('/lovyou', 'JenisKegiatan::index');
$routes->get('/lovyou/add', 'JenisKegiatan::new');
$routes->add('/lovyou/add/go', 'JenisKegiatan::create');
$routes->get('/lovyou/edit/(:num)', 'JenisKegiatan::edit/$1');
$routes->add('/lovyou/edit/go', 'JenisKegiatan::update');
$routes->get('/lovyou/delete/(:num)', 'JenisKegiatan::delete/$1');

$routes->get('/katpes', 'KategoriPeserta::index');
$routes->get('/katpes/add', 'KategoriPeserta::new');
$routes->add('/katpes/add/go', 'KategoriPeserta::create');
$routes->get('/katpes/edit/(:num)', 'KategoriPeserta::edit/$1');
$routes->add('/katpes/edit/go', 'KategoriPeserta::update');
$routes->get('/katpes/delete/(:num)', 'KategoriPeserta::delete/$1');

$routes->get('/user', 'User::index');
$routes->get('/user/add', 'User::new');
$routes->add('/user/add/go', 'User::create');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->add('/user/edit/go', 'User::update');
$routes->get('/user/delete/(:num)', 'User::delete/$1');

$routes->get('/login', 'User::login');
$routes->get('/register', 'User::register');
$routes->add('/login/proses', 'User::valid_login');
$routes->add('/register/proses', 'User::valid_register');
$routes->add('/logout', 'User::logout');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
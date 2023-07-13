<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
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

// ruotes public
$routes->get('/', 'PagesController::index');
$routes->get('/scan', 'PagesController::scan');
$routes->get('/hasil', 'PagesController::hasilScan');

$routes->add('login', 'AuthController::login');
$routes->add('register', 'AuthController::register');
$routes->add('forgot', 'AuthController::forgotPassword');


// routes Guru
$routes->get('/guru', 'GuruController::index');
$routes->get('/siswa', 'GuruController::Siswa');
$routes->get('/rekap', 'GuruController::Rekap');

// routes Admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/kelas', 'AdminController::kelas');
$routes->get('/data_guru', 'AdminController::data_guru');
$routes->get('/data_siswa', 'AdminController::data_siswa');


// API
$routes->get('api/siswa/(:segment)', 'ApiSiswaController::data_siswa/$1');
$routes->get('api/absensi', 'ApiSiswaController::addData');






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

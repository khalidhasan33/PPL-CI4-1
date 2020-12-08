<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/v_login', 'c_login::index');
$routes->post('/v_login', 'c_login::login');
$routes->get('/v_logout', 'c_login::logout');
$routes->get('/v_news', 'c_news::index');
$routes->post('/v_news', 'c_news::index');
$routes->get('/v_news/(:segment)', 'c_news::detail/$1');
$routes->get('/v_newsAdd', 'c_news::create',['filter' => 'auth']);
$routes->post('/news_save', 'c_news::save');
// $routes->get('/v_berita', 'c_testBerita::index',['filter' => 'auth']);
// $routes->get('/v_home', 'c_testHome::index',['filter' => 'auth']);
// $routes->get('/', 'c_mahasiswa::index',['filter' => 'auth']);
// $routes->post('/', 'c_mahasiswa::index',['filter' => 'auth']);
// $routes->get('/create', 'c_mahasiswa::create',['filter' => 'auth']);
// $routes->post('/save', 'c_mahasiswa::save');
// $routes->get('/(:segment)', 'c_mahasiswa::detail/$1');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

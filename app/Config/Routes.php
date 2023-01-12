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
// $routes->get('/', 'Home::index');

// Homepage routes

//root route
$routes->get('/', 'Home::index');

//dashboard
$routes->get('/dashboard/livestock', 'Dashboard::portal');


$routes->match(['get', 'post'], 'register/signup', 'Registration::registration');

$routes->match(['get', 'post'], 'register/signin', 'Registration::login');

$routes->get("/signup", "Registration::register");

$routes->get("/login", "Registration::signin");


//markets and their days route
$routes->get("/markets", "Home::markets");

//blog route
$routes->get("/currentinfo/blog", "Blog::blog");

//contact us form
$routes->get("/contact-us", "Home::contact_us");

//conntact us controller
$routes->match(['get', 'post'], 'home/contact', 'Home::contact');

//upload livestock controller
$routes->match(['get', 'post'], 'livestock/markets', 'Livestock::fileUpload');

//form for uploading livestock
$routes->get("/dashboard/sales", "Livestock::sell_livestock");

//route for uploading dummy livestock on the home page
$routes->get("/livestock", "Livestock::animals");

//route for uploading dummy livestock on the home page
$routes->get("/dashboard/results", "Livestock::results");

//upload form
$routes->get('/dummy', 'Livestock::uploaddummy');

//upload controller
$routes->match(['get', 'post'], 'livestock/dummy', 'Livestock::uploadD');


// //Portal Routes
// $routes->get('/myportal', 'LivestockPortal::portal' );

// $routes->get('/sign-up', 'LivestockPortal::signup' );


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

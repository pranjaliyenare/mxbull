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
$routes->get('company_profile', 'Home::company_profile');
$routes->get('contactUs', 'Home::contactUs');
$routes->get('MT5Desktop', 'Home::MT5Desktop');
$routes->get('MT5Mobile', 'Home::MT5Mobile');
$routes->get('Account_Types', 'Home::Account_Types');
$routes->get('depositWithdrawals', 'Home::depositWithdrawals');
$routes->get('indices', 'Home::indices');
$routes->get('forex', 'Home::forex');
$routes->get('commodity', 'Home::commodity');
$routes->get('stocks', 'Home::stocks');
$routes->get('metals', 'Home::metals');
$routes->get('exchangeFuture', 'Home::exchangeFuture');
$routes->get('webTrader', 'Home::webTrader');
$routes->get('economic_calender', 'Home::economic_calender');
// $routes->get('booklet', 'Home::booklet');
$routes->get('enquiry', 'Home::enquiry');
$routes->post('enquiry_message', 'Home::enquiry_message');

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

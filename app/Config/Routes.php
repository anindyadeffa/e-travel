<?php

namespace Config;

use App\Models\UserModel;

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

// Make Password
$routes->get('/testpass', 'Auth::testPass');

// Auth
$routes->get('login', 'Auth::login', ["as" => "login"], ["filter" => "noauth"]);
$routes->get('register', 'Auth::register', ["as" => "register"], ["filter" => "noauth"]);
$routes->get('logout', 'Auth::logout', ["as" => "logout"], ["filter" => "noauth"]);

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/package', 'TravelPackage::index');
$routes->get('/package-details', 'PackageDetails::index');
$routes->get('/contact', 'ContactUs::index');
$routes->get('/data-information', 'DataInformation::index');
$routes->get('/payment-checkout', 'Checkout::index');
$routes->get('/verification', 'Verification::index');

$routes->get('/admin', 'Admin\DashboardController::index');
$routes->get('/user', 'Admin\UserController::index');
// $routes->get('/header', 'Admin\HeaderController::index');
// $routes->get('/about', 'Admin\AboutController::index');
// $routes->get('/info', 'Admin\InfoController::index');
$routes->get('/payment', 'Admin\PaymentController::index');
$routes->get('/travelpack', 'Admin\TravelPackController::index');
$routes->get('/feedback', 'Admin\FeedbackController::index');


$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get('/', 'Admin\DashboardController::index', ["as" => "adminIndex"]);

    $routes->group("master", function ($routes) {

        // User
        // $routes->group("user", function ($routes) {
        //     $routes->get('/', 'Admin\UserController::index', ["as" => "userIndex"]);
        //     $routes->get('create', 'Admin\UserController::create', ["as" => "userCreate"]);
        //     $routes->post('store', 'Admin\UserController::store', ["as" => "userStore"]);
        //     $routes->get('edit/(:num)', 'Admin\UserController::edit/$1', ["as" => "userEdit"]);
        //     $routes->post('update/(:num)', 'Admin\UserController::update/$1', ["as" => "userUpdate"]);
        //     $routes->get('delete/(:num)', 'Admin\UserController::delete/$1', ["as" => "userDelete"]);
        // });

        // Role
        $routes->group("role", function ($routes) {
            $routes->get('/', 'Admin\RoleController::index', ["as" => "roleIndex"]);
            $routes->get('create', 'Admin\RoleController::create', ["as" => "roleCreate"]);
            $routes->post('store', 'Admin\RoleController::store', ["as" => "roleStore"]);
            $routes->get('edit/(:num)', 'Admin\RoleController::edit/$1', ["as" => "roleEdit"]);
            $routes->post('update/(:num)', 'Admin\RoleController::update/$1', ["as" => "roleUpdate"]);
            $routes->get('delete/(:num)', 'Admin\RoleController::delete/$1', ["as" => "roleDelete"]);
        });
    });
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

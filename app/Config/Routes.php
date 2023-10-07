<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//front pages 
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::fabout');
$routes->get('/service', 'Home::fservice');
$routes->get('/room', 'Home::froom');
$routes->get('/team', 'Home::fteam');
$routes->get('/contact', 'Home::fcontact');

//admin panel
$routes->get( 'master', 'Master::dash');

// BOOKING RESTful Routes
$routes->get('book-list', 'Book::index');
$routes->get('book-form', 'Book::create');
$routes->post('book-form', 'Book::store');
$routes->get('book-edit/(:num)', 'Book::singleUser/$1');
$routes->post('book-update/(:num)', 'Book::update/$1');
$routes->get('book-delete/(:num)', 'Book::delete/$1');



// CRUD RESTful user details Routes
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');


// Rooms  Routes
$routes->get('rooms-list', 'RoomController::listroom');
$routes->get('room_add', 'RoomController::formroom');
$routes->post('submit-form', 'RoomController::storeroom');
$routes->get('edit-view/(:num)', 'RoomController::singleUser/$1');
$routes->post('update', 'RoomController::update');
$routes->get('delete/(:num)', 'RoomController::delete/$1');
/*
 * --------------------------------------------------------------------
 * Route for login +
 * --------------------------------------------------------------------
 */
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'AuthGuard']);




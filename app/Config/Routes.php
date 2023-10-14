<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//front pages A
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::fabout');
$routes->get('/service', 'Home::fservice');
$routes->get('/room', 'Home::froom');
$routes->get('/team', 'Home::fteam');
$routes->get('/contact', 'Home::fcontact');

//admin panel B
$routes->get( 'master', 'Master::dash');
$routes->get( 'dashboard', 'Master::dashboard');
// $routes->get( 'footer', 'Master::footer');

 //Route for login C
 $routes->get('/', 'SignupController::index');
 $routes->get('/signup', 'SignupController::index');
 $routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
 $routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
 $routes->get('/signin', 'SigninController::index');
 $routes->get('/profile', 'ProfileController::index',['filter' => 'AuthGuard']);
//......................................................................................

// BOOKING RESTful Routes 1
$routes->get('book-list', 'Book::index');
$routes->get('book-form', 'Book::create');
$routes->post('book-form', 'Book::store');
$routes->get('book-edit/(:num)', 'Book::singleUser/$1');
$routes->post('book-update/(:num)', 'Book::update/$1');
$routes->get('book-delete/(:num)', 'Book::delete/$1');


// User Routes users 2
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');


// Rooms  Routes 3
$routes->get('rooms-list', 'RoomController::listroom');
$routes->get('room_add', 'RoomController::formroom');
$routes->post('submit-room', 'RoomController::storeroom');
$routes->get('room_edit/(:num)', 'RoomController::singleUser/$1');
$routes->post('update_room', 'RoomController::update');
$routes->get('delete-room/(:num)', 'RoomController::delete/$1');

//room post routes 4
$routes->get('room_post', 'PostController::newroom');
$routes->post('post/add', 'PostController::add');
$routes->get('post/fetch', 'PostController::fetch');
$routes->get('post/edit/(:num)', 'PostController::edit/$1');
$routes->get('post/delete/(:num)', 'PostController::delete/$1');
$routes->get('post/detail/(:num)', 'PostController::detail/$1');
$routes->post('post/update', 'PostController::update');


// Employ details  5
$routes->get('employ_add', 'EmployController::employform');
$routes->get('/employ-list', 'EmployController::storeemploy');
$routes->post('submit-form', 'EmployController::store');
$routes->get('edit-view/(:num)', 'EmployController::singleUser/$1');
$routes->post('update', 'EmployController::update');
$routes->get('delete/(:num)', 'EmployController::delete/$1');
 





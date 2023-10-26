<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//......UI/front pages ......................
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::fabout');
$routes->get('/service', 'Home::fservice');
$routes->get('/room', 'Home::froom');
$routes->get('/team', 'Home::fteam');
$routes->get('/contact', 'Home::fcontact');

//......Admin/Dashboard panel....................
$routes->get( 'master', 'Master::dash');
$routes->get( 'dashboard', 'Master::dashboard');
// $routes->get( 'footer', 'Master::footer');

 //......Login Auth..............................
 $routes->get('/', 'SignupController::index');
 $routes->get('/signup', 'SignupController::index');
 $routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
 $routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
 $routes->get('/signin', 'SigninController::index');
 $routes->get('/profile', 'ProfileController::index',['filter' => 'AuthGuard']);


//........Booking Routes...........................
$routes->get('book-list', 'Book::index');
$routes->get('book-form/(:num)', 'Book::create/$1');
$routes->get('booking-form', 'Book::booking');
$routes->post('book-forms', 'Book::store');
$routes->get('book-edit/(:num)', 'Book::singleUser/$1');
$routes->post('book-update/(:num)', 'Book::update/$1');
$routes->get('book-print/(:num)', 'Book::singleprint/$1'); //Book Print
$routes->get('book-delete/(:num)', 'Book::delete/$1');


//...........Users (admin sideber)...................
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');


//...........Rooms (admin sideber)...................
$routes->get('rooms-list', 'RoomController::listroom');
$routes->get('room_add', 'RoomController::formroom');
$routes->post('submit-room', 'RoomController::storeroom');
$routes->get('room_edit/(:num)', 'RoomController::singleUser/$1');
$routes->post('update_room', 'RoomController::update');
$routes->get('delete-room/(:num)', 'RoomController::delete/$1');


//...........Rooms post (admin sideber)...................
$routes->get('room_post', 'PostController::newroom');
$routes->post('post/add', 'PostController::add');
$routes->get('post/fetch', 'PostController::fetch');
$routes->get('post/edit/(:num)', 'PostController::edit/$1');
$routes->get('post/delete/(:num)', 'PostController::delete/$1');
$routes->get('post/detail/(:num)', 'PostController::detail/$1');
$routes->post('post/update', 'PostController::update');


//...........Employs (admin sideber)......................
$routes->get('employ_view', 'EmployController::employ');
$routes->get('employ_add', 'EmployController::employform');
$routes->post('employ_add', 'EmployController::storeemploy');
$routes->get('employ_edit/(:num)', 'EmployController::edit/$1');
$routes->post('update_employ', 'EmployController::updateemploy');
$routes->get('delete_employ/(:num)', 'EmployController::delete/$1');
 

//......... check-in & check-out(admin sideber)...............
$routes->get('check_in', 'Book::checkin');
$routes->get('check_out', 'Book::checkout');





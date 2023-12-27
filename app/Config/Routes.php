<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/add_detail', 'HomeController::add_detail');
$routes->post('/add_detail', 'HomeController::add_detail');

$routes->get('/register', 'AdminController::register');
$routes->post('/register', 'AdminController::register');

$routes->get('/login', 'AdminController::login');
$routes->post('/login', 'AdminController::login');

$routes->get('/logout', 'AdminController::logout');

// Admin dashboard

$routes->get('/admin_dashboard', "AdminController::admin_dashboard", ['filter' => 'isAdmin']);


// Domain 
$routes->get('/domain_list', 'DomainController::domain_list', ['filter' => 'isAdmin']);
$routes->get('/domain_info', 'DomainController::domain_info', ['filter' => 'isAdmin']);
$routes->get('/domain_info/(:num)', 'DomainController::domain_info/$1', ['filter' => 'isAdmin']);

// Users
$routes->get('/user_list', 'DomainController::user_list', ['filter' => 'isAdmin']);

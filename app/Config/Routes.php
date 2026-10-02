<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public pages
$routes->get('/', 'Tasks::today');
$routes->get('tasks', 'Tasks::index');
$routes->get('profile', 'Tasks::profile');
$routes->get('about', 'Tasks::about');

$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');

// Authentication
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout');

// Protected task actions
$routes->group('tasks', ['filter' => 'auth'], function ($routes) {
    $routes->get('new', 'Tasks::newTask');
    $routes->post('create', 'Tasks::create');

    $routes->get('edit/(:num)', 'Tasks::edit/$1');
    $routes->post('update/(:num)', 'Tasks::update/$1');

    $routes->post('delete/(:num)', 'Tasks::delete/$1');
});
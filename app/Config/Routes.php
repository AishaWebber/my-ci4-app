<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Tasks::today');
$routes->get('tasks', 'Tasks::index');
$routes->get('profile', 'Tasks::profile');
$routes->get('about', 'Tasks::about');

$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
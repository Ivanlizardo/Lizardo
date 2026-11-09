<?php
use CodeIgniter\Router\RouteCollection;
/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attempt', ['filter' => 'csrf']);
$routes->post('logout', 'Auth::logout', ['filter' => 'csrf']);
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('customers', 'Customers::index');
    $routes->get('customers/new', 'Customers::new');
    $routes->post('customers/create', 'Customers::create', ['filter' => 'csrf']);
    $routes->get('customers/(:num)/edit', 'Customers::edit/$1');
    $routes->post('customers/(:num)/update', 'Customers::update/$1', ['filter' => 'csrf']);
    $routes->get('users', 'Users::index');
    $routes->get('users/new', 'Users::new');
    $routes->post('users/create', 'Users::create', ['filter' => 'csrf']);
    $routes->get('users/(:num)/edit', 'Users::edit/$1');
    $routes->post('users/(:num)/update', 'Users::update/$1', ['filter' => 'csrf']);
});

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/Dashboard', 'Dashboard::index');
});
$routes->get('/login', 'Login::index');
$routes->post('/auth', 'Login::auth');
$routes->get('/register', 'Register::index');
$routes->post('/create_account', 'Register::save');
$routes->get('/logout', 'Login::logout');

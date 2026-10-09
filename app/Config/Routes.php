<?php
use CodeIgniter\Router\RouteCollection;
/** @var RouteCollection $routes */
$routes->get('/', 'PageController::welcome');
$routes->get('tasks', 'TaskController::index');
$routes->get('profile', 'PageController::profile');
$routes->get('about', 'PageController::about');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::attempt');
$routes->get('logout', 'AuthController::logout');
$routes->group('tasks', ['filter' => 'auth'], static function ($routes) {
    $routes->get('new', 'TaskController::new');
    $routes->post('/', 'TaskController::create');
    $routes->get('(:num)/edit', 'TaskController::edit/$1');
    $routes->post('(:num)', 'TaskController::update/$1');
    $routes->post('(:num)/delete', 'TaskController::delete/$1');
});

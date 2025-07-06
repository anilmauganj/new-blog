<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');


$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes)  {
    $routes->get('dashboard', 'DashboardController::index', ['as' => 'admin.dashboard']);

    // Post Routes
    $routes->get('posts', 'PostController::index', ['as' => 'view.post']);
    $routes->get('posts/create', 'PostController::create', ['as' => 'create.post']);

    //User routes
    $routes->get('users', 'UserController::index', ['as' => 'view.user']);
    $routes->get('users/create', 'UserController::create', ['as' => 'create.user']);
});
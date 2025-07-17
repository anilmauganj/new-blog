<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::loginPost');
$routes->get('logout', 'AuthController::logout');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin','filter' => 'auth'], function($routes)  {

    //Dashboard Routes
    $routes->get('dashboard', 'DashboardController::index', ['as' => 'admin.dashboard']);

    // Post Routes
    $routes->get('posts', 'PostController::index', ['as' => 'view.post']);
    $routes->get('posts/create', 'PostController::create', [
        'as' => 'create.post',
        'filter' => 'rolepermission:create_post'
    ]);

    $routes->post('posts/create', 'PostController::save', ['as' => 'save.post']);

    //Category Routes
    $routes->get('categories', 'CategoryController::index', ['as' => 'post.category']);
    $routes->post('categories/list', 'CategoryController::ajaxList', ['as' => 'post.category.list']);
    $routes->post('categories','CategoryController::store', ['as' => 'post.category.save']);
    $routes->post('categories/update', 'CategoryController::update', ['as' => 'post.category.update']);
    $routes->delete('categories/delete/(:num)', 'CategoryController::ajaxDelete/$1', ['as' => 'post.category.delete']);

    //User routes
    $routes->get('users', 'UserController::index', ['as' => 'view.user']);
    $routes->get('users/create', 'UserController::create', ['as' => 'create.user']);

    
});
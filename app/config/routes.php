<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

// Login
$router->get('/login', 'AuthController::login');
$router->post('/login', 'AuthController::login');

// Logout
$router->get('/logout', 'AuthController::logout');

// Product CRUD
$router->get('/products', 'ProductController::index')
       ->middleware('product');

$router->get('/products/create', 'ProductController::create')
       ->middleware('product');

$router->post('/products/store', 'ProductController::store')
       ->middleware('product');

$router->get('/products/edit/{id}', 'ProductController::edit')
       ->where_number('id')
       ->middleware('product');

$router->post('/products/update/{id}', 'ProductController::update')
       ->where_number('id')
       ->middleware('product');

$router->post('/products/delete/{id}', 'ProductController::delete')
       ->where_number('id');
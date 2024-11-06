<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/category/(:alpha)', 'Home::viewThisCategory/$1');


// DASHBOARD
$routes->group('dashboard', function($routes){
    $routes->get('/', 'Dashboard::index' , ['filter' => 'auth']);
    $routes->match(['GET','POST'], 'create_Blog', 'Dashboard::createBlog', ['filter' => 'auth']);
    $routes->match(['GET','POST'], 'view_Blog/(:any)', 'Dashboard::viewBlog/$1', ['filter' => 'auth']);
    $routes->match(['GET','POST'], 'updateBlog/(:any)', 'Dashboard::updateBlog/$1', ['filter' => 'auth']);
    $routes->match(['GET','POST'], 'deleteBlog/(:any)', 'Dashboard::deleteBlog/$1' , ['filter' => 'auth']);
    $routes->match(['GET','POST'], 'myBlogs', 'Dashboard::myBlogs');
    $routes->match(['GET','POST'], 'update_profile', 'Dashboard::updateProfile' , ['filter' => 'auth']);
});

// Authentication

$routes->group('Auth', function($routes){
    $routes->match(['GET','POST'], 'register', 'Authentication::Register');
    $routes->match(['GET','POST'], 'Login', 'Authentication::Login');
    $routes->match(['GET','POST'], 'Logout', 'Authentication::Logout');
});
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Auth::login'); // Login page
 $routes->post('/process-login', 'Auth::processLogin'); // Handle login
 $routes->get('/logout', 'Auth::logout'); // Logout
 $routes->get('/dashboard', 'Dashboard::index'); // Single dashboard page
 $routes->get('/set-criteria', 'CriteriaController::index');

 
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Redirect root to login
$routes->get('/', function() {
    return redirect()->to('/auth/login');
});

// Auth routes
$routes->group('auth', function($routes) {
    $routes->get('login', 'Auth::login');
    $routes->post('attemptLogin', 'Auth::attemptLogin');
    $routes->get('register', 'Auth::register');
    $routes->post('attemptRegister', 'Auth::attemptRegister');
    $routes->get('logout', 'Auth::logout');
});

// Dashboard routes
$routes->group('dashboard', function($routes) {
    // Mahasiswa dashboard
    $routes->get('mahasiswa', 'Dashboard\Mahasiswa::index');
    
    // Admin dashboard
    $routes->get('admin', 'Dashboard\Admin::index');
    
    // Kepala Lab dashboard
    $routes->get('kepala-lab', 'Dashboard\KepalaLab::index');
});

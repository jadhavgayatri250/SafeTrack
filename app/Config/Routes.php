<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Home
$routes->get('/', 'Home::index');

// Dashboard
$routes->get('dashboard', 'DashboardController::index');

// SOS Incident
$routes->post('save-incident', 'IncidentController::save');

// Registration
$routes->get('register', 'AuthController::register');
$routes->post('register/save', 'AuthController::saveRegister');

// Login
$routes->get('login', 'AuthController::login');
$routes->post('login/check', 'AuthController::checkLogin');

// Logout
$routes->get('logout', 'AuthController::logout');
$routes->get('sos', 'IncidentController::index');
$routes->post('sos/save', 'IncidentController::save');
$routes->get('history', 'IncidentController::history');
// Helpdesk
$routes->get('helpdesk', 'HelpdeskController::index');
$routes->post('helpdesk/search', 'HelpdeskController::search');
$routes->get('emergency', 'EmergencyController::index');
$routes->get('api/helpdesk/(:segment)', 'HelpdeskController::api/$1');
$routes->get('/history', 'IncidentController::history');
$routes->get('/history/delete/(:num)', 'IncidentController::delete/$1');
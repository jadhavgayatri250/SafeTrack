<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');

$routes->get('dashboard', 'DashboardController::index');

$routes->post('save-incident', 'IncidentController::save');

$routes->get('register', 'AuthController::register');
$routes->post('register/save', 'AuthController::saveRegister');

$routes->get('login', 'AuthController::login');
$routes->post('login/check', 'AuthController::checkLogin');

$routes->get('logout', 'AuthController::logout');

$routes->get('sos', 'IncidentController::index');
$routes->post('sos/save', 'IncidentController::save');

$routes->get('history', 'IncidentController::history');
$routes->get('history/delete/(:num)', 'IncidentController::delete/$1');

$routes->get('helpdesk', 'HelpdeskController::index');
$routes->post('helpdesk/search', 'HelpdeskController::search');

$routes->get('emergency', 'EmergencyController::index');

$routes->get('api/helpdesk/(:segment)', 'HelpdeskController::api/$1');

$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/login/check', 'AdminController::checkLogin');

$routes->get('admin/dashboard', 'AdminController::dashboard');

$routes->get('admin/users', 'AdminController::users');

$routes->get('admin/users/view/(:num)', 'AdminController::userDetails/$1');

$routes->get('admin/incidents', 'AdminController::incidents');

$routes->get('admin/incidents/(:num)', 'AdminController::incidentDetails/$1');

$routes->get('admin/logout', 'AdminController::logout');
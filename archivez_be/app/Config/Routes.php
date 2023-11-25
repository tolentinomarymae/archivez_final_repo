<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getStudentProfileData', 'StudentProfileController::getStudentProfileData');
$routes->get('/getResearchOutput', 'ResearchOutputController::getResearchOutput');
$routes->post('/save', 'ResearchOutputController::save');

$routes->match(['post', 'get'],'/signin', 'UserController::signin');
$routes->match(['post', 'get'],'/signup', 'UserController::signup');
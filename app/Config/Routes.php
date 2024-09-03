<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/survey', 'Home::Survey');
$routes->post('/submit_survey', 'Home::SubmitSurvey');
$routes->get('/overview', 'Home::Overview');
$routes->get('/our_inspiration', 'Home::OurInspiration');
$routes->get('/vision_and_mission', 'Home::VisionAndMission');
$routes->get('/about_aranea_platform', 'Home::AboutAraneaPlatform');

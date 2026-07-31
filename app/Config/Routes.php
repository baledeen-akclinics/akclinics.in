<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->post('book-appointment', 'BookAppointmentController::submit');
$routes->post('contact/submit', 'ContactController::submit');
$routes->get('/', 'PagesController::index');
$routes->post('submit_form_new', 'LeadController::submit');
$routes->post('submit_form_new/', 'LeadController::submit');

$routes->get('hair-transplant-in-(:segment)-bangalore', 'PagesController::show/hair-transplant-in-bangalore');
$routes->get('prp-treatment-for-hair-in-(:segment)-bangalore', 'PagesController::show/prp-treatment-for-hair-in-bangalore');
$routes->get('laser-hair-removal-in-(:segment)-bangalore', 'PagesController::show/laser-hair-removal-in-bangalore');
$routes->get('acne-treatment-in-(:segment)-bangalore', 'PagesController::show/acne-treatment-in-bangalore');
$routes->get('tattoo-removal-in-(:segment)-bangalore', 'PagesController::show/tattoo-removal-in-bangalore');

$routes->get('(:segment)', 'PagesController::show/$1');

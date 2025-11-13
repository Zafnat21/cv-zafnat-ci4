<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 1. Ganti controller default dari 'Home' ke 'Cv'
$routes->setDefaultController('Cv');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);

// 2. Ini rute-rute CV kita
$routes->get('/', 'Cv::index');       // Halaman Utama (Home)
$routes->get('resume', 'Cv::resume');     // Halaman Resume
$routes->get('projects', 'Cv::projects'); // Halaman Projects
$routes->get('contact', 'Cv::contact');   // Halaman Contact
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('products', 'Products::index');
$routes->get('partners', 'Partners::index');
$routes->get('/privacy-policy', 'Pages::privacyPolicy');
$routes->get('/terms-conditions', 'Pages::termsConditions');
$routes->get('/accessibility-policy', 'Pages::accessibilityPolicy');

$routes->group('blog', function($routes) {
    $routes->get('/', 'Blog::index');
    $routes->get('(:any)', 'Blog::show/$1');
});
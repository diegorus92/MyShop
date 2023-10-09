<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('products', 'Home::products');
$routes->get('products', 'Products::index');
$routes->get('/show/(:num)', 'Products::showProduct/$1');
$routes->get('/product-form', 'Crud::showProductForm');
$routes->post('/create-product', 'Crud::create');

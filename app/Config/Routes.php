<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/logout', 'Login::logout');

$routes->get('/Products', 'Products::index');
$routes->get('/Products/ProductDetails/(:num)', 'Products::product/$1');
$routes->get('/Products/pdf', 'Products::generatePdf');
$routes->post('/Products/filtered', 'Products::filtered');
$routes->post('/Products/update/', 'Products::update');
$routes->post('/Products/delete/(:num)', 'Products::delete/$1');
$routes->post('/Products/NewCategory', 'Products::newCategory');

$routes->get('/Users', 'Users::index');
$routes->get('/Users/UserDetails/(:num)', 'Users::user/$1');
$routes->post('/Users/create/', 'Users::create');
$routes->post('/Users/update/(:num)', 'Users::update/$1');
$routes->post('/Users/delete/(:num)', 'Users::delete/$1');

$routes->get('/Sales', 'Sales::index');
$routes->get('/Sales/SalesDetails/(:num)', 'Sales::sales/$1');
$routes->get('/Sales/create', 'Sales::createView');
$routes->post('/Sales/create/newSale', 'Sales::create');
$routes->post('/Sales/clientInfo', 'Sales::clientInfo');

$routes->get('/Clients', 'Clients::index');
$routes->get('/Clients/ClientDetails/(:num)', 'Clients::client/$1');
$routes->post('/Clients/create', 'Clients::newClient');
$routes->post('/Clients/update', 'Clients::update');
$routes->post('/Clients/delete/(:num)', 'Clients::delete/$1');

$routes->get('/Purchases', 'Purchases::index');
$routes->get('/Purchases/PurchaseDetails/(:num)', 'Purchases::purchase/$1');
$routes->get('/Purchases/create', 'Purchases::createView');
$routes->post('/Purchases/create/newPurchase', 'Purchases::create');
$routes->post('/Purchases/SupplierInfo', 'Purchases::supplierInfo');

$routes->get('/Suppliers', 'Suppliers::index');
$routes->get('/Suppliers/SupplierDetails/(:num)', 'Suppliers::supplier/$1');
$routes->post('/Suppliers/create', 'Suppliers::create');
$routes->post('/Suppliers/update/(:num)', 'Suppliers::update/$1');
$routes->post('/Suppliers/delete/(:num)', 'Suppliers::delete/$1');

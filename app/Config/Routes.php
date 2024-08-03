<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('kelola', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Kelola::index');
    $routes->get('tambah', 'Kelola::Tambah');
    $routes->post('insertdata', 'Kelola::InsertData');
    $routes->post('updatedata/(:num)', 'Kelola::UpdateData/$1');
    $routes->post('delete/(:num)', 'Kelola::Delete/$1');
});


$routes->group('marker', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Marker::index');
    $routes->get('tambah', 'Marker::Tambah');
    $routes->post('insertdata', 'Marker::InsertData');
    $routes->post('updatedata/(:num)', 'Marker::UpdateData/$1');
    $routes->post('delete/(:num)', 'Marker::Delete/$1');
});


$routes->group('polygon', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Polygon::index');
    $routes->get('tambah', 'Polygon::Tambah');
    $routes->post('insertdata', 'Polygon::InsertData');
    $routes->post('updatedata/(:num)', 'Polygon::UpdateData/$1');
    $routes->post('delete/(:num)', 'Polygon::Delete/$1');
});

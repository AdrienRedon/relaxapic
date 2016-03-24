<?php

/**
 * List of routes
 */

$router->get('/', 'PageController@index');
$router->get('/admin', 'PageController@admin');
$router->get('/login', 'PageController@loginForm');
$router->post('/login', 'PageController@login');

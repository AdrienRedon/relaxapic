<?php

/**
 * List of routes
 */

$router->get('/', 'PageController@index');
$router->get('/admin', 'PageController@admin');

$router->post('/login', 'PageController@login');
$router->post('/login_check', 'PageController@login_check');

$router->get('/pathologies', 'PageController@pathologies');
$router->get('/salons', 'PageController@salons');
$router->get('/membres', 'PageController@membres');

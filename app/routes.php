<?php

/**
 * List of routes
 */

$router->get('/', 'PageController@index');
$router->get('/:person', 'PageController@index');
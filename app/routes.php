<?php

/**
 * List of routes
 */

$router->get('/', 'PageController@index');
$router->get('/admin', 'PageController@admin');

$router->post('/login', 'PageController@login');
$router->post('/signin', 'PageController@signin');

$router->get('/pathologies', 'PageController@pathologies');
$router->get('/salons', 'PageController@salons');
$router->get('/membres', 'PageController@membres');

$router->get('/getTypesPatho', 'TypePathoController@getTypesPatho');
$router->get('/getTypesPatho/:id', 'TypePathoController@getTypesPatho');
$router->get('/getListePatho/:id', 'TypePathoController@getListePatho');
$router->get('/getMeridienByPatho/:idP', 'MeridienController@getMeridienByPatho');
$router->get('/getSymptomesByPatho/:idP', 'SymptomeController@getSymptomesByPatho');

/**
 * Filters
 */

$router->get('/getTypesPatho/pathos/:pathos/meridiens/:meridiens/caracteristiques/:caracteristiques', 'TypePathoController@getTypesPathoFiltered');
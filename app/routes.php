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
$router->get('/getListePatho/:id', 'TypePathoController@getListePatho');
$router->get('/getMeridienByPatho/:idP', 'MeridienController@getMeridienByPatho');
$router->get('/getSymptomesByPatho/:idP', 'SymptomeController@getSymptomesByPatho');

/**
 * Filters
 */

$router->get('/getTypesPatho/pathos/:pathos', 'TypePathoController@getTypesPathoFiltered');
$router->get('/getTypesPatho/pathos/:pathos/meridiens/:meridiens', 'TypePathoController@getTypesPathoFiltered');
$router->get('/getTypesPatho/pathos/:pathos/meridiens/:meridiens/caracteristiques/:caracteristiques', 'TypePathoController@getTypesPathoFiltered');

$router->get('/getTypesPatho/pathos/:pathos/caracteristiques/:caracteristiques', 'TypePathoController@getTypesPathoFilteredWithoutMeridien');

$router->get('/getTypesPatho/meridiens/:meridiens/caracteristiques/:caracteristiques', 'TypePathoController@getTypesPathoFilteredWithoutPatho');
$router->get('/getTypesPatho/meridiens/:meridiens', 'TypePathoController@getTypesPathoFilteredWithoutPatho');

$router->get('/getTypesPatho/caracteristiques/:caracteristiques', 'TypePathoController@getTypesPathoFilteredWithCaracteristiques');

$router->get('/getListePatho/:id/meridiens/:meridiens/caracteristiques/:caracteristiques', 'TypePathoController@getListePathoFiltered');
$router->get('/getListePatho/:id/meridiens/:meridiens', 'TypePathoController@getListePathoFiltered');
$router->get('/getListePatho/:id/caracteristiques/:caracteristiques', 'TypePathoController@getListePathoFilteredWithoutMeridiens');

/**
 * Calculatrice REST
 */
$router->get('/calculatrice/addition/:a/:b', 'CalculatriceController@addition');
$router->get('/calculatrice/soustraction/:a/:b', 'CalculatriceController@soustraction');
$router->get('/calculatrice/multiplication/:a/:b', 'CalculatriceController@multiplication');
$router->get('/calculatrice/division/:a/:b', 'CalculatriceController@division');

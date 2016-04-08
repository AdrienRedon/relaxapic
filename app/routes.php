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

// getTypes

    // with patho

    $router->get('/getTypesPatho/pathos/:p', 'TypePathoController@getTypesPathoFilteredP');

    $router->get('/getTypesPatho/pathos/:p/meridiens/:m', 'TypePathoController@getTypesPathoFilteredPM');
    $router->get('/getTypesPatho/pathos/:p/caracteristiques/:c', 'TypePathoController@getTypesPathoFilteredPC');
    $router->get('/getTypesPatho/pathos/:p/keyword/:keyword', 'TypePathoController@getTypesPathoFilteredPK');

    $router->get('/getTypesPatho/pathos/:p/meridiens/:m/caracteristiques/:c', 'TypePathoController@getTypesPathoFilteredPMC');
    $router->get('/getTypesPatho/pathos/:p/meridiens/:m/keyword/:k', 'TypePathoController@getTypesPathoFilteredPMK');
    $router->get('/getTypesPatho/pathos/:p/caracteristiques/:c/keyword/:k', 'TypePathoController@getTypesPathoFilteredPCK');

    $router->get('/getTypesPatho/pathos/:p/meridiens/:m/caracteristiques/:c/keyword/:k', 'TypePathoController@getTypesPathoFiltered');

    // with meridiens

    $router->get('/getTypesPatho/meridiens/:m', 'TypePathoController@getTypesPathoFilteredM');

    $router->get('/getTypesPatho/meridiens/:m/caracteristiques/:c', 'TypePathoController@getTypesPathoFilteredMC');
    $router->get('/getTypesPatho/meridiens/:m/keyword/:k', 'TypePathoController@getTypesPathoFilteredMK');

    $router->get('/getTypesPatho/meridiens/:m/caracteristiques/:c/keyword/:k', 'TypePathoController@getTypesPathoFilteredMCK');

    // with caracteristiques

    $router->get('/getTypesPatho/caracteristiques/:c', 'TypePathoController@getTypesPathoFilteredC');

    $router->get('/getTypesPatho/caracteristiques/:c/keyword/:keyword', 'TypePathoController@getTypesPathoFilteredCK');

    // with keyword

    $router->get('/getTypesPatho/keyword/:k', 'TypePathoController@getTypesPathoFilteredK');

// get Liste

    // with meridiens
    
    $router->get('/getListePatho/:id/meridiens/:m', 'TypePathoController@getListePathoFilteredM');

    $router->get('/getListePatho/:id/meridiens/:m/caracteristiques/:c', 'TypePathoController@getListePathoFilteredMC');
    $router->get('/getListePatho/:id/meridiens/:m/keyword/:k', 'TypePathoController@getListePathoFilteredMK');

    $router->get('/getListePatho/:id/meridiens/:m/caracteristiques/:c/keyword/:k', 'TypePathoController@getListePathoFiltered');

    // with caracteristiques

    $router->get('/getListePatho/:id/caracteristiques/:c', 'TypePathoController@getListePathoFilteredC');

    $router->get('/getListePatho/:id/caracteristiques/:c/keyword/:k', 'TypePathoController@getListePathoFilteredCK');

    // with keyword
    
    $router->get('/getListePatho/:id/keyword/:k', 'TypePathoController@getListePathoFilteredK');

/**
 * Calculatrice REST
 */
$router->get('/calculatrice/addition/:a/:b', 'CalculatriceController@addition');
$router->get('/calculatrice/soustraction/:a/:b', 'CalculatriceController@soustraction');
$router->get('/calculatrice/multiplication/:a/:b', 'CalculatriceController@multiplication');
$router->get('/calculatrice/division/:a/:b', 'CalculatriceController@division');

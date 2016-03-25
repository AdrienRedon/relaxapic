<?php 

use App\Core\Database\MySQLDatabase;
use App\Libs\Session;

/**
 * List of services
 */

$container->register('Database', function() {
    return new MySQLDatabase();
});

$container->register('SessionInterface', function() {
    return new Session();
});
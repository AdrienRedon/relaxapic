<?php 

use App\Core\Database\MySQLDatabase;
use App\Libs\Session;
use App\Core\Config;

/**
 * List of services
 */

$container->register('Database', function() {
    return new MySQLDatabase(new Config());
});

$container->register('SessionInterface', function() {
    return new Session();
});
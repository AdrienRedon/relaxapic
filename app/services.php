<?php 

use App\Core\Database\MySQLDatabase;

/**
 * List of services
 */

$container->register('Database', function() {
    return new MySQLDatabase();
});
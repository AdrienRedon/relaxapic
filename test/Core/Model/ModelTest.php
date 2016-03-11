<?php 

namespace Test\Core\Model;

use \PHPUnit_Framework_TestCase;
use App\Core\Model\ModelResolver;
use App\Core\DependencyInjection\Container;
use App\Core\Database\MySQLDatabase;
use App\Core\Config;

define('ROOT', './');

class ModelTest extends PHPUnit_Framework_TestCase 
{
    public function setUp()
    {
        $container = new Container();
        $container->register('Database', function() {
            return new MySQLDatabase(new Config());
        });
        $container->register('App\Model\TestModel', function() use ($container) {
            return new \Test\Model\TestModel($container->resolve('Database'));
        });
        $this->modelResolver = new ModelResolver($container);
    }

    public function testCreateModel()
    {
        $this->assertInstanceOf('\Test\Model\TestModel', $this->modelResolver->get('TestModel'));
    }
}
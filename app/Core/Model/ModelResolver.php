<?php 

namespace App\Core\Model;

use App\Core\DependencyInjection\ContainerInterface;
use App\Core\DependencyInjection\ContainerAwareInterface;
use App\Core\DependencyInjection\Exception\ServiceNotFoundException;

class ModelResolver 
{
    /**
     * Container
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Database
     * @var DatabaseInterface
     */
    protected $db;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->db = $this->container->resolve('Database');
    }

    public function get($name)
    {
        $db = $this->container->resolve('Database');

        try {
            $model = $this->container->resolve('App\Model\\' . $name);
        } catch (ServiceNotFoundException $e) {
            if (file_exists(ROOT . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR .'Model' . DIRECTORY_SEPARATOR . $name . '.php')) {
                include_once(ROOT . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . $name . '.php');
                $modelName = 'App\Model\\' . $name;
                $model = new $modelName($db);
            } else {
                throw $e;
            }
        }

        if ($model instanceof ContainerAwareInterface) {
            $model->setContainer($this->container);
        }

        return $model;
    }
}
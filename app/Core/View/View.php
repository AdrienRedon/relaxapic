<?php 

namespace App\Core\View;

use \Smarty;
use App\Libs\Flash;
use App\Core\DependencyInjection\ContainerAware;
use App\Core\DependencyInjection\ContainerInterface;

class View extends ContainerAware
{
    protected $smarty;

    protected $directoryPath;

    protected $defaultView;

    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
        $this->smarty = new Smarty();
        $this->flash = new Flash($container->resolve('SessionInterface'));

        $this->smarty->debugging = false;
        $this->smarty->caching = false;
        $this->smarty->cache_lifetime = 120;
    }

    public function setDirectoryPath($directoryPath)
    {
        $this->directoryPath = $directoryPath;
        shell_exec('cd ../app/View && chmod 777 templates_c && chmod 777 cache');
        $this->smarty->setTemplateDir(ROOT . 'app/View');
        $this->smarty->setCompileDir(ROOT . 'app/View/templates_c');
        $this->smarty->setCacheDir(ROOT . 'app/View/cache');
        $this->smarty->setConfigDir(ROOT . 'app/View/configs');
    }

    public function render($path, $vars = array())
    {
        foreach($vars as $key => $value) {
            if (is_object($value)) {
                $this->smarty->registerObject($key, $value);
            } else {
                $this->smarty->assign($key, $value);
            }
        }

        $this->smarty->registerObject('flash', $this->flash);

        $this->smarty->display(ROOT . $this->directoryPath . $path . '.tpl');
    }

}
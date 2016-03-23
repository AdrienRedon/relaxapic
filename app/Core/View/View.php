<?php 

namespace App\Core\View;

use \Smarty;

class View
{
    protected $smarty;

    protected $directoryPath;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->debugging = false;
        $this->smarty->caching = true;
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
            $this->smarty->assign($key, $value);
        }

        $this->smarty->display(ROOT . $this->directoryPath . $path . '.tpl');
    }

}
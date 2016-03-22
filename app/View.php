<?php 

namespace App\Core\View;

use \Smarty;

class View
{
    protected $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function setDirectoryPath($directoryPath)
    {
        $this->directoryPath = $directoryPath;
    }

    public function render($path)
    {
        $this->smarty->display($directoryPath . $path);
    }

}
<?php 

namespace App\Core\Controller;

use App\Core\DependencyInjection\ContainerAware;
use App\Core\DependencyInjection\ContainerInterface;
use \Smarty;

class Controller extends ContainerAware
{
    protected $smarty;

    public function __construct(ContainerInterface $container = null)
    {
        $this->setContainer($container);
        $this->smarty = new Smarty();
    }

    /**
     * Check if the request is an AJAX request
     * @return boolean [description]
     */
    public function isAjax()
    {
        return strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest';
    }
}
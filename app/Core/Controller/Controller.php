<?php 

namespace App\Core\Controller;

use App\Core\DependencyInjection\ContainerAware;
use App\Core\DependencyInjection\ContainerInterface;
use App\Core\View\View;

class Controller extends ContainerAware
{
    protected $view;

    public function __construct(ContainerInterface $container = null)
    {
        $this->setContainer($container);
        $this->view = new View();
        $this->view->setDirectoryPath('app/View');
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
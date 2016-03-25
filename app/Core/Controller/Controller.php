<?php 

namespace App\Core\Controller;

use App\Core\DependencyInjection\ContainerAware;
use App\Core\DependencyInjection\ContainerInterface;
use App\Core\View\View;
use App\Libs\Redirection;

class Controller extends ContainerAware
{
    protected $view;

    protected $redirect;

    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
        $this->view = new View();
        $this->redirect = new Redirection($this->container->resolve('SessionInterface'));
        $this->view->setDirectoryPath('app/View/');
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
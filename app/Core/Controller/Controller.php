<?php 

namespace App\Core\Controller;

use App\Core\DependencyInjection\ContainerAware;
use App\Core\DependencyInjection\ContainerInterface;
use App\Core\View\View;
use App\Libs\Redirection;
use App\Core\Model\ModelResolver;
use App\Libs\Flash;

class Controller extends ContainerAware
{
    protected $view;

    protected $redirect;

    protected $modelResolver;

    protected $flash;

    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
        $this->view = new View($container);
        $this->redirect = new Redirection($this->container->resolve('SessionInterface'));
        $this->view->setDirectoryPath('app/View/');
        $this->modelResolver = new ModelResolver($container);
        $this->flash = new Flash($this->container->resolve('SessionInterface'));

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
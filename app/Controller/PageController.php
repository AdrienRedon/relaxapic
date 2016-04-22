<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Core\DependencyInjection\ContainerInterface;

class PageController extends Controller
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = $this->container->resolve('Auth');
    }

    public function index()
    {
        $this->view->render('Page/index');
    }

    public function admin()
    {
        $user = $this->auth->user();
        if ($this->auth->check()) {
            $content = 'vous êtes bien connecté';
        } else {
            $content = 'vous n\'êtes pas connecté';
        }
        $this->view->render('Page/admin', compact('content'));
    }

    public function pathologies()
    {
        $user = $this->auth->user();
        $typePatho = $this->model->get('TypePatho');
        $meridien = $this->model->get('Meridien');

        $typesPatho = $typePatho->all()->toArray();
        $meridiens = $meridien->all()->toArray();

        $this->view->render('Page/patho', compact('typesPatho', 'meridiens'));
    }

    public function salons()
    {
        $user = $this->auth->user();
        $this->view->render('Page/salons');
    }

    public function membres()
    {
        $user = $this->auth->user();
        $this->view->render('Page/membres');
    }
}

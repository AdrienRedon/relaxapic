<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Core\DependencyInjection\ContainerInterface;
use App\Model\Patho;

class TypePathoController extends Controller
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = new Auth($this->container->resolve('SessionInterface'));
    }

    public function getListePatho($idT) 
    {
        $typePatho = $this->modelResolver->get('TypePatho');
        $pathos = $typePatho->getListePatho($idT)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }

    public function getTypesPatho()
    {
        $typePatho = $this->modelResolver->get('TypePatho');
        $typesPatho = $typePatho->all()->toArray();
        $this->view->render('ajax/typePatho', compact('typesPatho'));
    }
}
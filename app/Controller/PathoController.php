<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Core\DependencyInjection\ContainerInterface;
use App\Model\Patho;

class PathoController extends Controller
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = new Auth($this->container->resolve('SessionInterface'));
    }

    public function getPatho($id) 
    {
    	$patho = $this->modelResolver->get('Patho');
        $pathos = $patho->getPatho($id)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }
}
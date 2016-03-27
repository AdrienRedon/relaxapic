<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Core\DependencyInjection\ContainerInterface;
use App\Model\Patho;

class SymptomeController extends Controller
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = new Auth($this->container->resolve('SessionInterface'));
    }

    public function getSymptomesByPatho($idP) 
    {
        $symptome = $this->modelResolver->get('Symptome');

        $symptomes = $symptome->getSymptomesByPatho($idP)->toArray();
        $this->view->render('ajax/symptome', compact('symptomes'));
    }
}
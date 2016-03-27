<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Core\DependencyInjection\ContainerInterface;
use App\Model\Patho;

class MeridienController extends Controller
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = new Auth($this->container->resolve('SessionInterface'));
    }

    public function getMeridienByPatho($idP) 
    {
        $meridien = $this->modelResolver->get('Meridien');

        $meridiens = $meridien->getMeridienByPatho($idP)->toArray();
        $this->view->render('ajax/meridien', compact('meridiens'));
    }
}
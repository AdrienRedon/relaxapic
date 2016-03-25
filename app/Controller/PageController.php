<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Validator\LoginValidator;
use App\Core\DependencyInjection\ContainerInterface;

class PageController extends Controller
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = new Auth($this->container->resolve('SessionInterface'));
    }

    public function index()
    {
        $this->view->render('Page/index');
    }

    public function admin()
    {
        if ($this->auth->check()) { // toto : admin
            $content = 'vous êtes bien connecté';
        } else {
            $content = 'vous n\'êtes pas connecté';
        }
        $this->view->render('Page/admin', compact('content'));
    }

    public function loginForm()
    {
        $this->view->render('Page/FormConnexion');
    }

    public function login()
    {
        $validation = new LoginValidator();
        if ($validation->fails()) {
            die('Login ou Mot de passe incorrecte');
        }
        if ($this->auth->attempt($_POST['login'], $_POST['pass'])) {
            $this->admin();
        } else {
            echo 'login incorrecte';
        }
    }

    public function signin()
    {
        $validation = new SigninValidator();
        if ($validation->fails()) {
            die('Adresse mail ou mot de passe incorrecte');
        }
    }
}

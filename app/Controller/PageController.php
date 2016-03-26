<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Validator\LoginValidator;
use App\Validator\SigninValidator;
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

    public function login()
    {
        $validation = new LoginValidator();
        if ($validation->fails()) {
            die('Login ou Mot de passe incorrecte');
        }
        if ($this->auth->attempt($_POST['mail'], $_POST['password'])) {
            $this->admin();
        } else {
            echo 'login incorrecte';
        }
    }

    public function signin()
    {
        $input = array(
            'mail'    => $_POST['mail'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        );
        $validation = new SigninValidator();
        if ($validation->fails()) {
            die('Login ou Mot de passe incorrecte');
        } else {
            $user = $this->modelResolver->get('User');
            $user->save($input);
            $this->redirect->home();
        }
    }

    public function pathologies()
    {
        $this->view->render('Page/patho');
    }

    public function salons()
    {
        $this->view->render('Page/salons');
    }

    public function membres()
    {
        $this->view->render('Page/membres');
    }
}

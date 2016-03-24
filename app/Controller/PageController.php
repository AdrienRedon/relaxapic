<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;
use App\Validator\LoginValidator;

class PageController extends Controller
{
    protected $auth;

    public function __construct()
    {
        parent::__construct();
        $this->auth = new Auth(new Session());
    }

    public function index($person = "World")
    {
        if ($this->isAjax()) {
            die(json_encode(array('ajax' => true)));
        } else {
            echo "Hello $person !";
        }
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

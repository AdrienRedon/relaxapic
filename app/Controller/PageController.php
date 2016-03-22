<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Libs\Auth;
use App\Libs\Session;

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
            echo 'vous etes co';
        } else {
            echo 'vous etes pas co';
        }
    }

    public function loginForm()
    {
    	include(ROOT. 'app/View/Page/FormConnexion.php');
    }

    public function login()
    {
        if ($this->auth->attempt($_POST['login'], $_POST['pass'])) {
            $this->admin();
        } else {
            echo 'login incorrecte';
        }
    }
}

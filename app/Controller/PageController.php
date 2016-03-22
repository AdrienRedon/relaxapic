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
        if ($this->auth->attempt('toto', 'admin')) { // toto : admin
            $this->view->render('Page/admin');
        } else {
            $this->view->render('Page/admin');
        }
    }
}

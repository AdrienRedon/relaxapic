<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class PageController extends Controller
{
    public function index($person = "World")
    {
        if ($this->isAjax()) {
            die(json_encode(array('ajax' => true)));
        } else {
            echo "Hello $person !";
        }
    }
}

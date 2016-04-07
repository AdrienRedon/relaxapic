<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class CalculatriceController extends Controller
{
    public function addition($a, $b)
    {
        echo $a + $b;
        die();
    }

    public function soustraction($a, $b)
    {
        echo $a - $b;
        die();
    }

    public function multiplication($a, $b)
    {
        echo $a * $b;
        die();
    }

    public function division($a, $b)
    {
        if ($b != 0) {
            echo 'Je sais pas faire';
            die();
        }
        echo $a / $b;
        die();
    }
}
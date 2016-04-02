<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class MeridienController extends Controller
{
    public function getMeridienByPatho($idP) 
    {
        $meridien = $this->model->get('Meridien');

        $meridiens = $meridien->getMeridienByPatho($idP)->toArray();
        $list_alt = [
            'b' => 'bois',
            'e' => 'eau',
            'f' => 'feu',
            'm' => 'métal',
            't' => 'terre'
        ];
        $this->view->render('ajax/meridien', compact('meridiens', 'list_alt'));
    }
}
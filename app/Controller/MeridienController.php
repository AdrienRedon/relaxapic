<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class MeridienController extends Controller
{
    public function getMeridienByPatho($idP) 
    {
        $meridien = $this->model->get('Meridien');

        $meridiens = $meridien->getMeridienByPatho($idP)->toArray();
        $this->view->render('ajax/meridien', compact('meridiens'));
    }
}
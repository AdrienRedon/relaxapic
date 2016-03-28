<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class SymptomeController extends Controller
{
    public function getSymptomesByPatho($idP) 
    {
        $symptome = $this->model->get('Symptome');

        $symptomes = $symptome->getSymptomesByPatho($idP)->toArray();
        $this->view->render('ajax/symptome', compact('symptomes'));
    }
}
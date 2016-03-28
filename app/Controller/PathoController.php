<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class PathoController extends Controller
{
    public function getPatho($id) 
    {
    	$patho = $this->model->get('Patho');
        $pathos = $patho->getPatho($id)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }
}
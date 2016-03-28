<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class TypePathoController extends Controller
{
    /**
     * Retourne les pathologies associées à un type
     * @param  int $idT
     */
    public function getListePatho($idT) 
    {
        $typePatho = $this->model->get('TypePatho');

        $typesPatho = $typePatho->all()->toArray();
        $pathos = $typePatho->getListePatho($idT)->toArray();
        $this->view->render('ajax/patho', compact('typesPatho', 'pathos'));
    }

    /**
     * Affiche tous les types de patho si pas d'id donné sinon le type de patho
     * @param  int $id 
     */
    public function getTypesPatho($idT = null)
    {
        $typePatho = $this->model->get('TypePatho');
        if (isset($idT)) {
            $typesPatho = $typePatho->where(['idT' => $idT])->toArray();
        } else {
            $typesPatho = $typePatho->all()->toArray();
        }

        $this->view->render('ajax/typePatho', compact('typesPatho'));
    }
}
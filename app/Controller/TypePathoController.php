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

        $pathos = $typePatho->getListePatho($idT)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }

    public function getListePathoFiltered($idT, $meridiens, $caracteristiques = null)
    {
        $typePatho = $this->model->get('TypePatho');

        $meridiens = explode(',', $meridiens);
        $caracteristiques = explode(',', $caracteristiques);

        $pathos = $typePatho->getListePathoFiltered($idT, $meridiens, $caracteristiques)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }

    public function getListePathoFilteredWithoutMeridiens($idT, $caracteristiques)
    {
        $this->getListePathoFiltered($idT, null, $caracteristiques);
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

    public function getTypesPathoFiltered($pathos)
    {
        $typePatho = $this->model->get('TypePatho');

        $typesPatho = $typePatho->getTypePatho($pathos)->first();
        die(json_encode($typesPatho->idT));
    }
}
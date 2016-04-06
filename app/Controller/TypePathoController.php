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
    public function getTypesPatho()
    {
        $typePatho = $this->model->get('TypePatho');
        $typesPatho = $typePatho->all()->toArray();

        $this->view->render('ajax/typePatho', compact('typesPatho'));
    }

    public function getTypesPathoFiltered($pathos, $meridiens = null, $caracteristiques = null)
    {
        $typePatho = $this->model->get('TypePatho');

        $meridiens = explode(',', $meridiens);
        $caracteristiques = explode(',', $caracteristiques);

        $typesPatho = $typePatho->getTypePatho($pathos, $meridiens, $caracteristiques)->toArray();
        die(json_encode($typesPatho));
    }

    public function getTypesPathoFilteredWithoutMeridien($pathos, $caracteristiques)
    {
        $this->getTypesPathoFiltered($pathos, null, $caracteristiques);
    }

    public function getTypesPathoFilteredWithoutPatho($meridiens, $caracteristiques = null)
    {
        $this->getTypesPathoFiltered(null, $meridiens, $caracteristiques);
    }

    public function getTypesPathoFilteredWithCaracteristiques($caracteristiques)
    {
        $this->getTypesPathoFiltered(null, null, $caracteristiques);
    }
}
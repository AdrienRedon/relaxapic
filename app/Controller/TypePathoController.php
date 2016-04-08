<?php 

namespace App\Controller;

use App\Core\Controller\Controller;

class TypePathoController extends Controller
{

// get Liste
    /**
     * Retourne les pathologies associées à un type
     * @param  int $idT
     */
    public function getListePatho($idT) 
    {
        $typePatho = $this->model->get('TypePatho');

        $pathos = $typePatho->getListePatho($idT, null, null, null)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }

    public function getListePathoFiltered($idT, $meridiens, $caracteristiques, $keyword)
    {
        $typePatho = $this->model->get('TypePatho');

        $meridiens = explode(',', $meridiens);
        $caracteristiques = explode(',', $caracteristiques);

        $pathos = $typePatho->getListePathoFiltered($idT, $meridiens, $caracteristiques, $keyword)->toArray();
        $this->view->render('ajax/patho', compact('pathos'));
    }

    public function getListePathoFilteredM($idT, $meridiens)
    {
        $this->getListePathoFiltered($idT, $meridiens, null, null);
    }

    public function getListePathoFilteredMC($idT, $meridiens, $caracteristiques)
    {
        $this->getListePathoFiltered($idT, $meridiens, $caracteristiques, null);
    }

    public function getListePathoFilteredMK($idT, $meridiens, $keyword)
    {
        $this->getListePathoFiltered($idT, $meridiens, null, $keyword);
    }

    public function getListePathoFilteredC($idT, $caracteristiques)
    {
        $this->getListePathoFiltered($idT, null, $caracteristiques, null);
    }

    public function getListePathoFilteredCK($idT, $caracteristiques, $keyword)
    {
        $this->getListePathoFiltered($idT, null, $caracteristiques, $keyword);
    }

    public function getListePathoFilteredK($idT, $keyword)
    {
        $this->getListePathoFiltered($idT, null, null, $keyword);
    }

// get Type

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

    public function getTypesPathoFiltered($pathos, $meridiens, $caracteristiques, $keyword)
    {
        $typePatho = $this->model->get('TypePatho');

        $meridiens = explode(',', $meridiens);
        $caracteristiques = explode(',', $caracteristiques);

        $typesPatho = $typePatho->getTypePatho($pathos, $meridiens, $caracteristiques, $keyword)->toArray();
        die(json_encode($typesPatho));
    }

    public function getTypesPathoFilteredP($pathos)
    {
        $this->getTypesPathoFiltered($pathos, null, null, null);
    }

    public function getTypesPathoFilteredPM($pathos, $meridiens)
    {
        $this->getTypesPathoFiltered($pathos, $meridiens, null, null);
    }

    public function getTypesPathoFilteredPC($pathos, $caracteristiques)
    {
        $this->getTypesPathoFiltered($pathos, null, $caracteristiques, null);
    }

    public function getTypesPathoFilteredPK($pathos, $keyword)
    {
        $this->getTypesPathoFiltered($pathos, null, null, $keyword);
    }

    public function getTypesPathoFilteredPMC($pathos, $meridiens, $caracteristiques)
    {
        $this->getTypesPathoFiltered($pathos, $meridiens, $caracteristiques, null);
    }

    public function getTypesPathoFilteredPMK($pathos, $meridiens, $keyword)
    {
        $this->getTypesPathoFiltered($pathos, $meridiens, null, $keyword);
    }

    public function getTypesPathoFilteredPCK($pathos, $caracteristiques, $keyword)
    {
        $this->getTypesPathoFiltered($pathos, null, $caracteristiques, $keyword);
    }

    public function getTypesPathoFilteredM($meridiens)
    {
        $this->getTypesPathoFiltered(null, $meridiens, null, null);
    }

    public function getTypesPathoFilteredMC($meridiens, $caracteristiques)
    {
        $this->getTypesPathoFiltered(null, $meridiens, $caracteristiques, null);
    }

    public function getTypesPathoFilteredMK($meridiens, $keyword)
    {
        $this->getTypesPathoFiltered(null, $meridiens, null, $keyword);
    }

    public function getTypesPathoFilteredMCK($meridiens, $caracteristiques, $keyword)
    {
        $this->getTypesPathoFiltered(null, $meridiens, $caracteristiques, $keyword);
    }

    public function getTypesPathoFilteredC($caracteristiques)
    {
        $this->getTypesPathoFiltered(null, null, $caracteristiques, null);
    }

    public function getTypesPathoFilteredCK($caracteristiques, $keyword)
    {
        $this->getTypesPathoFiltered(null, null, $caracteristiques, $keyword);
    }

    public function getTypesPathoFilteredK($keyword)
    {
        $this->getTypesPathoFiltered(null, null, null, $keyword);
    }

}
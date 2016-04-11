<?php

namespace App\Model;

use App\Core\Model\Model;

class TypePatho extends Model
{
    protected $table = "typePatho";
    protected $fields = ['idT', 'name'];

    protected $caracteristiques = [
        1 => 'plein',
        2 => 'chaud',
        3 => 'vide',
        4 => 'froid',
        5 => 'interne',
        6 => 'externe',
    ];

    /**
     * Retourne la liste des Patho pour un type de patho
     * @param int id
     * @return Collection
     */
    public function getListePatho($idT)
    {
        $sql = "SELECT idP, `desc` from patho as p
                inner join pathoTypePatho as pTP on p.type = pTP.code
                inner join typePatho as tP on pTP.idT = tP.idT
                where tP.idT = ?";
        $data = $this->db->query($sql, [$idT]);
        return $data;
    }

    /**
     * Retourne la liste des Patho pour un type de patho et des filtres
     * @param  int    $idT
     * @param  array  $meridiens
     * @param  array  $caracteristiques
     * @param  string $keyword
     * @return Collection
     */
    public function getListePathoFiltered($idT, $meridiens, $caracteristiques, $keyword)
    {
        $args = array();
        $length = 1;

        $sql = "SELECT p.idP, p.desc from patho as p
                inner join pathoTypePatho as pTP on pTP.code = p.type
                inner join typePatho as tP on tP.idT = pTP.idT
                inner join symptPatho as sP on sP.idP = p.idP
                inner join symptome as s on s.idS = sP.idS
                inner join keySympt as kS on kS.idS = s.idS
                inner join keywords as k on k.idK = kS.idK
                where tP.idT = ?";
        $args[] = $idT;
                
        if (! empty($meridiens) && ! empty($meridiens[0])) {
            $sql .= " and (";
            foreach($meridiens as $meridien) {
                $sql .= " p.mer = ? or";
                $args[] = $meridien;
            }
            $sql = substr($sql, 0, -2) . ')';
        }

        if (! empty($caracteristiques) && ! empty($caracteristiques[0])) {
            $sql .= " and (";
            foreach ($caracteristiques as $c) {
                $sql .= " p.desc like ? or";
                $args[] = '%' .$this->caracteristiques[$c] .'%';
            }    
            $sql = substr($sql, 0, -2) . ')';
        }

        if (isset($keyword) && ! empty($keyword)) {
            $sql .= " and (k.name like ? or p.desc like ?)";
            $args[] = '%' . $keyword . '%';
            $args[] = '%' . $keyword . '%';
        }

        $sql .= ' group by p.idP';
        $data = $this->db->query($sql, $args);
        return $data;
    }

    /**
     * Retourne la liste des types patho en fonction de filtres
     * @param  int    $idT
     * @param  array  $meridiens
     * @param  array  $caracteristiques
     * @param  string $keyword
     * @return Collection
     */
    public function getTypePatho($idT, $meridiens, $caracteristiques, $keyword)
    {
        $args = array();
        $sql = "SELECT distinct tP.idT, tP.name FROM typePatho tP
                inner join pathoTypePatho as pTP on tP.idT = pTP.idT
                inner join patho as p on p.type = pTP.code
                inner join symptPatho as sP on sP.idP = p.idP
                inner join symptome as s on s.idS = sP.idS
                inner join keySympt as kS on kS.idS = s.idS
                inner join keywords as k on k.idK = kS.idK
         WHERE 1 = 1 AND (";

        if (isset($idT)) {
            $sql .= " tP.idT = ?) AND (";
            $args[] = $idT;
        }

        if (! empty($meridiens) && ! empty($meridiens[0])) {
            foreach ($meridiens as $meridien) {
                $sql .= " p.mer like ? OR";
                $args[] = '%' . $meridien . '%';
            }
            $sql = substr($sql, 0, -3);
            $sql .= ") AND (";
        }

        if (! empty($caracteristiques) && ! empty($caracteristiques[0])) {
            foreach ($caracteristiques as $c) {
                $sql .= " p.desc like ? OR";
                $args[] = '%' . $this->caracteristiques[$c] . '%';
            }
            $sql = substr($sql, 0, -3);
            $sql .= ") AND (";
        }

        if (isset($keyword) and ! empty($keyword)) {
            $sql .= " k.name like ? OR p.desc like ? ";
            $args[] = '%' . $keyword . '%';
            $args[] = '%' . $keyword . '%';
            $sql .= ") AND (";
        }

        $sql = substr($sql, 0, -6);
        $data = $this->db->query($sql, $args);
        return $data;
    }
}
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
                where tP.idT = $idT";
        $data = $this->db->query($sql);
        return $data;
    }

    public function getListePathoFiltered($idT, $meridiens, $caracteristiques)
    {
        $sql = "SELECT idP, `desc` from patho as p
                inner join pathoTypePatho as pTP on p.type = pTP.code
                inner join typePatho as tP on pTP.idT = tP.idT
                where tP.idT = $idT";
                
        if (! empty($meridiens) && ! empty($meridiens[0])) {
            $sql .= " and (";
            foreach($meridiens as $meridien) {
                $sql .= " p.mer = '$meridien' or";
            }
            $sql = substr($sql, 0, -2) . ')';
        }

        if (! empty($caracteristiques) && ! empty($caracteristiques[0])) {
            $sql .= " and (";
            foreach ($caracteristiques as $c) {
                $sql .= " `desc` like '%{$this->caracteristiques[$c]}%'  or";
            }    
            $sql = substr($sql, 0, -2) . ')';
        }

        $data = $this->db->query($sql);
        return $data;
    }

    public function getTypePatho($idT, $meridiens, $caracteristiques)
    {
        $sql = "SELECT distinct tP.idT, tP.name FROM typePatho tP
                inner join pathoTypePatho as pTP on tP.idT = pTP.idT
                inner join patho as p on p.type = pTP.code
         WHERE 1 = 1 AND (";

        if (isset($idT)) {
            $sql .= " idT = $idT ) AND (";
        }

        if (! empty($meridiens) && ! empty($meridiens[0])) {
            foreach ($meridiens as $meridien) {
                $sql .= " p.mer like '%$meridien%' OR";
            }
            $sql = substr($sql, 0, -3);
            $sql .= ") AND (";
        }

        if (! empty($caracteristiques) && ! empty($caracteristiques[0])) {
            foreach ($caracteristiques as $c) {
                $sql .= " p.desc like '%{$this->caracteristiques[$c]}%' OR";
            }
            $sql = substr($sql, 0, -3);
            $sql .= ") AND (";
        }
        $sql = substr($sql, 0, -6);
        $data = $this->db->query($sql);
        return $data;
    }
}
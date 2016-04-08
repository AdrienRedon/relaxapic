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

    public function getListePathoFiltered($idT, $meridiens, $caracteristiques, $keyword)
    {
        $sql = "SELECT p.idP, p.desc from patho as p
                inner join pathoTypePatho as pTP on pTP.code = p.type
                inner join typePatho as tP on tP.idT = pTP.idT
                inner join symptPatho as sP on sP.idP = p.idP
                inner join symptome as s on s.idS = sP.idS
                inner join keySympt as kS on kS.idS = s.idS
                inner join keywords as k on k.idK = kS.idK
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
                $sql .= " p.desc like '%{$this->caracteristiques[$c]}%'  or";
            }    
            $sql = substr($sql, 0, -2) . ')';
        }

        if (isset($keyword) && ! empty($keyword)) {
            $sql .= " and (k.name like '%$keyword%' or p.desc like '%$keyword%')";
        }

        $sql .= ' group by p.idP';

        $data = $this->db->query($sql);
        return $data;
    }

    public function getTypePatho($idT, $meridiens, $caracteristiques, $keyword)
    {
        $sql = "SELECT distinct tP.idT, tP.name FROM typePatho tP
                inner join pathoTypePatho as pTP on tP.idT = pTP.idT
                inner join patho as p on p.type = pTP.code
                inner join symptPatho as sP on sP.idP = p.idP
                inner join symptome as s on s.idS = sP.idS
                inner join keySympt as kS on kS.idS = s.idS
                inner join keywords as k on k.idK = kS.idK
         WHERE 1 = 1 AND (";

        if (isset($idT)) {
            $sql .= " tP.idT = $idT ) AND (";
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

        if (isset($keyword) and ! empty($keyword)) {
            $sql .= " k.name like '%$keyword%' OR p.desc like '%$keyword%' ";
            $sql .= ") AND (";
        }

        $sql = substr($sql, 0, -6);
        $data = $this->db->query($sql);
        return $data;
    }
}
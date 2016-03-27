<?php

namespace App\Model;

use App\Core\Model\Model;

class TypePatho extends Model
{
    protected $table = "typePatho";
    protected $fields = ['idT', 'name'];

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
}
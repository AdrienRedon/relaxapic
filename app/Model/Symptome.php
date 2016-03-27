<?php

namespace App\Model;

use App\Core\Model\Model;

class Symptome extends Model
{
    protected $table = "symptome";
    protected $fields = ['idS', 'desc'];

    /**
     * Retourne les symptomes associés à une pathologie
     * @param  int $idP id de la pathologie
     * @return Collection
     */
    public function getSymptomesByPatho($idP)
    {
        $sql = "SELECT symptome.desc, 
                       symptPatho.aggr 
                  from symptPatho 
                 inner join patho on symptPatho.idP = patho.idP
                 inner join symptome on symptPatho.idS = symptome.idS
                 where patho.idP = $idP";
        $data = $this->db->query($sql);
        return $data;
    }
}
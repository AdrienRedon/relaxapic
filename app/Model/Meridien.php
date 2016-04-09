<?php

namespace App\Model;

use App\Core\Model\Model;

class Meridien extends Model
{
    protected $table = "meridien";
    protected $fields = ['code', 'nom', 'element', 'yin'];

    /**
     * Retourne les méridiens associés à une pathologie
     * @param  int $idP id de la pathologie
     * @return Collection
     */
    public function getMeridienByPatho($idP)
    {
        $sql = "SELECT nom, element, yin 
                  from meridien
                 where code in (
                    select mer 
                      from patho 
                     where idP = ?)";
        $data = $this->db->query($sql, compact($idP));
        return $data;
    }
}
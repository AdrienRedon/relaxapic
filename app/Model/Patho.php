<?php

namespace App\Model;

use App\Core\Model\Model;

class Patho extends Model
{
    protected $table = "patho";
    protected $fields = ['idP', 'mer', 'type', 'desc'];

    public function getPatho($id)
    {
        $sql = "SELECT idP, `desc` FROM {$this->table} WHERE type like ";
        if ($id == 1) {
            $sql .= "'m%' and type not like 'mv%'";
        } elseif ($id == 2) {
            $sql .= "'tf%'";
        } elseif ($id == 3) {
            $sql .= "'j%'";
        } elseif ($id == 4) {
            $sql .= "'l%'";
        } elseif ($id == 5) {
            $sql .= "'mv%'";
        }
        $data = $this->db->query($sql);
        return $data;
    }

    public function count($id)
    {
        
    }
}
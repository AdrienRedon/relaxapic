<?php

namespace App\Model;

use App\Core\Model\Model;

class Patho extends Model
{
    protected $table = "patholo";
    protected $fields = ['idP', 'mer', 'type', 'desc'];

    public function getPathoMeridien()
    {
        $sql = "SELECT `desc` FROM {$this->table} WHERE type like 'm%' and type not like 'mv%'";
        $data = $this->db->query($sql);
        return $data;
    }
}
<?php

namespace App\Model;

use App\Core\Model\Model;

class Patho extends Model
{
    protected $table = "patho";
    protected $fields = ['idP', 'mer', 'type', 'desc'];
}
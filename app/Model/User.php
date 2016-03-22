<?php

namespace App\Model;

use App\Core\Model\Model;

class User extends Model
{
    protected $table = "users";
    protected $fields = ['login'];
    protected $hidden = ['password'];
}
<?php 

namespace Test\Validator;

use App\Core\Validator\Validator;

class TestFailValidator extends Validator
{
    public function __construct()
    {
        $this->data = array(
            'login' => 'toto',
            'password' => '123456'
        );

        $this->rules = array(
            'login' => 'required|mail',
            'password' => 'required'
        );
    }
}

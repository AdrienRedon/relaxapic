<?php 

namespace App\Validator;

use App\Core\Validator\Validator;

class LoginValidator extends Validator 
{
	public function __construct()
	{
		$data = $_POST;
		$rules = [
			'login' => 'required|mail',
			'password' => 'required'
		];
		parent::__construct($data, $rules);
	}
}


<?php 

namespace App\Validator;

use App\Core\Validator\Validator;

class LoginValidator extends Validator 
{
	public function __construct($input = array())
	{
		$data = $input;
		$rules = [
			'mail' => 'required|mail',
			'password' => 'required'
		];
		parent::__construct($data, $rules);
	}
}


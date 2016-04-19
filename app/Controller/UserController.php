<?php 

namespace App\Controller;

use App\Core\Controller\Controller;
use App\Validator\LoginValidator;
use App\Validator\SigninValidator;
use App\Core\DependencyInjection\ContainerInterface;

class UserController extends Controller 
{
    protected $auth;

    public function __construct(ContainerInterface $container = null)
    {
        parent::__construct($container);
        $this->auth = $this->container->resolve('Auth');
    }

    public function login()
    {
        $input = array(
            'mail'    => $_POST['mail'],
            'password' => $_POST['password']
        );
        $errors = array();
        $validation = new LoginValidator($input);
        if ($validation->fails()) {
            $errors = $validation->getErrors();
            die(json_encode($errors));
        }
        if ($this->auth->attempt($input['mail'], password_hash($input['password'], PASSWORD_DEFAULT))) {
            die(json_encode(true));
        } else {
            die(json_encode(false));
        }
    }

    public function signin()
    {
        $input = array(
            'mail'    => $_POST['mail'],
            'password' => $_POST['password'],
            'password_confirm' => $_POST['password_confirm']
        );
        $errors = array();
        $validation = new SigninValidator($input);
        if ($validation->fails()) {
            $errors = $validation->getErrors();
            die(json_encode($errors));
        } else {
            $user = $this->modelResolver->get('User');
            $input = array(
                'mail'    => $input['mail'],
                'password' => password_hash($input['password'], PASSWORD_DEFAULT)
            );
            $user->save($input);
            die(json_encode(true));
        }
    }
}
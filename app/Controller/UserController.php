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
        if ($this->auth->attempt($input['mail'], $input['password'])) {
            die(json_encode(['logged' => true]));
        } else {
            die(json_encode(['logged' => false]));
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
            $user = $this->model->get('User');
            $input = array(
                'mail'     => $input['mail'],
                'password' => password_hash($input['password'], PASSWORD_DEFAULT)
            );
            $user->create($input);
            die(json_encode(['signed' => true]));
        }
    }

    public function logout()
    {
        $this->auth->logout();
    }
}
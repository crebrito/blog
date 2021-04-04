<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
    public $configs;

    public function __construct()
    {
        $this->configs = config('Blog');
    }

    public function index()
    {

        $data = [

            'email' => 'bb@aa.com',
            'password' => 'test123',
            'name' => 'carlos',
            'surname' => 'brito',
            'id_country' => 12,
        ];

        $user = new User($data);
        $user->generateUsername();
        
        $model = model('UsersModel');
        $model->withGroup($this->configs->defaultGroupUsers);
        $model->save($user);

        echo view('auth/register');
    }
}

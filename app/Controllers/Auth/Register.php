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

            'email' => 'aa@aa.com',
            'password' => 'test123',
            'name' => 'Pepe',
            'surname' => 'Lopez',
            'id_country' => 12,
            'group' => 2
        ];

        $user = new User($data);
        $user->generateUsername();
        
        $model = model('UsersModel');
        d($model->withGroup($this->configs->defaultGroupUsers));
        //$model->save($user);

        echo view('auth/register');
    }
}

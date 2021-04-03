<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
    public function index()
    {

        $data = [

            'email' => 'aa@aa.com',
            'password' => 'test123',
            'name' => 'Pepe',
            'surname' => 'Lopez',
            'id_country' => 12
        ];

        $user = new User($data);
        d($user);
        echo view('auth/register');
    }
}

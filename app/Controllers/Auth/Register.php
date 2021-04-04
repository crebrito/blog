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
            'id_country' => 12,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $user = new User($data);
        $user->generateUsername();
        d($user->username);
        echo view('auth/register');
    }
}

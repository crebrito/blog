<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;

class Register extends BaseController
{
    public $configs;

    public function __construct()
    {
        $this->configs = config('Blog');
    }

    public function index(){

        return view('auth/register');

    }

    public function store()
    {

        $data = [

            'email' => 'aa@aa.com',
            'password' => 'test123',
            'name' => 'juan',
            'surname' => 'lopez',
            'id_country' => 12,
        ];

        $user = new User($data);
        $user->generateUsername();
        
        $model = model('UsersModel');
        $model->withGroup($this->configs->defaultGroupUsers);

        $userInfo = new UserInfo($data);
        $model->addUserInfo($userInfo);

        $model->save($user);

        echo view('auth/register');
    }
}

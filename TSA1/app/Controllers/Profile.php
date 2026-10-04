<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $user = (new UserModel())->first();

        return view('profile', ['user' => $user]);
    }
}
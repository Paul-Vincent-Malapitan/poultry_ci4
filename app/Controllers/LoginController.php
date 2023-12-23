<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        //
    }

    public function login_user()
    {
        return view ('login_user');
    }
}

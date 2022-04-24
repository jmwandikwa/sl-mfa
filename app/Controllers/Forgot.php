<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Forgot extends BaseController
{
    public function index()
    {
        return view('/auth/forgot-password');
    }
}

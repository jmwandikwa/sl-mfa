<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        //
    }
    public function userProfile()
    {
        $data['title'] = "user page";
        return view('/pages/user-profile', $data);

    }
}

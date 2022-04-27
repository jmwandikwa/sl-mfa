<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Chat extends BaseController
{
    public function index()
    {
        $data['title'] = "chat app";
        return view("/pages/Chat",$data);
    }
}

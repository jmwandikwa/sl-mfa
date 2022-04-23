<?php

namespace App\Controllers;
use CodeIgniter\Model;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard Page';
        return view('/auth/login');
    }
    public function Dashboard()
    {
        $data['title'] = 'Dashboard Page';
        return view('welcome_message',$data);
    }
    public function users()
    {
        $data['title'] = 'Users Page';
        return view('users',$data);
    }
    public function login()
    {
        return view('/auth/login');
    }
    public function register()
    {
        return view('/auth/register');
    }
    public function lockScreen()
    {
        return view('/auth/lockScreen');
    }
}

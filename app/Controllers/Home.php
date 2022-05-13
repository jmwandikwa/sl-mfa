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
        return view('dashboard',$data);
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
        
        session()->set('screen',1);
        session()->remove('logged_in');
        return view('/auth/lockScreen');
        
    }
    public function faq()
    {
        $data['title'] = 'Users Page';
        return view('faq',$data);
    }
    // chat page
    public function usersPhp()
    {
        return view('/pages/chat/usersphp');
    }
    public function search()
    {
        return view('/pages/chat/search');
    }
    public function getChat()
    {
        return view('/pages/chat/load-chat');
    }
    public function loadChat()
    {
        return view('/pages/chat/get-chat');
    }
    public function insertChat()
    {
        return view('/pages/chat/insert-chat');
    }
    // chat p
}

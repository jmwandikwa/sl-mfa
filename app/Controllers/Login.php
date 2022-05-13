<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('/auth/login', $data);
    }

    public function auth()
    {
        
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_image'       => $data['user_image'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE,
                    'screen' => 0,
                ];
                $session->set($ses_data);
                // return redirect()->to(base_url('/dashboard'));
                $response = "success";
            }else{
                // $session->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to(base_url('/login'));
                $response = "failed";
            }
        }else{
            // $session->setFlashdata('msg', 'Email not Found');
            // return redirect()->to(base_url('/login'));
            $response = "failed";
        }
        echo $response;
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
    public function screen()
    {
     $session = session();
     $model = new UserModel();
     $name = $session->get('user_name');
     $password = $this->request->getVar('password');
        $data = $model->where('user_name', $name)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE,
                    'screen' => 0,
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/dashboard'));
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/screen'));
            }
        }
        
    }
}


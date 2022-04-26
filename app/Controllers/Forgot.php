<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\HTTP\Response;

class Forgot extends BaseController
{
    public function index()
    {
        return view('/auth/forgot-password');
    }
    public function getKey()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $session = session();
        $model = new UserModel();
        $email =  $this->request->getVar('email');
        $vcode =  $this->request->getVar('code');
        $vdata = $model->where('user_email', $email)->first();
        if ($vdata) {

            $code = rand(1000, 9999);
            $data = [
                "user_code" => $code,
            ];
            $builder->where('user_email', $email);
            $builder->update($data);
            $response = "success";
            if ($vcode !== '') {
                $code = $vdata['user_code'];
                if ($vcode === $code) {
                    $vdate = date('Y-m-d H:i:s');
                    $data = [
                        "user_code" => 0,
                        /*                         "user_verified_at" => $vdate, */
                    ];
                    $builder->where('user_email', $email);
                    $builder->update($data);
                    $response = 'verified';
                    session()->set("email", $email);
                    # code...
                }
                # code...
            }
        } else {
            $response = "Email not found!";
        }
        echo $response;
    }
    public function newPass()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $session = session();
        $model = new UserModel();
        $pass =  $this->request->getVar('pass');
        $vpass = $this->request->getVar('vpass');
        $email = $session->get('email');
        if ($pass === $vpass) {
            $vpass = password_hash($this->request->getVar('vpass'), PASSWORD_DEFAULT);
            $vdata = $model->where('user_email', $email)->first();
            if ($vdata) {
                $data = [
                    "user_password" => $vpass,
                ];
                $builder->where('user_email', $email);
                $builder->update($data);
                $response = "success";
             } else {
                $response = "An error has occured!";
            }
        } else {
            $response = "Password Mismatch!";
        }
        //
        echo $response;
    }
}

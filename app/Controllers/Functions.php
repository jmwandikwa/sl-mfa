<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\BlogModel;

class Functions extends BaseController
{
    public function index()
    {
        //
    }
    public function fetchPost()
    {
        $model = new BlogModel();
        $data['posts'] = $model->findAll(); //
        print_r($data);
    }
    public function deletePost($m)
    {
        $model = new BlogModel();
        
        if($model->delete($m)){
            $response = "success";
        }
        else{
            $response = "failed";
        }
        echo $response;
    }
}

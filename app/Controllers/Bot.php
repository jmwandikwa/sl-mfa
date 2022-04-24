<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BotModel;

class Bot extends BaseController
{
    public function index()
    {
        //
    }
    public function message()
    {
        //$this->request->getVar('message')
        $model = new BotModel();
        $data = $model->like("questions", $this->request->getVar('question'))->first();
        if($data){
            $data['answer'] = $data['answers'];
        }
        else
      {
        $data['answer'] = "I did not quite get that";
        
      }
    echo $data['answer'];
    }
}

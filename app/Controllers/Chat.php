<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ChatModel;

class Chat extends BaseController
{
    public function index()
    {
        $data['title'] = "chat app";
        return view("/pages/chat/Chat",$data);
    }
    public function send()
    {
        $session = session();
        $model = new UserModel();
        $user_id = $session->get('user_id');
        $message = $this->request->getVar('message');
        $to = $this->request->getVar('to');
        $data = [
            "outgoing_id" => $user_id,
            "msg" => $message,
            "incoming_id" => $to,
        ];
        if($model->insert($data)){
            $response = "success";
        }
        else{
            $response = "failed";
        }
        echo $response;
    }

    public function inbox()
    {
        
        $user_id = $this->request->getVar('user_id');
        $model = new ChatModel();
        $arr = array('incoming_msg_id' => $user_id, 'outgoing_msg_id' => $user_id);
        $data = $model->where("incoming_msg_id = $user_id OR outgoing_msg_id = $user_id")->groupBy(['incoming_msg_id', 'outgoing_msg_id'])->findAll();
        echo json_encode($data);
    }
}

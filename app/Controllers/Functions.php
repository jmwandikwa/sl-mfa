<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\BlogModel;
use App\Models\EventModel;
use App\Models\EventMap;

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
    public function join()
    {
        $user_id = $this->request->getVar('user_id');
        $event_id = $this->request->getVar('event_id');
        $model = new EventMap();
        $data = [
            "event_user_id" => $user_id,
            "event_event_id" => $event_id,
        ];
        if($model->insert($data)){
            $response = "success";
        }
        else{
            $response = "failed";
        }
        echo $response;

    }

    public function DeleteEvent()
        {
            $event_id = $this->request->getVar('event_id');
            $model = new EventModel();
            if($model->delete($event_id)){
                $response = "success";
            }
            else{
                $response = "failed";
            }
            echo $response;
        }
    public function EventCheck()
    {
        $user_id = $this->request->getVar('user_id');
        $event_id = $this->request->getVar('event_id');
        $model = new EventMap();
        $arr = array('event_user_id' => $user_id, 'event_event_id' => $event_id);
        if($model->where($arr)->first()){
            echo "true";
        }
        else{
            echo "false";
        }
        // print_r($data);
    }
    public function exitEvent()
    {
        $user_id = $this->request->getVar('user_id');
        $event_id = $this->request->getVar('event_id');
        $model = new EventMap();
        $arr = array('event_user_id' => $user_id, 'event_event_id' => $event_id);
        if($model->where($arr)->delete()){
            echo "success";
        }
        else{
            echo "failed";
        }
        // print_r($data);
    }
    public function eventUsers()
    {
        $event_id = $this->request->getVar('event_id');
        $model = new EventMap();
        $arr = array('event_event_id' => $event_id);
        $data = $model->where($arr)->findAll();
        
        echo json_encode($data);
    }
    public function getUser()
    {
        $user_id = $this->request->getVar('user_id');
        $model = new UserModel();
        $data = $model->where("user_id",$user_id)->first();
        echo json_encode($data);
    }
    public function profileSave(){
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $bio = $this->request->getVar('bio');
        $fname = $this->request->getVar('fname');
        $lname = $this->request->getVar('lname');
        $id =  session()->get('user_id');
        $name = $fname.' '.$lname;
        $validateImage = $this->validate([
            'profile' => [
                'uploaded[file]',
                'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
                'max_size[file, 4096]',
            ],
        ]);
                $file = $this->request->getFile('profile');

                if($file)
                {
                    $profile_image = $file->getName();
                    $temp = explode(".",$profile_image);
                    $newfilename = round(microtime(true)) . '.' . end($temp);

                    if($file->move("profile", $newfilename)) 
                    {
                        $data = [
                            'user_name' => $name,
                            'user_bio' => $bio,
                            'user_image' => $newfilename ,
                            
                        ];
                        // session()->set('user_image',$newfilename);
                        $response = 'image saved';
                    } else
                    {
                        $data = [
                            'user_name' => $name,
                            'user_bio' => $bio,
                               
                        ];
                        $response = "image not saved";
                    }
                                
                }else{
                    $data = [
                        'user_name' => $name,
                        'user_bio' => $bio,
                           
                    ];
                    $response = "image not saved";

                }

                
                
                $builder->where('user_id', $id);
                $builder->update($data);
            // Renaming file before upload


        
        //  if($file->move("profile", $newfilename)) {
        //  }
				
            // $data = [
            //     'user_name' => $title,
                
            // ];
            // $model = new userModel();
            // $model->insert($data);
        

    
    }
    public function userLevel(){
        $model = new UserModel();
        
        $data['user-data'] = $model->where("user_id",session()->get('user_id'))->first();
    }

    public function getEv(){
        $model = new EventModel();        
        $data['event'] = $model->orderBy("event_id", "desc")->first();
        echo json_encode($data);
    
    }
    public function events(){
        $model = new EventModel();        
        $data['events'] = $model->orderBy("event_id", "desc")->findAll();
        echo json_encode($data);
    }
    public function users(){
        $model = new UserModel();        
        $data['users'] = $model->orderBy("user_id", "desc")->findAll();
        echo json_encode($data);
    }
    public function articles(){
        $model = new BlogModel();        
        $data['articles'] = $model->orderBy("blog_id", "desc")->findAll();
        echo json_encode($data);
    }



    
}

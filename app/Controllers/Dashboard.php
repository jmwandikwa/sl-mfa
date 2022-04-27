<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use App\Models\UserModel;
use App\Models\EventModel;

class Dashboard extends BaseController
{
    public function index()
    {
        //
    }
   
    public function Blog()
    {
        $data['title'] = "user Blog";
        return view('/pages/Blog', $data);

    }
    public function blogDashboard()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->where("blog_author",session()->get('user_id'))->orderBy('blog_id','desc')->findAll();
        $data['title'] = "user Blog";
        return view('/pages/blog/Blog-dashboard', $data);

    }
    public function blogDiscover()
    {
        $model = new BlogModel();
        $data['posts'] = $model->orderBy('blog_id','desc')->findAll();
        $data['title'] = "user Blog";
        return view('/pages/blog/Blog-discover', $data);
    }
    public function blogCreate()
    {
        helper(['form', 'url']);
       $title = $this->request->getVar('title');
         $content = $this->request->getVar('content');
         $description = $this->request->getVar('description');
         $validateImage = $this->validate([
            'cover' => [
                'uploaded[file]',
                'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
                'max_size[file, 4096]',
            ],
        ]);
                $file = $this->request->getFile('cover');

				$profile_image = $file->getName();

				// Renaming file before upload
				$temp = explode(".",$profile_image);
				$newfilename = round(microtime(true)) . '.' . end($temp);
         if($file->move("covers", $newfilename)) {
				
            $data = [
                'blog_title' => $title,
                'blog_cover' => $newfilename,
                'blog_description' => $description,
                'blog_author' => session()->get('user_id'),
                'blog_content' => $content,
                'blog_created_at' => date('Y-m-d H:i:s'),
                'blog_status' => "pending",
            ];
            $model = new BlogModel();
            $model->insert($data);
        }

    }
        public function userProfile()
        {
            $session = session();
            $model = new UserModel();
            $email = $session->get('user_email');
            $name = $session->get('user_email');
            $data = $model->where('user_email', $email)->first();
            if($data){
                $bio = $data['user_bio'];
                $url = $data['user_image'];
                
            }
            $data['title'] = "user page";
            return view('/pages/user-profile', $data);
        }
        public function profileSave()
        {
            $db = \Config\Database::connect();
            $builder = $db->table('users');
            $session = session();
            $model = new UserModel();
            $email =  $session->get('user_email');
            $pass =  $this->request->getVar('pass');
            $vpass =  $this->request->getVar('vpass');
            $fname =  trim($this->request->getVar('fname'));
            $lname =  trim($this->request->getVar('lname'));
            $bio =  trim($this->request->getVar('bio'));
            if (empty($pass) || empty($fname) || empty($lname) || empty($bio) || empty($email)) {
                $response = "Sorry! All inputs are required";
            } else {
                if ($pass === $vpass) {
                    $name = $fname . " " . $lname;
                    $vdata = $model->where('user_email', $email)->first();
                    if ($vdata) {
                        $password = password_hash($pass, PASSWORD_DEFAULT);
                        $data = [
                            "user_name" => $name,
                            "user_password" => $password,
                            "user_bio" => $bio,
                        ];
                        $builder->where('user_email', $email);
                        $builder->update($data);
                        $ses_data = [
                            'user_name'     => $data['user_name'],
                        ];
                        $session->set($ses_data);
                        $response = "saved";
                    } else {
                        $response = "An error has occured!!!!!";
                    }
                } else {
                    $response = "Password Mismatch!";
                }
            }
            echo $response;
        }

        public function Eventsdashboard()
        {
            $model = new EventModel();
            $data['events'] = $model->where("event_author",session()->get('user_id'))->orderBy('event_id','desc')->findAll();
            $data['title'] = "Events Page";
            return view('/pages/events/Events-dashboard', $data);

        }
        public function Eventsexplore()
        {
            $model = new EventModel();
            $data['events'] = $model->orderBy('event_id','desc')->findAll();
            $data['title'] = "Running Events";
            return view('/pages/events/Events-discover', $data);

        }
        public function EventsUpload()
        {
           $model = new EventModel();
           $title = $this->request->getVar('title');
           $venue = $this->request->getVar('venue'); 
           $date = $this->request->getVar('date'); 
           $description = $this->request->getVar('description'); 
            $data = [
                "event_title"=> $title,
                "event_author"=> session()->get("user_id"),
                "event_venue"=>$venue,
                "event_date"=>$date,
                "event_description"=>$description,
            ];
            if($model->save($data)){

                echo $date;
            }else{
                echo "nop";
            }

        }
}

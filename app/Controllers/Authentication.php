<?php

namespace App\Controllers;
use App\Models\UserModel;

class Authentication extends BaseController{
    public function Register(){

        $data = [
            'page_title' => "R E G I S T E R A T I O N ",
        ];

        $model = new UserModel();
        helper(['form']);
       

        if($this->request->getMethod() === 'POST'){
            // let's validate data
            $rules = [
                'firstname' => 'required|min_length[3]',
                'lastname' => 'required|min_length[3]',
                'username' => 'required|is_unique[users.username]',
                'Email' => 'required|valid_email|is_unique[users.Email]',
                'password' => 'required|min_length[8]',
                'profile_image' => [
                    'rules' => 'uploaded[profile_image]|max_size[profile_image,2000]|ext_in[profile_image,jpg]',
                    'label' => 'The Profile Image',
                    'errors' => [
                        'uploaded' => 'Please add an image to publish your blog',
                        'max_size' => 'The image file size exceeds the allowed limit.',
                        'ext_in' => 'Only JPG images are allowed.',
                    ]
                ],
                'password_confirm' => 'matches[password]',
            ];
            // 
            if($this->validate($rules)){

                $profile_image = $this->request->getFile('profile_image');
                $newName = $profile_image->getRandomName();
                if($profile_image->isValid() && !$profile_image->hasMoved()){
                    $profile_image->move('./assets/images/uploads/profile_images', $newName);
                    // get the inputs value
                    $newData = [
                       'firstname' => $this->request->getVar('firstname'),
                       'lastname' => $this->request->getVar('lastname'),
                       'username' => $this->request->getVar('username'),
                       'Email' => $this->request->getVar('Email'),
                       'profile_image' => $newName,
                       'password' => $this->request->getVar('password'),
                       'Active' => 'True',
                   ];
    
                   $model->save($newData);
                   $data['validation'] = $this->validator;
                   return redirect()->to(base_url('/Auth/Login'));
                }

            }else{
                $data['validation'] = $this->validator;
                return view('Authentication/Registeration_view', $data);
            }

        }
        return view('Authentication/Registeration_view', $data);
    }

    public function Login(){
        $data = [
            'page_title' => "L O G I N ",
        ];
        $model = new UserModel();
        
        helper(['form']);

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        

        if($this->request->getMethod() === "POST"){

            // Let's make validation rules
            $rules = [
                'username' => 'required',
                'password' => 'required|validateUser[username,password]',
            ];
    
            $errors = [
                'password' => [
                    'validateUser' => 'EMAIL OR PASSWORD IS WRONG'
                ]
            ];


           if($this->validate($rules)){

            // initialize database
    
                $user = $model->where('username', $username)->first();
                echo "data validated";
                $this->setUserSession($user);
                return redirect()->to(base_url('/'));
            }else{
                    echo "data failed validate";
                $data['validation'] = $this->validator;
                return view('Authentication/Login_view', $data);
           }
        }
        return view('Authentication/Login_view', $data);
    }

    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'Email' => $user['Email'],
            'profile_image' => $user['profile_image'],
            'username' => $user['username'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    // Logout
    public function Logout(){
        session()->destroy();
        return redirect()->to(base_url('Auth/Login'));
    }
}
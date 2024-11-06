<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'page_title' => "H O M E"
        ];

        // custom-categories
        $categories = [
            [
                'name' => 'Technology',
                'icon' => 'fas fa-solid fa-microchip'
            ],

            [
                'name' => 'Health',
                'icon' => 'fa-solid fa-notes-medical'
            ],
            [
                'name' => 'Travel',
                'icon' => 'fa-solid fa-plane-departure'
            ],
            [
                'name' => 'Finance',
                'icon' => 'fa-solid fa-coins'
            ],
            [
                'name' => 'Lifestyle',
                'icon' => 'fa-solid fa-person'
            ],
            [
                'name' => 'Food',
                'icon' => 'fa-solid fa-bowl-food'
            ],
            [
                'name' => 'Parenting',
                'icon' => 'fa-solid fa-person-breastfeeding'
            ],
            [
                'name' => 'Business',
                'icon' => 'fa-solid fa-briefcase'
            ],
            [
                'name' => 'Fashion',
                'icon' => 'fa-solid fa-vest-patches'
            ],
            [
                'name' => 'Entertainment',
                'icon' => 'fa-solid fa-gamepad'
            ],
        ];

        $model = new BlogModel();
        $usermodel = new UserModel();

        $userId = session()->get('id'); 

        // $join_userTable = ;
        $user = $usermodel->where('id', $userId)->first();
        $data['user'] =  $user;
        $all_posts = $model->join('users','users.id = posts.user_id' , 'left')->findAll();
        $data['categories'] = $categories;
        $data['All_Posts'] = $all_posts;


        
        // echo "<pre>";
        // print_r($all_posts);
        // echo "<pre>";
        // return "Hey";
        return view('Home_view', $data);
    }

    // view Blogs according to the choosen categories
    public function viewThisCategory($category){
        // custom-categories
        $categories = [
            [
                'name' => 'Technology',
                'icon' => 'fas fa-solid fa-microchip'
            ],

            [
                'name' => 'Health',
                'icon' => 'fa-solid fa-notes-medical'
            ],
            [
                'name' => 'Travel',
                'icon' => 'fa-solid fa-plane-departure'
            ],
            [
                'name' => 'Finance',
                'icon' => 'fa-solid fa-coins'
            ],
            [
                'name' => 'Lifestyle',
                'icon' => 'fa-solid fa-person'
            ],
            [
                'name' => 'Food',
                'icon' => 'fa-solid fa-bowl-food'
            ],
            [
                'name' => 'Parenting',
                'icon' => 'fa-solid fa-person-breastfeeding'
            ],
            [
                'name' => 'Business',
                'icon' => 'fa-solid fa-briefcase'
            ],
            [
                'name' => 'Fashion',
                'icon' => 'fa-solid fa-vest-patches'
            ],
            [
                'name' => 'Entertainment',
                'icon' => 'fa-solid fa-gamepad'
            ],
        ];

        $data = [
            'page_title' => $category,
            'categories' => $categories,
            'category' => $category
        ];


        $model = new BlogModel();
        $usermodel = new UserModel();

        $userId = session()->get('id'); 

        
        $user = $usermodel->where('id', $userId)->first();
        $data['user'] =  $user;
        $category_posts = $model->where('category',$category)->join('users','users.id = posts.user_id' , 'left')->findAll();
        $data['categories'] = $categories;
        $data['category_posts'] = $category_posts;

        // return "we are ".$category." RightNow";
        return view('category_view',$data);
    }
}

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

        $user = $usermodel->where('id', $userId)->first();
        $data['user'] =  $user;
        $all_posts = $model->findAll();
        $data['categories'] = $categories;
        $data['All_Posts'] = $all_posts;
        return view('Home_view', $data);
    }
}

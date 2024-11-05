<?php 

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\UserModel;
class Dashboard extends BaseController{

    // index
    public function index(){
        
        $model = new BlogModel();


        $usermodel = new UserModel();

        $data = [
            'page_title' => 'D A S H B O A R D ',
        ];
       
        
        
        $userId = session()->get('id'); 

        $user = $usermodel->where('id', $userId)->first();

        $BlogsCount = $model->where('user_id', $userId)->countAllResults();
        $Un_published_Blogs = $model->where('status', 'False')->where('user_id', $userId)->countAllResults();
        $Recent_Activities = $model->where('status','True')->where('user_id',$userId)->orderBy('created_at', 'DESC')->findAll();
        
        $data['Blogs'] =  $BlogsCount;
        $data['Un_published_Blogs'] =  $Un_published_Blogs;

        $data['Recent_Activities'] =  $Recent_Activities;
        $data['user'] =  $user;


        // return $data['Recent_Activities'];
        return view('dashboard_view', $data);
    }

    // Blog New Post
    public function createBlog(){
        $userId = session()->get('id'); 
        $model = new BlogModel();
        $usermodel = new UserModel();
        $userId = session()->get('id'); 

        $user = $usermodel->where('id', $userId)->first();

        helper(['form']);
        $data = [
            'page_title' => 'Create Blog ',
        ];

        // custom-categories
        $categories = [
            [
                'name' => 'Technology',
                'icon' => 'fas fa-solid fa-microchip'
            ],

            [
                'name' => 'Health & Fitness',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Travel',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Personal Finance',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Lifestyle',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Food & Recipes',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Parenting',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Business & Entrepreneurship',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Fashion & Beauty',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Entertainment',
                'icon' => 'fas fa-solid fa-microchip'
            ],
        ];

        $data['categories'] = $categories;
        $data['user'] =  $user;
        // return "<h1>". $data['page_title'] ."</h1>";

        if($this->request->getMethod() === 'POST'){
            // let's validate data
            $rules = [
                'title' => 'required|min_length[5]',
                'content' => 'required',
                'category' => 'required',
                'tags' => 'required',
                'image_file' => [
                    'rules' => 'uploaded[image_file]|max_size[image_file,2000]|ext_in[image_file,jpg]',
                    'label' => 'The IMAGE File',
                    'errors' => [
                        'uploaded' => 'Please add an image to publish your blog',
                        'max_size' => 'The image file size exceeds the allowed limit.',
                        'ext_in' => 'Only JPG images are allowed.',
                    ]
                ],
                'meta_description' => 'required',
            ];

            if($this->validate($rules)){
                // Before Storing it to the database get the image file and put/save it on a directory/folder
                $imageFile = $this->request->getFile('image_file');
                $newName = $imageFile->getRandomName();
                 if($imageFile->isValid() && !$imageFile->hasMoved()){
                    $imageFile->move('./assets/images/uploads/posts', $newName);

                    // Store data to the database

                    // get the inputs value
                    $newData = [
                        'user_id' => $userId,
                        'title' => $this->request->getVar('title'),
                        'content' => $this->request->getVar('content'),
                        'category' => $this->request->getVar('category'),
                        'Tags' => $this->request->getVar('tags'),
                        'image' => $newName,
                        'meta_description' => $this->request->getVar('meta_description'),
                        'status' => 'True',
                    ];

                   $model->save($newData);
                   return redirect()->to(base_url('dashboard'));
                }

            }else{
                $data['validation'] = $this->validator;
                return view('createBlog_view', $data);
            }
        }

        return view('createBlog_view', $data);
    }

    // View Blog
    public function viewBlog($post_id){
        $data = [
            'page_title' => 'D A S H B O A R D ',
        ];
       
        $model = new BlogModel();
        $post = $model->find($post_id);
        $data['post'] = $post;

        if (!$post) {
            // Handle the case where the post doesn't exist (e.g., show 404 error)
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Post not found');
        }
        return view('view_Blog' , $data);
    }
 
    // update Blog
    public function updateBlog($id) {
        helper(['form']);
        $userId = session()->get('id'); 
        $data = [
            'page_title' => 'D A S H B O A R D ',
        ];
        // Get the blog post data by ID to pre-fill the form and check the existing image
        $model = new BlogModel();
        $post = $model->find($id);
        $data['post'] = $post;
        if (!$post) {
            // Handle the case where the post does not exist
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog post not found');
        }
        // custom-categories
        $categories = [
            [
                'name' => 'Technology',
                'icon' => 'fas fa-solid fa-microchip'
            ],

            [
                'name' => 'Health & Fitness',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Travel',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Personal Finance',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Lifestyle',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Food & Recipes',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Parenting',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Business & Entrepreneurship',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Fashion & Beauty',
                'icon' => 'fas fa-solid fa-microchip'
            ],
            [
                'name' => 'Entertainment',
                'icon' => 'fas fa-solid fa-microchip'
            ],
        ];
        $data['categories'] = $categories;

        if ($this->request->getMethod() === 'POST') {
            // Validation rules
            $rules = [
                'title' => 'required|min_length[5]',
                'content' => 'required',
                'category' => 'required',
                'tags' => 'required',
                'meta_description' => 'required',
            ];
    
            // If a new image is uploaded, add image validation rules
            if ($this->request->getFile('image_file')->isValid()) {
                $rules['image_file'] = [
                    'rules' => 'uploaded[image_file]|max_size[image_file,2000]|ext_in[image_file,jpg]',
                    'label' => 'The IMAGE File',
                    'errors' => [
                        'uploaded' => 'Please add an image to publish your blog',
                        'max_size' => 'The image file size exceeds the allowed limit.',
                        'ext_in' => 'Only JPG images are allowed.',
                    ]
                ];
            }
    
            if ($this->validate($rules)) {
                // Get the image file if uploaded
                $imageFile = $this->request->getFile('image_file');
                $newName = null;
    
                // If the user uploaded a new image
                if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                    // Generate a new random name for the image
                    $newName = $imageFile->getRandomName();
    
                    // Move the new image to the uploads folder
                    $imageFile->move('./assets/images/uploads/posts', $newName);
                } else {
                    // If no new image, retain the old image name
                    $newName = $post['image']; // Keep the old image file name
                }
    
                // Prepare the updated data
                $updatedData = [
                    'id' => $id,
                    'user_id' => $userId, // Assuming the user is 1, replace it with dynamic user ID if needed
                    'title' => $this->request->getVar('title'),
                    'content' => $this->request->getVar('content'),
                    'category' => $this->request->getVar('category'),
                    'Tags' => $this->request->getVar('tags'),
                    'image' => $newName,  // This will be the new or old image
                    'meta_description' => $this->request->getVar('meta_description'),
                    'status' => 'True',
                ];
    
                // Update the record in the database
                // $model->save($id, $updatedData);
                $model->save($updatedData);
    
                $data['post'] = $post;
                // Redirect back to the dashboard
                return redirect()->to(base_url('dashboard'));

            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
                // return "failed";
                return view('updateBlog_view', $data);
            }
        }
    
        // If not a POST request, display the update form with existing data

        return view('updateBlog_view', $data);
    }
    
    // READ ALL BLOGS
    public function myBlogs(){
        $data = [
            'page_title' => 'D A S H B O A R D | My Blogs',
        ];
        $userId = session()->get('id'); 
        $model = new BlogModel();
        $posts = $model->where('user_id', $userId)->findAll();

        $data['posts'] =  $posts;

        return view('myBlogs_view', $data);

    }

    // DELETE BLOG
    public function deleteBlog($id){
        $model = new BlogModel();
        $post = $model->find($id);

        $model->set('status', 'False', true);
        $model->where('id', $id);
        $model->update();
        if($post){
            return redirect()->to('../dashboard/');
        }
    }

    // UPDATE PROFILE [SETTINGS]
    public function updateProfile(){

        $data = [
            'page_title' => "U P D A T E ",
        ];

        $userId = session()->get('id');
        $model = new UserModel();
        $user = $model->find($userId);
        $data['user'] = $user;
        
        helper(['form']);
       

        if($this->request->getMethod() === 'POST'){
            // let's validate data
            $rules = [
                'firstname' => 'required|min_length[3]',
                'lastname' => 'required|min_length[3]',
                'username' => 'required',
                'Email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
            ];

            // If a new image is uploaded, add image validation rules
            if ($this->request->getFile('profile_image')->isValid()) {
                $rules['profile_image'] = [
                    'rules' => 'uploaded[profile_image]|max_size[profile_image,2000]|ext_in[profile_image,jpg]',
                    'label' => 'The IMAGE File',
                    'errors' => [
                        'uploaded' => 'Please add an image to publish your blog',
                        'max_size' => 'The image file size exceeds the allowed limit.',
                        'ext_in' => 'Only JPG images are allowed.',
                    ]
                ];
            }


            // 
            if($this->validate($rules)){

                // Get the image file if uploaded
                $profile_image = $this->request->getFile('profile_image');
                $newName = null;
    
                // If the user uploaded a new image
                if ($profile_image->isValid() && !$profile_image->hasMoved()) {
                    // Generate a new random name for the image
                    $newName = $profile_image->getRandomName();
    
                    // Move the new image to the uploads folder
                    $profile_image->move('./assets/images/uploads/profile_images', $newName);
                } else {
                    // If no new image, retain the old image name
                    $newName = $user['profile_image']; // Keep the old image file name
                }

                $newData = [
                    'id' => $userId,
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
                return redirect()->to(base_url('/'));

            }else{
                $data['validation'] = $this->validator;
                return view('update_profile_view', $data);
            }

        }

        // return "<h1>welcome</h1>";
        return view('update_profile_view', $data);
    }
    // LOGOUT
    public function Logout(){
        session()->destroy();
        return redirect()->to(base_url('Auth/Login'));
    }
}

<div class="container border border-secondary shadow-sm p-3 rounded">
    <h5 class="text-center fw-semibold">U P D A T E -- B L O G 📝</h5>
    <hr>

    <!-- SERVER Message -->
    <?php if(isset($validation)): ?>
        <div class="form-group text-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form  method="post" enctype="multipart/form-data">
         <!-- Title -->
         <div class="form-group mt-3">
             <label class="fw-semibold" for="title">Blog Title</label>
             <input type="text" id="title" name="title" class="form-control" placeholder="Enter the title of your blog post" value="<?= $post['title']; ?>">
         </div>
    
         <!-- Content -->
         <div class="form-group mt-3">
             <label class="fw-semibold" for="content">Blog Content</label>
             <textarea id="content" name="content" rows="6" class="form-control" placeholder="Write your blog content here..."><?= $post['content']; ?></textarea>
         </div>  
    
             <!-- TAGS AND CATEGORIES -->
         <div class="row">
            
            <div class="col-md-6">
                <!-- Category -->
                <div class="form-group mt-3">
                    <label class="fw-semibold" for="category">Category</label>
                    <select id="category" name="category" class="form-select">
                        <option selected><?= $post['category']; ?></option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?= $category['name']; ?>" <?php echo set_select('category', $category['name'] , (old('category') == $category['name'] ? true : false)); ?>><?= $category['name']; ?></option>
                        <?php endforeach; ?>
                        <!-- Add other categories as needed -->
                    </select>
                </div>
            </div>
    
            <div class="col-md-6">
                        <!-- Tags -->
                        <div class="form-group mt-3">
                            <label class="fw-semibold" for="tags">Tags</label>
                            <input type="text" id="tags" name="tags" placeholder="e.g., CodeIgniter, PHP" class="form-control" value="<?= $post['Tags']; ?>">
                        </div>            
            </div>
    
         </div>
    
    
            <!-- Featured Image -->
         <div class="form-group mt-3">
             <label class="fw-semibold" for="image">Featured Image</label>
             <input type="file" id="image_file" name="image_file" class="form-control" placeholder="Choose an image that represents your blog post (max size 2MB)" value="<?= $post['image'];?>">
         </div>
    
            <!-- Meta Description (Optional) -->
         <div class="form-group mt-3">
             <label class="fw-semibold" for="meta_description">Meta Description (Optional)</label>
             <input type="text" id="meta_description" name="meta_description" placeholder="Short description for search engines" class="form-control" value="<?= $post['meta_description']; ?>">
         </div>
    
            <!-- Submit Button -->
         <div class="form-group mt-3">
             <button type="submit" class="btn btn-warning w-100">Update Blog</button>
         </div>
    </form>
</div>

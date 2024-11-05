<div class="container">
    <h5 class="text-center fw-semibold">My Blogs</h5>
</div>

<hr>



<div class="container-fluid">
    <div class="d-flex flex-wrap">
        <?php foreach($posts as $post): ?>
            <div class="col-md-4 mb-4">
                <div class="card p-2 mt-2 shadow-sm bg-body rounded" style="width: 20rem;">
                    <img src="../../assets/images/uploads/posts/<?= $post['image']; ?>" class="card-img-top w-50 mx-auto" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title']; ?></h5>
                        <hr>
                    </div>
                    <p class="card-text px-2"><?= $post['content']; ?></p>
                    <div class="row">
                        <div class="col-md-7">
                            <i class="fa-sharp fa-solid fa-heart" style="color: #d8133a;"></i> 50
                            <i class="fa-solid fa-comment" style="color: #FFD43B;"></i> 10
                        </div>
                        <div class="col-md-5">
                            <a href="view_Blog/<?= $post['id']; ?>" class="btn btn-primary py-0 px-3"><i class="fa-solid fa-eye"></i></a>
                            <a href="updateBlog/<?= $post['id']; ?>" class="btn btn-primary py-0 px-3"><i class="fa-regular fa-pen-to-square" style="color: #FFD43B;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

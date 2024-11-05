<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="../../assets/images/uploads/posts/<?= $post['image'];?>" alt="" style="width:160px; height:160px;">
            <div class="category">
                <h6>Category: </h6>
                <p><?= $post['category']; ?></p>
            </div>
            <div class="tags">
                <h6>Tags: </h6>
                <p><?= $post['Tags']; ?></p>
            </div>
            <div class="interactions">
                <div class="row">
                    <div class="col-md-6">
                        <h6><i class="fa-sharp fa-solid fa-heart" style="color: #d8133a;"></i>  Likes: 50</h6> 
                    </div>
                    <div class="col-md-6">
                        <h6><i class="fa-solid fa-comment" style="color: #FFD43B;"></i>  comments: 10</h6> 
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5><?= $post['title']; ?></h5>
                </div>
                <div class="card-body">
                    <p><?= $post['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
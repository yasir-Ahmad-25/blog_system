<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>


<!-- BLOG CARDS [S T A R T ] -->

<?= $this->include('./components/sub-navbar.php'); ?>

<div class="container-fluid">
    <div class="d-flex flex-wrap">
        <?php foreach($All_Posts as $post): ?>
            <div class="col-md-3 mb-4">
                <div class="card p-2 mt-2 shadow-sm bg-body rounded" style="width: 20rem;">
                    <img src="./assets/images/uploads/posts/<?= $post['image']; ?>" class="card-img-top w-50 mx-auto" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title']; ?></h5>
                        <hr>
                    </div>
                    <p class="card-text px-2"><?= $post['content']; ?></p>
                        <!-- <div class="col-md-12"> -->
                            <a href="view_Blog/<?= $post['id']; ?>" class="btn btn-primary">R E A D - M O R E 📑</a>
                        <!-- </div> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- BLOG CARDS [E N D] -->



<?= $this->endSection('content'); ?>
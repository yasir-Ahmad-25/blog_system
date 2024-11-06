<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>


<!-- BLOG PAGE [S T A R T ] -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mt-4">
            <?php if($Blog['image']): ?>
                <img src="../assets/images/uploads/posts/<?= $Blog['image']; ?>" alt="" class="rounded" width="500px" heigth="500px">
            <?php else: ?>
                    <img src="../assets/images/Blog_placeholder.jpg" alt="" class="rounded" width="500px" heigth="500px">
            <?php endif; ?>

            <div class="tags mt-5">
                <h6>Tags: </h6>
                <p><?= $Blog['Tags']; ?></p>
            </div>
        </div>

        <div class="col-md-6">
            <h2><?= $Blog['title']; ?></h2>
            <hr>
            <p style="text-align:justify;"><?= $Blog['content']; ?></p>
        </div>
    </div>
</div>
<!-- BLOG PAGE [E N D] -->



<?= $this->endSection('content'); ?>
<nav class="navbar navbar-expand-lg bg-light mt-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">categories</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

        <?php foreach($categories as $category): ?>
          <li class="nav-item d-flex mx-3">
              <i class="<?= $category['icon']; ?>" style="margin-top:12px; font-size:12px;"></i>
            <a href="../category/<?= $category['name']; ?>" class="nav-link active" aria-current="page" href="#" style="font-size:14px;"><?= $category['name']; ?></a>
          </li>
        <?php endforeach; ?>
        
      </ul>
    </div>
  </div>
</nav>




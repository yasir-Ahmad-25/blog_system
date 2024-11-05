<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./assets/images/uploads/profile_images/<?= $user['profile_image']; ?>" alt="Profile" style="width: 20px; height: 20px; margin-bottom: .2rem;">
            <?= $user['username']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="dashboard/update_profile">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
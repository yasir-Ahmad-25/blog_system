<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mx-2" href="/">B L O G 🔥</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if(session()->get('isLoggedIn')): ?>
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if($user['profile_image']): ?>
                <img src="../assets/images/uploads/profile_images/<?= $user['profile_image']; ?>" class="rounded" alt="Profile" style="width: 20px; height: 20px; margin-bottom: .2rem;">
              <?php else: ?>
                  <img src="../assets/images/user.png" class="rounded" alt="Profile" style="width: 20px; height: 20px; margin-bottom: .2rem;">
              <?php endif; ?>
              <?= $user['username']; ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      <?php else:?>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../Auth/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Auth/Login">Login</a>
          </li>
          
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
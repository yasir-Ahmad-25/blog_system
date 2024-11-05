


<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h3>Welcome back, <?= $user['username'] ?>  🔥</h3>
        </div>
        <div class="col-md-2">
            <!-- CREATE NEW BLOG [START] -->
                <a href="../dashboard/create_Blog" class="btn btn-success">  <i class="fa-solid fa-square-plus" style="color: #63E6BE;"></i> CREATE BLOG</a>
            <!-- CREATE NEW BLOG [END] -->
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xl-4 col-md-4">
        <div class="card mb-4 cardInfo">
            <div class="card-body"><h3 class="text-left" style="float: left;"><?= $Blogs ?></h3></div>
            <div class="card-footer d-flex align-items-center justify-content-between" >
                <a class="small text-dark stretched-link text-decoration-none" href="./users_Report.html">Blogs</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-4">
        <div class="card mb-4 cardInfo">
            <div class="card-body"><h3 class="text-left" style="float: left;">50</h3></div>
            <div class="card-footer d-flex align-items-center justify-content-between" >
                <a class="small text-dark stretched-link text-decoration-none" href="./users_Report.html">Trending Blogs</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-4">
        <div class="card mb-4 cardInfo">
            <div class="card-body"><h3 class="text-left" style="float: left;"><?= $Un_published_Blogs; ?></h3></div>
            <div class="card-footer d-flex align-items-center justify-content-between" >
                <a class="small text-dark stretched-link text-decoration-none" href="./users_Report.html">Drafts</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>


<!-- Recent Activity [START]-->
 <h3>Recent Activities</h3>
<table class="table table-secondary table-striped" style="border-radius:5px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">BLOG</th>
      <th scope="col">created</th>
      <th scope="col">interactions</th>
      <th scope="col">Actions</th>
    </tr>
  </thead> 
  <tbody>
    <?php foreach($Recent_Activities as $Recent_Activity): ?>
    <tr>
      <th scope="row"><?= $Recent_Activity['id']; ?></th>
      <td><?= $Recent_Activity['title']; ?></td>
      <td><?= $Recent_Activity['created_at']; ?></td>
      <td><i class="fa-sharp fa-solid fa-heart" style="color: #d8133a;"></i> 50  -- <i class="fa-solid fa-comment" style="color: #FFD43B;"></i> 10 </td> 
      <td>
          <a href="dashboard/view_Blog/<?= $Recent_Activity['id']; ?>" class="btn btn-primary">view</a>
          <a href="dashboard/updateBlog/<?= $Recent_Activity['id']; ?>" class="btn btn-warning">update</a>
          <a href="dashboard/deleteBlog/<?= $Recent_Activity['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- Recent Activity [END]-->
<hr> 
<!-- TRENDING BLOGS [START] -->
 <h3>Trending Blogs</h3>
<table class="table table-secondary table-striped" style="border-radius:5px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">BLOG</th>
      <th scope="col">created</th>
      <th scope="col">interactions</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><i class="fa-sharp fa-solid fa-heart" style="color: #d8133a;"></i> 50  -- <i class="fa-solid fa-comment" style="color: #FFD43B;"></i> 10 </td> 
      <td>
          <button class="btn btn-primary">view</button>
          <button class="btn btn-warning">update</button>
          <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
</table>

<!-- TRENDING BLOGS [ENDS] -->

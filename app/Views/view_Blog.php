<?= $this->extend('Layouts/dashboard_Layout.php'); ?>

<?= $this->section('content'); ?>


<!-- DASHBOARD [S T A R T ] -->

<div class="container-fluid">

  <div class="row">
    <div class="col-md-2">
      <!-- sidebar [ START ] -->
       <?= $this->include('components/sidebar.php'); ?>
      <!-- sidebar [ END ] -->
    </div>
    <div class="col-md-10">
      <?= $this->include('components/dashboard_navbar.php'); ?>
      
      <!-- dash-content [START]-->
       <?= $this->include('components/contents/viewBlog_content.php'); ?>
      <!-- dash-content [END]-->
    </div>
  </div>
</div>


<!-- DASHBOARD [E N D] -->



<?= $this->endSection('content'); ?>
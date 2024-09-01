<?php


require_once 'controller/selectPerfil.php';
$perfil = new selectperfil();
$perfil->select();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chaton</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/fontawesome-free-6.3.0-web/css/all.min.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- start navbar  -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

          <!-- logo navibar  -->
          <a class="sidebar-brand brand-logo" href="#">
              <h1 class="text-white">
                CHAT<span class="text-warnings">ON</span>
              </h1>
          </a>
          <a class="sidebar-brand brand-logo-mini" href="#"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          <!-- fim do logo navibar  -->
        </div>
        <?php 
                   foreach ($GLOBALS['rows'] as $key => $value) {
        ?>

        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="home.php">
              <span class="menu-icon">
                <i class="fa fa-home"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.php?id_user=<?php print $value->id_user; ?>">
              <span class="menu-icon">
                <i class="mdi mdi-message"></i>
              </span>
              <span class="menu-title">Message</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.php?id_user=<?php print $value->id_user; ?>">
              <span class="menu-icon">
                <i class="fa fa-user"></i>
              </span>
              <span class="menu-title">Eu</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.php?id_user=<?php print $value->id_user; ?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Pessoas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/search/search.php?id_user=<?php print $value->id_user; ?>">
              <span class="menu-icon">
                <i class="fa fa-search"></i>
              </span>
              <span class="menu-title">Pesquisar</span>
            </a>
          </li>

        </ul>

        <?php
            }
        ?>

      </nav>

      <!-- finich navbar  -->
      <!-- partial -->
      <div class="container-fluid  page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button  class="navbar-toggler  navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <!-- <i class="mdi mdi-file-outline text-primary"></i> -->
                      </div>
                    </div>
                    <div class="preview-item-content">
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi- text-info"></i>
                      </div>
                    </div>
                  
                  </a>
                  
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-dot-american"></i>
                </a>
              </li>

              <!-- perfil user  -->
              <li class="nav-item dropdown">

              <?php 
                   foreach ($GLOBALS['rows'] as $key => $value) {
              ?>

                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php print $value->name; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>

              <?php
                  }
              ?>

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                 
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-white"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Sair</p>
                    </div>
                  </a>
                  <!-- linha separadora  -->

                  <!-- <div class="dropdown-divider"></div> -->
        
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card bg-primarys">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/bg/istockphoto-1477990192-1024x1024__1_-removebg-preview.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- finich partial   -->

            <!-- carousel star  -->
          
            <div class="row phather">
                <div class="container-body d-flex">
                    <img class="mt-2" src="assets/images/bg/login.png" alt="">
                </div>
            </div>

        <!-- fim do carrosel  -->

        <!-- star footer      -->
         
          <footer class="footer">
            <div class="d-sm-flex  justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php  print  date('Y'); ?></span>
            </div>
          </footer>
          <!-- finich footer -->
        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php

require_once '../../controller/sendMessage.php';
$message = new message();
$message->sendMessage();
$message->selectMessage();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chaton</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.3.0-web/fontawesome-free-6.3.0-web/css/all.min.css">
  </head>
  <body>
    <div class="container-scroller">
      
     <!-- start navbar  -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

          <!-- logo navibar  -->
          <a class="sidebar-brand brand-logo" href="#">
              <h1 class="text-white">
                CHAT<span class="text-warning">ON</span>
              </h1>
          </a>
          <a class="sidebar-brand brand-logo-mini" href="#"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          <!-- fim do logo navibar  -->
        </div>

        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../home.php">
              <span class="menu-icon">
                <i class="fa fa-home"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/forms/basic_elements.php">
              <span class="menu-icon">
                <i class="mdi mdi-message"></i>
              </span>
              <span class="menu-title">Message</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/tables/basic-table.php">
              <span class="menu-icon">
                <i class="fa fa-user"></i>
              </span>
              <span class="menu-title">Eu</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/charts/chartjs.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Pessoas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../search/search.php">
              <span class="menu-icon">
                <i class="fa fa-search"></i>
              </span>
              <span class="menu-title">Pesquisar</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          
            <!-- start perfil  -->

            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">

                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                   
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

            <!-- finich perfil  -->

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
           
          <div class="card-user">

            <?php 

              foreach ($GLOBALS['rows'] as $key => $value) {

            ?>
                <div class="container">
                    <div class="send d-flex">
                      <img class="circle" src="../../assets/images/faces/face2.jpg" alt="">
                      <h6 class="mt-3 ml-1"><?php print $value->name; ?></h6>
                    </div>
                    <div class="message">
                        <p class="m-1 text"><?php print $value->message; ?></p>
                    </div>
                    <div class="time">
                       <h6 class="ml-2">
                          <?php print $value->create_at; ?>
                       </h6>
                    </div>
                </div>
          <?php
            }
          ?>

             
          </div>  
          </div>

          <div class="card-sms">
              <div class="card-message">
                 <form action="" class="d-flex" method="post">
                  <div class="space"></div>
                    <textarea class="sms mt-2" name="message" id="" required></textarea>
                    <button class="btn-type" type="submit" name="send">
                        <i class="fa fa-location-arrow mt-3 mr-3"></i>
                    </button>
                 </form>
              </div>
          </div>


          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- <footer class="footer mt-5">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="../../assets/js/scroll.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php

require_once 'controller/loginController.php';
$login = new userLogin();
$login->login();

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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/fontawesome-free-6.3.0-web/css/all.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
       

          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth bg bg-secondary">
            <div class="card col-lg-4 mx-auto">
                
              <!-- alert  -->
                      
              <?php 
                

                if ($_SESSION['error'] == false) { ?>
              
              <div class="alert alert-danger mt-3 alert-left-bordered border-danger alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
                <i class="gd-alert icon-text text-danger mr-2"></i>
                <p class="mb-0 ">
                  Email ou Password inválida 
                </p>
                <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                  <i class="fa fa-close icon-text icon-text-xs" aria-hidden="true"></i>
                </button>
              </div>
                <?php  }	?>


              <div class="card-body ">
                <h2 class="text-white">
                  CHAT<span class="text-warnings">ON</span>
                </h2>

                <form class="mt-5" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                  <div class="form-group">
                    <label class="text-white">Email</label>
                    <input type="email" name="email" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label class="text-white">Password </label>
                    <input type="password" name="password" class="form-control p_input" required>
                  </div>
                  <div class="text-center mt-5">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Entrar</button>
                  </div>
                  
                  <p class="sign-up ml-2 text-white">Não tem uma conta?<a href="pages/samples/register.php">Criar</a></p>
                </form>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- endinject -->
  </body>
</html>
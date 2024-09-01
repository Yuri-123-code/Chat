<?php

  require_once '../../controller/insertController.php';
  $store = new insert();
  $store->store();
  

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
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth bg bg-secondary">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
              <?php 
                

                if ($_SESSION['error'] == false) { ?>
              
              <div class="alert alert-danger mt-3 alert-left-bordered border-danger alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
                <i class="gd-alert icon-text text-danger mr-2"></i>
                <p class="mb-0 ">
                   Verifica os seus dados! 
                </p>
                <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                  <i class="fa fa-close icon-text icon-text-xs" aria-hidden="true"></i>
                </button>
              </div>
                <?php  }	?>
             
                <h1 class="text-white mb-4">
                  CHAT<span class="text-warning">ON</span>
                </h1>
                <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Género</label>
                    <select name="genero" class="form-control" id="" required>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Outros</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Confirmar Password</label>
                    <input type="password" name="password_conf" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Telefone</label>
                    <input type="number" name="phone_number" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Imagem</label>
                    <input type="file" class="form-control p_input">
                  </div>
                  <div class="text-center mt-5">
                    <button type="submit" name="create" class="btn btn-primary btn-block enter-btn">Criar Conta</button>
                  </div>
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
    <!-- endinject -->
  </body>
</html>
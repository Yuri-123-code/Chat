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
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.3.0-web/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class=" container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
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
         
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-white"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Definições</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
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
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="fa fa-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">

                <div class="card-form">

                    <div class="settings-text d-flex mt-2">

                        <div class="arounds">
                             <i class="mdi mdi-settings "></i>
                        </div>
                        <h4 class="text-white ml-2 mt-2">
                            Definições/<span class="text-cheng">Mudar perfil</span>
                        </h4>
                        
                    </div>

                   <div class="settings">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label class="text-secondary" for="name">Nome</label>
                                <input type="text" class="form-control" value="" id="name" name="name" placeholder="Nome">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="text-secondary" for="email">Email</label>
                                <input type="email" class="form-control" value="" id="email" name="email" placeholder="nome@gmail.com">
                            </div>
                        </div>
                        <div class="form-row">
                           
                            <div class="form-group col-12 col-md-4">
                                <label for="old_password" class="text-secondary">Nova Password</label>
                                <input type="password" class="form-control" value="" id="password" name="password" placeholder="Nova Password">
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label for="password" class="text-secondary">Confirmar Password</label>
                                <input type="password" class="form-control" value="" id="password" name="password_confirm" placeholder="Confirmar Password">
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label for="password_confirm" class="text-white">Telefone</label>
                                <input type="number" class="form-control" value="" id="password" name="phone" placeholder="+244">
                            </div>
                        </div>

                        <div class="form-row">
                           
                            <div class="form-group col-12 col-md-4">
                                <label class="text-secondary" for="old_password">Foto</label>
                                <input type="file" class="bgs form-control" value="" name="file" required>
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label class="text-secondary">Genero</label>
                                <select class="form-control" name="genero" id="">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="O">Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label class="text-secondary">Data de Nascimento</label>
                                <input type="date" class="form-control" value="" id="password_confirm" name="password_confirm" placeholder="Repeat New Password">
                            </div>
                        </div>
                        <div class="">
                            <label class="text-secondary">Biografia</label>
                            <textarea class="form-control" name="bio" id="" placeholder="Biografia..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-left mt-3">Atualizar</button>
                    </form>

                    <!-- delete conta  -->

                    <button type="button" class="btn mt-3 bg-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Deletar Conta
                    </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content bg bg-white b-none">
                              <div class="modal-header b-none">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p>
                                    Você deseja deletar esta conta? 
                                  </p>
                              </div>
                              <div class="modal-footer b-none">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar </button>

                                <form action="">

                                  <button type="submit" class="btn btn-primary">
                                    Confirmar
                                  </button>
                                    
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                   </div>

                </div>
                
            </div>    
          </div>
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
      </div>
    </div>
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
    <script src="../../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
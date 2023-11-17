
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Editar Prestamos</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/usb.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="../assets/logo.png" alt="logo" width="200" />
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
         
          <ul class="menu-inner py-1">
            <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Account Settings">Cuenta</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="profile.html" class="menu-link">
                    <div data-i18n="Account">Mi cuenta</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Editar Prestamos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="prestamos.php" class="menu-link">
                    <div data-i18n="Vertical Form">Lista</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Busqueda</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <h4 class="fw-bold"> PRESTAMOS DE EQUIPOS Y AMBIENTES</h4>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
         

              <ul class="navbar-nav flex-row align-items-center ms-auto">
         
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img.jpeg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img.jpeg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Salir</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <div class="card p-4">
                  <h5 class="card-header">Nuevo Prestamos</h5>
                  <form id="newForm" method="post" action="controllers/adicionar_controller.php" class="bootstrap-form">
    <div class="form-group">
        <label for="materia">Materia</label>
        <input type="text" class="form-control" id="materia" name="materia" required>
    </div>
    <div class="form-group">
        <label for="docente">Docente</label>
        <input type="text" class="form-control" id="docente" name="docente" required>
    </div>
    <div class="form-group">
        <label for="entregadoPor">Entregado Por</label>
        <input type="text" class="form-control" id="entregadoPor" name="entregadoPor" required>
    </div>
    <div class="form-group">
        <label for="fechaHora">Fecha y Hora</label>
        <input type="datetime-local" class="form-control" id="fechaHora" name="fechaHora" required>
    </div>
    <div class="form-group">
        <label for="equipo">Equipo</label>
        <select class="form-control" id="equipo" name="equipo" required>
            <?php
            require 'controllers/connection.php';
            $sql_equipo = "SELECT id_equipo, nombre_equipo FROM equipo";
            $result_equipo = $conn->query($sql_equipo);
            while ($row_equipo = $result_equipo->fetch_assoc()) {
                echo "<option value='" . $row_equipo['id_equipo'] . "'>" . $row_equipo['nombre_equipo'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="ambiente">Ambiente</label>
        <select class="form-control" id="ambiente" name="ambiente" required>
            <?php
            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }
            $sql_ambiente = "SELECT id_ambiente, nombre_ambiente FROM ambiente";
            $result_ambiente = $conn->query($sql_ambiente);
            while ($row_ambiente = $result_ambiente->fetch_assoc()) {
                echo "<option value='" . $row_ambiente['id_ambiente'] . "'>" . $row_ambiente['nombre_ambiente'] . "</option>";
            }
            $conn->close();
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select class="form-control" id="carrera" name="carrera" required>
            <option value="Ingeniería de Sistemas">Ingeniería Sistemas</option>
            <option value="Psicomotricidad">Psicomotricidad</option>
            <option value="Derecho">Derecho</option>
            <option value="Gastronomía">Gastronomía</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success mt-3">Agregar Formulario</button>
</form>


              </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Hecho ❤️ por
                  <a href="" target="_blank" class="footer-link fw-medium"> Ing Sistemas</a>
                </div>
                
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>

  </html>

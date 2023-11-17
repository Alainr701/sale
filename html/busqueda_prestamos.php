<?php
require 'controllers/connection.php';

// Verifica si se ha enviado un parámetro de búsqueda por fecha
if (isset($_GET['fecha']) && !empty($_GET['fecha'])) {
    $fecha = $_GET['fecha'];
    $sql = "SELECT f.id_formulario, f.fecha_hora, f.asignatura, f.dato_docente, e.nombre_equipo, a.nombre_ambiente, f.carrera 
            FROM formulario f 
            LEFT JOIN equipo e ON f.equipo = e.id_equipo 
            LEFT JOIN ambiente a ON f.ambiente = a.id_ambiente
            WHERE DATE(f.fecha_hora) = '$fecha'";
} else {
    // Si no hay parámetro de búsqueda, muestra todos los resultados
    $sql = "SELECT f.id_formulario, f.fecha_hora, f.asignatura, f.dato_docente, e.nombre_equipo, a.nombre_ambiente, f.carrera 
            FROM formulario f 
            LEFT JOIN equipo e ON f.equipo = e.id_equipo 
            LEFT JOIN ambiente a ON f.ambiente = a.id_ambiente";
}

$result = $conn->query($sql);
?>

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

    <title>Prestamos</title>

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
                  <a href="profile.php" class="menu-link">
                    <div data-i18n="Account">Mi cuenta</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Prestamos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="prestamos.php" class="menu-link">
                    <div data-i18n="Vertical Form">Lista</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="busqueda_prestamos.php" class="menu-link">
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
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
                      <a class="dropdown-item" href="index.php">
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

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
     
    <div class="row mb-3">
        <div class="col-6">
            <form action="busqueda_prestamos.php" method="GET" class="form-inline">
                <div class="input-group">
                    <input type="date" name="fecha" class="form-control" placeholder="Buscar por fecha">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <a href="" class="btn btn-primary float-end">Generar Pdf</a>
        </div>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Hora</th>
                    <th>Materia</th>
                    <th>Docente</th>
                    <th>Equipo</th>
                    <th>Ambiente</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Mostrar datos de la base de datos
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id_formulario"] . "</td>
                            <td>" . $row["fecha_hora"] . "</td>
                            <td>" . $row["asignatura"] . "</td>
                            <td>" . $row["dato_docente"] . "</td>
                            <td>" . $row["nombre_equipo"] . "</td>
                            <td>" . $row["nombre_ambiente"] . "</td>
                            <td>" . $row["carrera"] . "</td>
                            <td>
                                <div class='dropdown'>
                                    <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='editar_prestamos.php?id=" . $row["id_formulario"] ."'>
                                            <i class='bx bx-edit-alt me-1'></i> Editar
                                        </a>
                                        <a class='dropdown-item' href='controllers/eliminar_controller.php?id=" . $row["id_formulario"] ."'>
                                            <i class='bx bx-trash me-1'></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No se encontraron resultados para la búsqueda.</td></tr>";
            }
            ?>
            </tbody>
        </table>
   
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

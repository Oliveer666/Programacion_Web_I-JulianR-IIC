<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Practica Casa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <link href="css/album.css" rel="stylesheet">
  </head>
  <body>
<header data-bs-theme="dark">
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="Index.html" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
        </svg>
        <strong>INICIO</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
  
    <div class="collapse text-bg-dark" id="navbarHeader">
        <div class="container">
            <footer class="py-3">
            <div class="nav justify-content-center border-bottom pb-1 mb-1">
            <div class="col-sm-8 col-md-6 py-4">
                <h4>Acerca de</h4>
                <p class="text-body-secondary text-justify">En este espacio, te ofrezco la oportunidad de participar en el desarrollo y realización de talleres prácticos. Mi objetivo es proporcionarte las herramientas necesarias para que puedas utilizar el código con total libertad y confianza.</p>
            </div>

            <div class="col-sm-1"></div>
            
            <div class="col-6 col-md-2 mb-3">
                <div class="footer-widget-heading">
                    <h5>MASCOTAS</h5>
                </div>
                <div class="footer-widget">
                <ul>
                        <li class="nav-item mb-2"><a href="Mascotas_Index.html" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                        <li class="nav-item mb-2"><a href="Mascotas_Insert.html" class="nav-link p-0 text-body-secondary">Insertar</a></li>
                        <li class="nav-item mb-2"><a href="Mascotas_Update.html" class="nav-link p-0 text-body-secondary">Actualizar</a></li>
                        <li class="nav-item mb-2"><a href="Mascotas_Delete.html" class="nav-link p-0 text-body-secondary">Eliminar</a></li>
                        <li class="nav-item mb-2"><a href="Mascotas_Select.php" class="nav-link p-0 text-body-secondary">Mostrar</a></li>
                        <li class="nav-item mb-2"><a href="Mascotas_Filter.php" class="nav-link p-0 text-body-secondary">Filtrar</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <div class="footer-widget-heading">
                    <h5>ASISTENCIAS</h5>
                </div>
                <div class="footer-widget">
                    <ul>
                        <li class="nav-item mb-2"><a href="Asistencias_Index.html" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                        <li class="nav-item mb-2"><a href="Asistencias_Insert.php" class="nav-link p-0 text-body-secondary">Insertar</a></li>
                        <li class="nav-item mb-2"><a href="Asistencias_Update.php" class="nav-link p-0 text-body-secondary">Actualizar</a></li>
                        <li class="nav-item mb-2"><a href="Asistencias_Delete.html" class="nav-link p-0 text-body-secondary">Eliminar</a></li>
                        <li class="nav-item mb-2"><a href="Asistencias_Select.php" class="nav-link p-0 text-body-secondary">Mostrar</a></li>
                        <li class="nav-item mb-2"><a href="Asistencias_Filter.php" class="nav-link p-0 text-body-secondary">Filtrar</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"></div>
        </div>
    </div>
</header>

<main>

    <section class="py-2 text-center container">
        <div class="row py-lg-3">
            <div class="col-lg-50 col-md-15 mx-auto">
                <h1 class="fw-light">TABLA ASISTENCIA A CLASE</h1>
            </div>
        </div>
        <?php 
        require "config/conexion.php";

        $sql = "SELECT cod, fecha_sys, nombre_estudiante, semestre
        FROM asistencia_clases
        WHERE 1";
        #ORDER BY nombre_estudiante ASC";

        print "<table style class='table table-bordered table-striped'>
            <tr>
                <td>Cod</td>
                <td>Fecha Sys</td>
                <td>Nombre Estudiante</td>
                <td>Semestre</td>
            </tr>";

        foreach($dbh->query($sql) as $row){
            print "
            <tr>
                <td>".$row['cod']."</td>
                <td>".$row['fecha_sys']."</td>
                <td>".$row['nombre_estudiante']."</td>
                <td>".$row['semestre']."</td>
            </tr>
            ";
        }
        print "</table";
        ?>
    </section>

</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

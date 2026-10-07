<?php
  $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="assets/images/favicon.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lib Laboratorios | Tu laboratorio de confianza</title>
      <meta name="description" content="Lib Laboratorios, análisis clínicos de rutina, alta y gran especialidad en Veracruz.">

      <link href="assets/lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">       
      <link href="assets/lib/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
      <link href="assets/lib/sweetAlert2/sweetalert2.min.css" rel="stylesheet" />
      <link href="assets/css/styles.css?<?= $time; ?>" rel="stylesheet" />
  </head>
  <body class="bg-light d-flex flex-column min-vh-100">

      <?php require "menu.php"; ?>

      <!-- Contenido principal centrado vertical y horizontalmente -->
      <main class="flex-grow-1 d-flex align-items-center justify-content-center py-5 mt-5">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-7 col-xl-6">
                      
                      <!-- Tarjeta de Error 404 -->
                      <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center p-4 p-sm-5 bg-white">
                          
                          <!-- Logo -->
                          <div class="mb-3 d-flex justify-content-center">
                              <img src="/assets/images/favicon.png" class="img-fluid" style="max-height: 75px; object-fit: contain;" alt="Lib Laboratorios">
                          </div>

                          <!-- Número 404 destacado -->
                          <div class="display-1 fw-bold text-primary lh-1 mb-2" style="font-size: clamp(4rem, 10vw, 6.5rem);">
                              404
                          </div>

                          <!-- Subtítulo / Encabezado de Error -->
                          <h1 class="h4 fw-bold text-magenta2 mb-3">
                              ¡Lo sentimos! Esa página no se puede encontrar
                          </h1>

                          <!-- Mensaje descriptivo -->
                          <p class="text-muted fs-6 mb-4 px-lg-3">
                              Parece que no se ha encontrado nada en esta ubicación. Verifica la dirección o regresa a nuestra página principal.
                          </p>

                          <!-- Botón de acción -->
                          <div class="d-flex justify-content-center gap-2">
                              <a href="https://www.lib-laboratorios.com/" class="btn btn-primary btn-lg rounded-3 px-4 py-2 fw-semibold shadow-sm button-per d-inline-flex align-items-center gap-2">
                                  <i class="bi bi-house-door-fill"></i> Ir al Inicio
                              </a>
                          </div>

                      </div>

                  </div>
              </div>
          </div>
      </main>

      <?php require "footer.php"; ?>

      <script src="assets/lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
      <script src="assets/lib/jquery-3.7.1.min.js"></script>
      <script src="assets/lib/sweetAlert2/sweetalert2.min.js"></script>
      <script src="assets/js/Sucursales.js?<?= $time; ?>"></script>
      <script src="assets/js/Modals.js?<?= $time; ?>"></script>

  </body>
</html>
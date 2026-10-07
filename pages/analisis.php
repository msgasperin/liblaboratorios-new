<?php
  $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="/assets/images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lib Laboratorios | Análisis Clínicos y Estudios de Especialidad</title>
      <meta name="description" content="Más de 10,000 análisis clínicos de rutina, alta y gran especialidad con tecnología de vanguardia y resultados en línea.">

      <link href="/assets/lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">      
      <link href="/assets/lib/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
      <link href="/assets/lib/sweetAlert2/sweetalert2.min.css" rel="stylesheet" />
      <link href="/assets/css/styles.css?<?= $time; ?>" rel="stylesheet" />
      <link href="/assets/css/styles_secciones.css?<?= $time; ?>" rel="stylesheet" />
   </head>

  <?php require_once("../menu.php"); ?>

  <body class="bg-light">

    <!-- Header / Banner de Sección -->
    <div class="container-fluid bg-white text-dark py-5 shadow-sm border-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-7 col-sm-12 text-center text-md-start mb-4 mb-md-0">
            <span class="badge badge-lib-accent px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Laboratorio de Diagnóstico</span>
            <h1 class="display-4 fw-bold mb-2 text-lib-primary">Análisis Clínicos</h1>
            <p class="lead text-muted mb-0">Estudios de rutina, alta y gran especialidad con los más estrictos controles de calidad y tecnología vanguardista.</p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 text-center text-md-end">
            <a href="https://wa.me/+522711699574?text=Hola,%20me%20gustaría%20agendar/cotizar%20un%20estudio%20de%20análisis%20clínicos" class="btn btn-whatsapp btn-lg px-4 py-3 rounded-3 shadow-sm d-inline-flex align-items-center text-start" target="_blank">
              <i class="bi bi-whatsapp fs-2 me-3"></i>
              <div>
                <span class="d-block fw-bold fs-6">Informes y Cotizaciones</span>
                <small class="fw-normal opacity-90">271 169 95 74</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Presentación e Información General -->
    <div class="container py-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-5 col-md-12">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="/assets/images/seccion/analisis/intro.webp" class="img-fluid w-100" style="object-fit: cover; min-height: 320px;" alt="Análisis Clínicos Lib Laboratorios">
          </div>
        </div>
        <div class="col-lg-7 col-md-12">
          <h2 class="text-lib-primary fw-bold mb-3">Líderes en Diagnóstico Clínico y Especialidad</h2>
          <p class="text-secondary fs-6 mb-3">
            Contamos con más de <strong>10,000 estudios clínicos</strong> de rutina, alta y gran especialidad. Nuestro centro de especialidades es uno de los mejores del país gracias a que la tecnología y los especialistas con los que contamos son los más vanguardistas en calidad y servicio.
          </p>
          <p class="text-secondary fs-6 mb-3">
            Nuestro estricto control de calidad y los filtros de revisión de resultados son procesos únicos que nos han valido reconocimientos y premiaciones a nivel estatal y nacional.
          </p>
          <div class="p-3 bg-white rounded-3 shadow-sm border-start border-4 border-primary">
            <p class="mb-0 text-muted small">
              <i class="bi bi-laptop text-lib-accent fs-5 me-2 align-middle"></i>
              <strong>Consulta en línea:</strong> Ahora todos tus resultados puedes consultarlos rápidamente desde tu computadora o teléfono celular.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Áreas de Especialización -->
    <div class="bg-white py-5 border-top border-bottom">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col-12">
            <span class="badge badge-lib-accent px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Cobertura Integral</span>
            <h3 class="text-lib-primary fw-bold">Áreas de Especialidad Clínica</h3>
            <div class="mx-auto separator-line my-3"></div>
            <p class="text-muted fs-6">Ventajas competitivas respaldadas por infraestructura analítica de primera línea.</p>
          </div>
        </div>

        <div class="row g-3 text-center">
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-droplet-half fs-2 text-danger mb-2"></i>
              <span class="fw-bold text-dark small">Hematología</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-virus fs-2 text-warning mb-2"></i>
              <span class="fw-bold text-dark small">Anatomopatología</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-bug fs-2 text-success mb-2"></i>
              <span class="fw-bold text-dark small">Bacteriología</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-beaker fs-2 text-primary mb-2"></i>
              <span class="fw-bold text-dark small">Uroanálisis</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-tsunami fs-2 text-info mb-2"></i>
              <span class="fw-bold text-dark small">Parasitología</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-shield-check fs-2 text-secondary mb-2"></i>
              <span class="fw-bold text-dark small">Serología</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-journal-medical fs-2 text-danger mb-2"></i>
              <span class="fw-bold text-dark small">Inmunología</span>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-patch-check-fill fs-2 text-success mb-2"></i>
              <span class="fw-bold text-dark small">Control de Calidad</span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex align-items-center justify-content-center">
              <i class="bi bi-bounding-box-circles fs-2 text-primary me-3"></i>
              <span class="fw-bold text-dark small">Pruebas Especiales y de Alta Especialidad</span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="p-3 bg-light rounded-3 shadow-sm h-100 d-flex align-items-center justify-content-center">
              <i class="bi bi-radioactive fs-2 text-warning me-3"></i>
              <span class="fw-bold text-dark small">Química Clínica 1 y 2</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Catálogo de Estudios y Perfiles -->
    <div id="servicios" class="container py-5">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2 class="text-lib-primary fw-bold">Catálogo de Perfiles y Diagnósticos</h2>
          <div class="mx-auto separator-line my-3"></div>
          <p class="text-muted fs-6">Diseñados para responder a las necesidades preventivas y clínicas más exigentes.</p>
        </div>
      </div>

      <div class="row g-4">

        <!-- Check Ups -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3 text-primary">
                  <i class="bi bi-activity fs-2"></i>
                </div>
                <h4 class="card-title fw-bold text-lib-primary mb-3">Check Ups</h4>
                <ul class="list-unstyled text-secondary small mb-0">
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Anuales LIB</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Tiroideo y autoinmunes</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Electro + grasas</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Básico mixto</li>
                  <li class="text-muted fst-italic mt-2"><i class="bi bi-plus-circle me-1"></i>Más de 100 opciones disponibles</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Perfiles -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3 text-success">
                  <i class="bi bi-intersect fs-2"></i>
                </div>
                <h4 class="card-title fw-bold text-lib-primary mb-3">Perfiles Específicos</h4>
                <ul class="list-unstyled text-secondary small mb-0">
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Drogas en suero</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Perfil de Lípidos</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Perfil de Hierro</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Perfil Lupus</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Enfermedades de Transmisión Sexual (ETS)</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Epstein Barr</li>
                  <li class="text-muted fst-italic mt-2"><i class="bi bi-plus-circle me-1"></i>Más de 100 perfiles especializados</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Antígenos y Marcadores Tumorales -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3 text-danger">
                  <i class="bi bi-dna fs-2"></i>
                </div>
                <h4 class="card-title fw-bold text-lib-primary mb-3">Marcadores Tumorales</h4>
                <ul class="list-unstyled text-secondary small mb-0">
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>CA 125, CA 15-3, CA 19-9</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>CA 27-29 y CA 72-4</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Antígeno Antinuclear / HLA-B27</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Antígeno Carcinoembrionario (CEA)</li>
                  <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-2"></i>Antígeno Prostático Específico (PSA)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Estudios Integrales -->
        <div class="col-md-6 col-lg-6">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-4 bg-white">
            <div class="card-body p-0">
              <div class="d-flex align-items-center mb-3">
                <i class="bi bi-layers-fill fs-2 text-warning me-3"></i>
                <h4 class="card-title fw-bold text-lib-primary mb-0">Estudios Integrales</h4>
              </div>
              <p class="text-secondary small mb-0">
                Paquetes desde 10 hasta 45 elementos bioquímicos, incluyendo biometría hemática completa con diferencial y examen general de orina analizado de forma automatizada y microscópica.
              </p>
            </div>
          </div>
        </div>

        <!-- Amplia Cobertura -->
        <div class="col-md-6 col-lg-6">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-4 bg-white">
            <div class="card-body p-0">
              <div class="d-flex align-items-center mb-3">
                <i class="bi bi-hospital fs-2 text-info me-3"></i>
                <h4 class="card-title fw-bold text-lib-primary mb-0">Capacidad Analítica</h4>
              </div>
              <p class="text-secondary small mb-0">
                Más de <strong>15,000 estudios clínicos</strong> procesados con tecnología robótica y reactivos de máxima sensibilidad, consolidándonos como el laboratorio más completo de la región.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Nota Médica Informativa -->
    <div class="container pb-5">
      <div class="card border-0 bg-white shadow-sm rounded-4 p-4 border-start border-4 border-warning">
        <div class="d-flex align-items-center">
          <i class="bi bi-heart-pulse-fill text-warning fs-1 me-3"></i>
          <div>
            <h5 class="fw-bold text-lib-primary mb-1">Aviso Importante a Nuestros Pacientes</h5>
            <p class="text-muted small mb-0">
              Recuerda que tu médico de confianza es el único especialista capacitado para recomendarte los estudios apropiados de acuerdo a tus antecedentes, así como para la interpretación clínica de los resultados obtenidos.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- JS REQUERIDOS -->
    <script src="/assets/lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/jquery-3.7.1.min.js"></script>
    <script src="/assets/lib/sweetAlert2/sweetalert2.min.js"></script>
    <script src="/assets/js/Sucursales.js?<?= $time; ?>"></script>
    <script src="/assets/js/Modals.js?<?= $time; ?>"></script>

    <?php require('../footer.php'); ?> 

  </body>
</html>
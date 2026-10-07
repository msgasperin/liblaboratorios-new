<?php
  $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="/assets/images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lib Laboratorios | Imagen Digital Rayos X</title>
      <meta name="description" content="Diagnóstico preciso con tecnología avanzada, óptima calidad de imagen y mínima exposición a la radiación en Córdoba y Veracruz.">

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
            <span class="badge badge-lib-accent px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Imagenología de Alta Resolución</span>
            <h1 class="display-4 fw-bold mb-2 text-lib-primary">Imagen Digital Rayos X</h1>
            <p class="lead text-muted mb-0">Diagnóstico preciso con tecnología avanzada, óptima calidad de imagen y mínima exposición a la radiación.</p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 text-center text-md-end">
            <a href="https://wa.me/+522711699574?text=Hola,%20estoy%20interesado%20en%20un%20estudio%20de%20Rayos%20X" class="btn btn-whatsapp btn-lg px-4 py-3 rounded-3 shadow-sm d-inline-flex align-items-center text-start" target="_blank">
              <i class="bi bi-whatsapp fs-2 me-3"></i>
              <div>
                <span class="d-block fw-bold fs-6">Haz tu cita en sucursales</span>
                <small class="fw-normal opacity-90">271 169 95 74</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- SECCIÓN DE PAQUETES Y TARIFAS -->
    <div id="paquetes" class="container py-5">
      <div class="row mb-4 text-center">
        <div class="col-12">
          <h2 class="text-lib-primary fw-bold">Paquetes Integrales con Rayos X</h2>
          <div class="mx-auto separator-line my-3"></div>
          <p class="text-muted fs-6">Combinaciones estratégicas de radiografía y estudios de laboratorio para una valoración completa.</p>
        </div>
      </div>

      <div class="row g-4">

        <!-- Card 1: Paquete Tórax y Corazón -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-2 bg-white">
            <div class="p-2">
              <img src="/assets/images/seccion/rayos_x/img1.webp" class="img-fluid rounded-3 w-100 mb-3" alt="Paquete Tórax y Corazón" style="height: 200px; object-fit: cover;">
            </div>
            <div class="card-body d-flex flex-column justify-content-between pt-0">
              <div>
                <h5 class="fw-bold text-lib-primary mb-3">Paquete Tórax y Corazón</h5>
                <ul class="list-unstyled text-secondary small text-start mb-0">
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Electrocardiograma</li>
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Radiografía de Tórax AP y Lateral</li>
                </ul>
              </div>
              <div class="text-end mt-3 border-top pt-2">
                <span class="fs-3 text-lib-primary fw-bold">$790 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Paquete Cardiopulmonar -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-2 bg-white">
            <div class="p-2">
              <img src="/assets/images/seccion/rayos_x/pulmonar.webp" class="img-fluid rounded-3 w-100 mb-3" alt="Paquete Cardiopulmonar" style="height: 200px; object-fit: cover;">
            </div>
            <div class="card-body d-flex flex-column justify-content-between pt-0">
              <div>
                <h5 class="fw-bold text-lib-primary mb-3">Paquete Cardiopulmonar</h5>
                <ul class="list-unstyled text-secondary small text-start mb-0">
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Rayos X Tórax AP y Lateral</li>
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Electrocardiograma</li>
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Glucosa, Colesterol y Química Sanguínea de 15 elementos</li>
                </ul>
              </div>
              <div class="text-end mt-3 border-top pt-2">
                <span class="fs-3 text-lib-primary fw-bold">$1,490 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: Paquete Osteometabólico -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm border-0 rounded-4 p-2 bg-white">
            <div class="p-2">
              <img src="/assets/images/seccion/rayos_x/osteometabolico.webp?<?= $time; ?>" class="img-fluid rounded-3 w-100 mb-3" alt="Paquete Osteometabólico" style="height: 200px; object-fit: cover;">
            </div>
            <div class="card-body d-flex flex-column justify-content-between pt-0">
              <div>
                <h5 class="fw-bold text-lib-primary mb-3">Paquete Osteometabólico</h5>
                <ul class="list-unstyled text-secondary small text-start mb-0">
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Densitometría Ósea DXA</li>
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Rayos X Columna Lumbar</li>
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Calcio sérico, Fósforo, Vitamina D</li>
                  <li class="mb-2"><i class="bi bi-record-circle-fill text-lib-accent me-2"></i>Química Sanguínea de 10 elementos</li>
                </ul>
              </div>
              <div class="text-end mt-3 border-top pt-2">
                <span class="fs-3 text-lib-primary fw-bold">$1,590 MXN</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- SECCIÓN DE VENTAJAS Y RESPALDO MÉDICO -->
    <div id="tecnologia" class="bg-white py-5 border-top border-bottom">
      <div class="container">
        <div class="row mb-4 text-center">
          <div class="col-12">
            <h2 class="text-lib-primary fw-bold">¿Por qué realizar tu estudio en LIB LABORATORIOS?</h2>
            <div class="mx-auto separator-line my-3"></div>
            <p class="text-muted fs-6">Seguridad, precisión de diagnóstico y tecnología digital al servicio de tu bienestar.</p>
          </div>
        </div>

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 offset-lg-2 text-center">
            <span class="badge badge-lib-accent px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Seguridad y Claridad Diagnóstica</span>
            <h3 class="fw-bold text-dark mb-3 fs-4">Diagnóstico Preciso con Protección Radiológica</h3>

            <div class="card border-0 bg-light p-4 mb-3 rounded-4 text-start shadow-sm border-start border-4 border-primary">
              <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <h6 class="fw-bold text-lib-primary mb-2"><i class="bi bi-cpu me-2"></i>Innovación Tecnológica</h6>
                  <ul class="list-unstyled text-secondary small mb-0">
                    <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-1"></i><strong>40% menos dosis de radiación</strong> en comparación con equipos convencionales.</li>
                    <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-1"></i>Máxima eficiencia en contraste y detalle estructural.</li>
                    <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-1"></i>Función <em>IStich Panorámica</em> para estudios de columna completa y extremidades.</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h6 class="fw-bold text-lib-primary mb-2"><i class="bi bi-shield-check me-2"></i>Calidad Certificada</h6>
                  <ul class="list-unstyled text-secondary small mb-0">
                    <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-1"></i>Cumplimiento con normativas COFEPRIS e ISO 9001:2015.</li>
                    <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-1"></i>Personal técnico radiólogo certificado y capacitado.</li>
                    <li class="mb-2"><i class="bi bi-check2 text-lib-accent me-1"></i>Sistemas de protección y colimación de máxima seguridad.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Experiencia y Ventajas del Servicio -->
        <div class="row g-4">
          <!-- Ventajas Principales -->
          <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
              <div class="card-header bg-lib-primary text-white fw-bold py-3">
                <i class="bi bi-check-circle-fill me-2"></i>Ventajas de Nuestro Servicio
              </div>
              <div class="card-body p-4">
                <ul class="list-unstyled text-secondary fs-6 mb-0">
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-camera-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div>
                      <strong>Sistema Digital Directo (DR/CR):</strong> Imágenes instantáneas de ultra alta definición sin sobreexposición.
                    </div>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-person-badge-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div>
                      <strong>Interpretación Médica Profesional:</strong> Reporte oportuno elaborado por médicos radiólogos certificados.
                    </div>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-laptop-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div>
                      <strong>Entrega Digital Segura:</strong> Acceso a tus estudios e interpretación vía portal web para ti y tu médico tratante.
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <i class="bi bi-heart-pulse-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div>
                      <strong>Atención Humanizada:</strong> Acompañamiento cercano durante todo tu procedimiento.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Alcance del Diagnóstico Radiográfico -->
          <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
              <div class="card-header bg-lib-primary text-white fw-bold py-3">
                <i class="bi bi-file-earmark-medical-fill me-2"></i>¿Qué Permite Detectar un Rayos X?
              </div>
              <div class="card-body p-4">
                <p class="text-secondary small mb-3">
                  Los estudios radiográficos permiten visualizar detalladamente las estructuras internas del cuerpo —como huesos, articulaciones, tejido pulmonar y cavidad abdominal— facilitando la detección de:
                </p>
                <ul class="list-unstyled text-secondary small mb-0">
                  <li class="mb-2"><i class="bi bi-dot text-lib-accent fs-4 align-middle"></i>Fracturas, fisuras óseas y desgaste articular (artrosis).</li>
                  <li class="mb-2"><i class="bi bi-dot text-lib-accent fs-4 align-middle"></i>Infecciones pulmonares (neumonía, bronquitis) y problemas respiratorios.</li>
                  <li class="mb-2"><i class="bi bi-dot text-lib-accent fs-4 align-middle"></i>Alteraciones digestivas, intestinales y cálculos renales.</li>
                  <li class="mb-2"><i class="bi bi-dot text-lib-accent fs-4 align-middle"></i>Lesiones musculoesqueléticas y desviaciones de columna.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SECCIÓN DE ESTUDIOS BÁSICOS Y CATÁLOGO -->
    <div id="estudios_basicos" class="container py-5">
      <div class="row mb-4 text-center">
        <div class="col-12">
          <h2 class="text-lib-primary fw-bold">Estudios Disponibles</h2>
          <div class="mx-auto separator-line my-3"></div>
          <p class="text-muted fs-6">Amplio catálogo de proyecciones radiológicas básicas y especializadas.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-lungs-fill text-primary fs-3 me-2"></i>
                  <h6 class="fw-bold text-dark mb-0 fs-6">Tórax</h6>
                </div>
                <p class="text-secondary small mb-0 ps-4">Proyecciones Anteroposterior (AP), Posteroanterior (PA) y Lateral.</p>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-body-text text-primary fs-3 me-2"></i>
                  <h6 class="fw-bold text-dark mb-0 fs-6">Columna Vertebral</h6>
                </div>
                <p class="text-secondary small mb-0 ps-4">Segmentos Cervical, Dorsal, Lumbar y Sacrocóccix.</p>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-person-fill text-primary fs-3 me-2"></i>
                  <h6 class="fw-bold text-dark mb-0 fs-6">Abdomen</h6>
                </div>
                <p class="text-secondary small mb-0 ps-4">Abdomen simple de pie y en decúbito.</p>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-person-walking text-primary fs-3 me-2"></i>
                  <h6 class="fw-bold text-dark mb-0 fs-6">Extremidades</h6>
                </div>
                <p class="text-secondary small mb-0 ps-4">Mano, muñeca, antebrazo, codo, brazo, pie, tobillo, pierna, rodilla.</p>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-person-standing text-primary fs-3 me-2"></i>
                  <h6 class="fw-bold text-dark mb-0 fs-6">Pelvis y Cadera</h6>
                </div>
                <p class="text-secondary small mb-0 ps-4">Comparativa de cadera, articulaciones sacroilíacas y pelvis AP.</p>
              </div>

              <div class="col-md-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-person-bounding-box text-primary fs-3 me-2"></i>
                  <h6 class="fw-bold text-dark mb-0 fs-6">Cráneo y Cara</h6>
                </div>
                <p class="text-secondary small mb-0 ps-4">Cráneo simple, Senos Paranasales (Waters, Caldwell) y Perfil Griego.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BOTÓN INTERMEDIO DE WHATSAPP -->
      <div class="row my-5">
        <div class="col-12 text-center">
          <a href="https://wa.me/+522711699574?text=Hola,%20quisiera%20agendar%20un%20estudio%20de%20Rayos%20X" class="btn btn-whatsapp btn-lg px-5 py-3 rounded-pill shadow-sm d-inline-flex align-items-center" target="_blank">
            <i class="bi bi-whatsapp fs-2 me-2"></i> Agendar cita o solicitar informes por WhatsApp
          </a>
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
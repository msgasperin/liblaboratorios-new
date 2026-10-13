<?php
  $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="/assets/images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lib Laboratorios | Neumología de Alto Nivel</title>
      <meta name="description" content="Lib Laboratorios, análisis clínicos, unidad de cardiología y alta especialidad en Veracruz.">

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
            <span class="badge badge-lib-accent px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Especialidad Médica</span>
            <h1 class="display-4 fw-bold mb-2 text-lib-primary">Neumología</h1>
            <p class="lead text-muted mb-0">Cuidado especializado de la salud respiratoria y diagnóstico integral de precisión.</p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 text-center text-md-end">
            <a href="https://wa.me/+522717298227?text=Hola,%20estoy%20interesado%20en%20una%20consulta%20de%20neumología" class="btn btn-whatsapp btn-lg px-4 py-3 rounded-3 shadow-sm d-inline-flex align-items-center text-start" target="_blank">
              <i class="bi bi-whatsapp fs-2 me-3"></i>
              <div>
                <span class="d-block fw-bold fs-6">Informes y Cotizaciones</span>
                <small class="fw-normal opacity-90">271 729 82 27</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Sección de Servicios -->
    <div id="servicios" class="container py-5">
      <div class="row mb-5 text-center">
        <div class="col-12">
          <h2 class="text-lib-primary fw-bold">Nuestros Servicios Especializados</h2>
          <div class="mx-auto separator-line my-3"></div>
          <p class="text-muted fs-6">Atención integral para la prevención, diagnóstico y tratamiento de padecimientos respiratorios.</p>
        </div>
      </div>

      <div class="row g-4">
        
        <!-- Consulta -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-person-heart"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Consulta</h5>
                <p class="card-text text-secondary small text-start">Valoración completa por especialista en Neumología.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$1,200 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Espirometría Single -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-lungs"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Espirometría Easy ONE NDD</h5>
                <p class="card-text text-secondary small text-start">Prueba de función pulmonar estandarizada de alta precisión.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$1,300 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Espirometría con Consulta -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-lungs-fill"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Espirometría Easy ONE NDD</h5>
                <p class="card-text text-secondary small text-start">Incluye la prueba funcional completa más consulta con Neumólogo clínico.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$1,800 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Placa de tórax -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-file-earmark-medical"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Placa de tórax</h5>
                <p class="card-text text-secondary small text-start">Estudio radiográfico completo que incluye valoración y consulta con Neumólogo.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$1,500 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Poligrafía de sueño -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-moon-stars"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Poligrafía de sueño</h5>
                <p class="card-text text-secondary small text-start">Estudio diagnóstico especializado para trastornos respiratorios durante el sueño y apnea.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$3,500 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Chequeo cardiopulmonar -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-activity"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Chequeo cardiopulmonar</h5>
                <p class="card-text text-secondary small text-start">Electrocardiograma, Radiografía de tórax, consulta y valoración por Neumólogo.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$1,950 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Broncoscopia con Lavado -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-search-heart"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Broncoscopia con Lavado</h5>
                <p class="card-text text-secondary small text-start">Procedimiento endoscópico para evaluación directa de vías aéreas con lavado bronquial.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$7,500 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Broncoscopia Completa -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-virus"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Broncoscopia Completa</h5>
                <p class="card-text text-secondary small text-start">Estudio broncoscópico con toma de biopsias y cepillado bronquial para diagnóstico detallado.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$9,200 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Toracocentesis -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-eyedropper"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Toracocentesis guiada por US</h5>
                <p class="card-text text-secondary small text-start">Punción pleural guiada por ultrasonido diagnóstico para máxima seguridad.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$5,500 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Colocación de Catéter Único -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-bandaid"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Colocación de Catéter Único</h5>
                <p class="card-text text-secondary small text-start">Procedimiento especializado para la colocación de catéter pleural único.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$6,200 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Catéter Tunelizado -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-hospital"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Catéter Tunelizado</h5>
                <p class="card-text text-secondary small text-start">Procedimiento de colocación de catéter pleural tunelizado para drenaje o tratamiento.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$8,800 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Retiro de Catéter Tunelizado -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-x-circle"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Retiro de Catéter Tunelizado</h5>
                <p class="card-text text-secondary small text-start">Procedimiento médico profesional para la extracción segura de catéter tunelizado.</p>
              </div>
              <div class="mt-3">
                <span class="badge bg-lib-primary text-white p-2 fw-bold fs-6 rounded-2">$3,200 MXN</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tos Crónica -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-shield-exclamation"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Tos Crónica</h5>
                <p class="card-text text-secondary small text-start mb-0">Estudio detallado de causas respiratorias, alérgicas, infecciosas, digestivas o asociadas al consumo de tabaco.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fibrosis Pulmonar -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Fibrosis Pulmonar</h5>
                <p class="card-text text-secondary small text-start mb-0">Evaluación especializada, diagnóstico preciso y seguimiento constante de enfermedad pulmonar intersticial.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Asma y EPOC -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-wind"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Asma y EPOC</h5>
                <p class="card-text text-secondary small text-start mb-0">Control continuo de síntomas, estrategias para la prevención de crisis y seguimiento clínico personalizado.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Dejar de Fumar -->
        <div class="col-md-6 col-lg-4">
          <div class="card card-service h-100 shadow-sm p-3 bg-white">
            <div class="card-body d-flex flex-column justify-content-between p-2">
              <div>
                <div class="icon-box mb-3">
                  <i class="bi bi-ban"></i>
                </div>
                <h5 class="card-title fw-bold text-lib-primary">Dejar de Fumar</h5>
                <p class="card-text text-secondary small text-start mb-0">Acompañamiento médico adaptado a tus antecedentes, hábitos y nivel de dependencia para cesación tabáquica.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Banners Informativos -->
    <div id="banners_informativos" class="container py-4">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-service">
            <img src="/assets/images/seccion/neumologia/estudio_sueno.webp" class="img-fluid w-100" alt="Estudios de Neumología">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-service">
            <img src="/assets/images/seccion/neumologia/info_1.webp" class="img-fluid w-100" alt="Información Neumología 1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-service">
            <img src="/assets/images/seccion/neumologia/info_2.webp" class="img-fluid w-100" alt="Información Neumología 2">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-service">
            <img src="/assets/images/seccion/neumologia/info_3.webp" class="img-fluid w-100" alt="Información Neumología 3">
          </div>
        </div>
      </div>
    </div>

    <!-- Perfil Médico (Dr. Rubén Florentín) -->
    <div id="info_doctor" class="bg-lib-light py-5 mt-5 border-top">
      <div class="container">
        <div class="row align-items-center g-4">
          
          <!-- Fotos del Médico -->
          <div class="col-lg-5">
            <div class="doctor-img-container bg-white p-2 mb-3">
              <img src="/assets/images/seccion/neumologia/dr_ruben.webp?<?= date('his'); ?>" class="img-fluid rounded-3 w-100" alt="Dr. Rubén Florentín - Neumólogo">
            </div>
            <div class="doctor-img-container bg-white p-2">
              <img src="/assets/images/seccion/neumologia/dr_ruben_consulta.webp?<?= date('his'); ?>" class="img-fluid rounded-3 w-100" alt="Dr. Rubén Florentín en consulta">
            </div>
          </div>

          <!-- Información Curricular -->
          <div class="col-lg-7">
            <div class="ps-lg-3">
              <span class="badge bg-lib-primary px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Especialista Médico</span>
              <h2 class="text-lib-primary fw-bold mb-3">Dr. Rubén Florentín</h2>
              <p class="lead text-dark mb-4 text-start">
                Neumólogo formado en el <strong>Centro Médico Nacional Siglo XXI</strong>. Atiende enfermedades respiratorias en adultos con un enfoque en valoración integral, diagnóstico de precisión y seguimiento clínico constante.
              </p>

              <!-- Detalles Trayectoria -->
              <div class="card border-0 shadow-sm mb-3 border-left-lib rounded-3 bg-white">
                <div class="card-body py-3">
                  <h6 class="fw-bold text-lib-primary mb-1 d-flex align-items-center">
                    <i class="bi bi-mortarboard-fill me-2 fs-5 text-lib-accent"></i> Posgrado en Neumología
                  </h6>
                  <p class="mb-0 text-muted small">Centro Médico Nacional Siglo XXI · Avalado por la Universidad de Guadalajara (2022–2026).</p>
                </div>
              </div>

              <div class="card border-0 shadow-sm mb-3 border-left-lib rounded-3 bg-white">
                <div class="card-body py-3">
                  <h6 class="fw-bold text-lib-primary mb-1 d-flex align-items-center">
                    <i class="bi bi-building-fill-check me-2 fs-5 text-lib-accent"></i> Licenciatura en Medicina
                  </h6>
                  <p class="mb-0 text-muted small">Universidad de Quintana Roo (2015–2021).</p>
                </div>
              </div>

              <div class="card border-0 shadow-sm mb-3 border-left-lib rounded-3 bg-white">
                <div class="card-body py-3">
                  <h6 class="fw-bold text-lib-primary mb-1 d-flex align-items-center">
                    <i class="bi bi-patch-check-fill me-2 fs-5 text-lib-accent"></i> Certificación Vigente
                  </h6>
                  <p class="mb-0 text-muted small">Certificación en Neumología por el Consejo Nacional de Neumología.</p>
                </div>
              </div>

              <div class="card border-0 shadow-sm mb-3 border-left-lib rounded-3 bg-white">
                <div class="card-body py-3">
                  <h6 class="fw-bold text-lib-primary mb-1 d-flex align-items-center">
                    <i class="bi bi-globe-americas me-2 fs-5 text-lib-accent"></i> Experiencia e Investigación
                  </h6>
                  <ul class="mb-0 text-muted small ps-3 mt-2">
                    <li class="mb-1">Rotaciones en centros de referencia en neumología y medicina respiratoria en México.</li>
                    <li class="mb-1">Estancia y rotación formativa en el Hospital Universitario de Sevilla, España.</li>
                    <li class="mb-1">Presentación de trabajos científicos en congresos nacionales e internacionales.</li>
                    <li>Maestría en Gestión de la Salud (Universidad Anáhuac · En curso).</li>
                  </ul>
                </div>
              </div>

            </div>
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
<?php
  $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="/assets/images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lib Laboratorios | FibroScan® Elastografía Hepática</title>
      <meta name="description" content="Evaluación hepática no invasiva de alta precisión con tecnología FibroScan en Córdoba y Veracruz. Detección de fibrosis y grasa acumulada sin necesidad de biopsia.">

      <link href="/assets/lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">      
      <link href="/assets/lib/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
      <link href="/assets/lib/sweetAlert2/sweetalert2.min.css" rel="stylesheet" />
      <link href="/assets/css/styles.css?<?= $time; ?>" rel="stylesheet" />
      <link href="/assets/css/styles_secciones.css?<?= $time; ?>" rel="stylesheet" />
   </head>

  <?php require_once("../menu.php"); ?>

  <body class="bg-light">

    <!-- Header / Banner de Sección -->
    <section class="cardio-hero py-5 shadow-sm">
        <div class="container py-3">
            <div class="row align-items-center g-4">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge badge-medical-light px-3 py-2 rounded-pill mb-3 text-uppercase">
                        <i class="bi bi-shield-check me-1"></i> Unidad de Detección Hepática Avanzada
                    </span>
                    <h1 class="display-4 fw-bold mb-2">Elastografía Hepática FibroScan®</h1>
                    <p class="lead mb-0 text-white-50">Evaluación rápida, precisa y totalmente no invasiva para la salud de tu hígado, sin necesidad de biopsia.</p>
                </div>
                <div class="col-lg-5 text-center text-lg-end">
                    <a href="https://wa.me/+522717298227?text=Hola,%20estoy%20interesado%20en%20un%20estudio%20de%20FibroScan" 
                       class="btn btn-whatsapp btn-lg px-4 py-3 d-inline-flex flex-column align-items-center justify-content-center text-decoration-none" 
                       target="_blank">
                        <span class="d-flex align-items-center gap-2 fs-5">
                            <i class="bi bi-whatsapp fs-4"></i> Informes y Cotizaciones
                        </span>
                        <small class="fw-normal opacity-75 mt-1">Atención directa: 271 729 82 27</small>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN PRINCIPAL: ¿QUÉ ES FIBROSCAN? -->
    <div id="que_es" class="container py-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-5 col-md-6 text-center">
          <img src="/assets/images/seccion/fibroscan/fibroscan.webp?<?= $time; ?>" class="img-fluid rounded-4 shadow-sm border" alt="FibroScan Elastografía Hepática">
        </div>
        <div class="col-lg-7 col-md-6">
          <span class="badge badge-lib-accent px-3 py-2 rounded-pill mb-2 text-uppercase tracking-wide" style="font-size: 0.8rem;">Tecnología Aprobada Mundialmente</span>
          <h2 class="text-lib-primary fw-bold mb-3">¿Qué es FibroScan®?</h2>
          <p class="text-secondary lead fs-6">
            El FibroScan® es una tecnología de diagnóstico médico no invasiva que permite evaluar de forma rápida, segura y sumamente precisa la salud de tu hígado.
          </p>
          <p class="text-muted">
            A través de ondas de elastografía transitiva, el equipo mide en minutos la rigidez del tejido hepático (nivel de fibrosis a cirrosis) y la cantidad de grasa acumulada (esteatosis hepática y su grado), sin necesidad de procedimientos quirúrgicos ni biopsias. Este tipo de metodología es operada por un médico certificado en la tecnología para garantizar el máximo rigor clínico.
          </p>
          <div class="alert alert-light border-start border-primary border-4 shadow-sm rounded-3 mt-3 p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-graph-up-arrow text-primary fs-3 me-3"></i>
              <div>
                <strong class="d-block text-dark mb-1">Monitoreo Evolutivo</strong>
                <span class="small text-muted">Es la herramienta ideal para dar seguimiento continuo a enfermedades hepáticas crónicas y evaluar la respuesta a tratamientos médicos.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SECCIÓN DE DETALLES Y APLICACIÓN CLÍNICA -->
    <div id="detalles_estudio" class="bg-white py-5 border-top border-bottom">
      <div class="container">
        <div class="row mb-4 text-center">
          <div class="col-12">
            <h2 class="text-lib-primary fw-bold">Información Clave del Estudio</h2>
            <div class="mx-auto separator-line my-3"></div>
            <p class="text-muted fs-6">Conoce quiénes requieren esta prueba y la facilidad con la que se realiza.</p>
          </div>
        </div>

        <div class="row g-4">
          <!-- Tarjeta: ¿A quién va dirigido? -->
          <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
              <div class="card-header bg-lib-primary text-white fw-bold py-3">
                <i class="bi bi-people-fill me-2"></i>¿A quién va dirigido?
              </div>
              <div class="card-body p-4">
                <p class="text-muted small mb-3">Se recomienda realizar un examen de hígado con FibroScan® en casos de:</p>
                <ul class="list-unstyled text-secondary fs-6 mb-0">
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div><strong>Enzimas hepáticas elevadas:</strong> Alteración en perfil hepático (TGO, TGP, GGT).</div>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div><strong>Hígado Graso:</strong> Pacientes con esteatosis de origen no alcohólico o por consumo de alcohol.</div>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div><strong>Infecciones Virales:</strong> Pacientes con diagnóstico de Hepatitis B o C.</div>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div><strong>Condiciones Metabólicas:</strong> Sobrepeso, obesidad, Diabetes Mellitus o dislipidemias.</div>
                  </li>
                  <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div><strong>Uso de Medicamentos:</strong> Tratamientos prolongados o con fármacos hepatotóxicos.</div>
                  </li>
                  <li class="d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-lib-accent fs-5 me-2 mt-1"></i>
                    <div><strong>Salud Preventiva:</strong> Chequeos generales de rutina y valoración médica integral.</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Tarjeta: ¿Cómo se realiza? -->
          <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
              <div class="card-header bg-lib-primary text-white fw-bold py-3">
                <i class="bi bi-gear-wide-connected me-2"></i>¿Cómo se realiza el estudio?
              </div>
              <div class="card-body p-4">
                <ul class="list-unstyled text-secondary fs-6 mb-0">
                  <li class="mb-4 d-flex align-items-start">
                    <i class="bi bi-clock-history text-lib-accent fs-4 me-3 mt-1"></i>
                    <div>
                      <strong>Rápido e Indoloro:</strong>
                      <p class="text-muted small mb-0 mt-1">El procedimiento dura entre 5 y 10 minutos. Es 100% no invasivo, no utiliza agujas ni requiere anestesia.</p>
                    </div>
                  </li>
                  <li class="mb-4 d-flex align-items-start">
                    <i class="bi bi-activity text-lib-accent fs-4 me-3 mt-1"></i>
                    <div>
                      <strong>Procedimiento Sencillo:</strong>
                      <p class="text-muted small mb-0 mt-1">El paciente se recuesta cómodamente mientras una sonda sobre la piel emite vibraciones de baja frecuencia que atraviesan el tejido hepático.</p>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <i class="bi bi-file-earmark-bar-graph text-lib-accent fs-4 me-3 mt-1"></i>
                    <div>
                      <strong>Resultados Inmediatos (CAP y kPa):</strong>
                      <p class="text-muted small mb-0 mt-1">Se cuantifican valores precisos de CAP (dB/m) para medir la grasa acumulada y de kPa para medir el grado de rigidez o fibrosis.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Muestra Visual / Banner -->
        <div class="row mt-5">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="p-2 bg-light rounded-4 shadow-sm border">
              <img src="/assets/images/slider/paquete_fibroscan.webp?<?= $time; ?>" class="img-fluid rounded-3" alt="Equipamiento FibroScan">
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- RECOMENDACIÓN MÉDICA & CTA -->
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="card border-0 shadow-sm rounded-4 bg-white p-4 text-center">
            <div class="mb-3 text-lib-primary">
              <i class="bi bi-person-heart fs-1"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2">Importancia de la Valoración Médica</h5>
            <p class="text-muted small mb-4">
              Recuerda que tu médico de confianza es el único especialista capacitado para recomendar los estudios adecuados para tu salud, así como para realizar la interpretación clínica oportuna de los resultados.
            </p>
            <div>
              <a href="https://wa.me/+522717298227?text=Hola,%20deseo%20agendar%20un%20estudio%20de%20FibroScan" class="btn btn-whatsapp btn-lg px-5 py-3 rounded-pill shadow-sm d-inline-flex align-items-center" target="_blank">
                <i class="bi bi-whatsapp fs-3 me-2"></i> Agendar Cita o Solicitar Informes
              </a>
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
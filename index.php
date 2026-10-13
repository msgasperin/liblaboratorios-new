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

        <link href="/assets/lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">       
        <link href="/assets/lib/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
        <link href="/assets/lib/sweetAlert2/sweetalert2.min.css" rel="stylesheet" />
        <link href="/assets/css/styles.css?<?= $time; ?>" rel="stylesheet" />
    </head>
    <body onload="ModalIni();">

        <?php require "menu.php"; ?>

        <section id="slider" class="py-4 py-lg-5">
            <div class="container-fluid slider-container px-3 px-md-4">
                <div class="slider-card">
                    <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Estudio del sueño"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Pruebas únicas LIB"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Paquete cardiológico LIB"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Paquete femenino"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4" aria-label="Unidad de rayos X"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="5" aria-label="Paquete fibroscan"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="6" aria-label="Control hipertensión / Diabétes"></button>
                            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="7" aria-label="Paquete salus ósea"></button>
                        </div>

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/estudio_sueno.webp?<?= $time; ?>" class="d-block" alt="Estudio del sueño">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/pruebas_unicas_lib.webp?<?= $time; ?>" class="d-block" alt="Pruebas únicas LIB">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/paquete_cardiologico.webp?<?= $time; ?>" class="d-block" alt="Paquete cardiológico LIB">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/paquete_femenino.webp?<?= $time; ?>" class="d-block" alt="Paquete femenino">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/unidad_rayos_x.webp?<?= $time; ?>" class="d-block" alt="Nueva unidad de rayos X">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/paquete_fibroscan.webp?<?= $time; ?>" class="d-block" alt="Paquete fibroscan">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/control_hp_diabetes.webp?<?= $time; ?>" class="d-block" alt="Control hipertensión / diabétes">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="banner-img-wrapper">
                                    <img src="assets/images/slider/paquete_salud_osea.webp?<?= $time; ?>" class="d-block" alt="Paquete salus ósea">
                                </div>
                            </div>
                        </div>

                        <!-- Botones de navegación -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                            <i class="bi bi-chevron-left fs-5"></i>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                            <i class="bi bi-chevron-right fs-5"></i>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="paquetes" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge bg-med-light text-med-blue px-3 py-2 fw-bold text-uppercase rounded-pill">Promociones Vigentes</span>
                    <h2 class="display-5 fw-bold text-med-blue mt-2">Nuestros Paquetes y Checkups</h2>
                    <div class="title-accent-line"></div>
                    <p class="text-muted">Aprovecha nuestras promociones especiales diseñadas para la prevención de tu salud</p>
                </div>

                <div class="row g-4">
                    
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/consulta_especialista.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/electrocardiograma.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/grasa_visceral.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/holter.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/mapa.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/perfil_cardio.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/paq_control_diabetico_plus.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="promo-card h-100">
                            <img src="assets/images/paquetes_inicio/torax_corazon.webp?<?= $time; ?>" alt="Consulta Especialista" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="medicina_empresarial" class="contenedor_body py-5">
            <div class="container">
                
                <!-- Encabezado de la Sección -->
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="badge badge-pill bg-med-light text-med-blue px-3 py-2 font-weight-bold text-uppercase mb-2 text-sm" style="letter-spacing: 1px;">
                            Soluciones Corporativas
                        </span>
                        <h2 class="display-4 font-weight-bold text-med-blue mb-0">
                            Medicina Laboral Para Empresas
                        </h2>
                        <div class="title-accent-line"></div>
                        <p class="lead text-muted mt-3 mx-auto" style="max-width: 700px;">
                            Evaluaciones integrales, análisis clínicos y estudios de gabinete diseñados para el cumplimiento normativo y el cuidado de la salud de sus colaboradores.
                        </p>
                        <span class="badge badge-pill bg-med-light text-med-blue px-3 py-2 font-weight-bold text-uppercase mb-2 text-sm" style="letter-spacing: 1px;">
                            Precio especial para empresas
                        </span>
                    </div>
                </div>

                <!-- Grid de Servicios Empresariales -->
                <div class="row align-items-stretch">
                    
                    <!-- Columna 1: Análisis Clínicos -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card card-medicina-laboral h-100 shadow-sm d-flex flex-column justify-content-between">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <div class="icon-circle-lg mb-3">
                                        <i class="bi bi-droplet"></i>
                                    </div>
                                    <h4 class="font-weight-bold text-med-blue mb-1">Análisis Clínicos</h4>
                                    <p class="text-muted text-sm mb-0">Perfiles de ingreso y periódicos para trabajadores</p>
                                </div>
                                
                                <hr class="my-3">

                                <ul class="list-unstyled list-med-services mb-0">
                                    <li>Biometría hemática</li>
                                    <li>Química Sanguínea</li>
                                    <li>Examen general de orina</li>
                                    <li>Perfil de lípidos</li>
                                    <li>Glucosa y HbA1c</li>
                                    <li>Pruebas de función hepática y renal</li>
                                    <li>Grupo sanguíneo y Rh</li>
                                    <li>Pruebas toxicológicas (cuando se requiera)</li>
                                    <li>Estudios personalizados y riesgos laborales</li>
                                </ul>
                            </div>

                            <div class="card-footer bg-med-light border-0 p-3 mt-auto">
                                <p class="text-med-blue font-weight-bold text-center text-md mb-0">
                                <i class="bi bi-box-seam me-1"></i> Paquetes empresariales desde evaluaciones básicas hasta perfiles integrales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Columna 2: Consulta y Prevención -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card card-medicina-laboral h-100 shadow-sm d-flex flex-column justify-content-between">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <div class="icon-circle-lg mb-3">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                    <h4 class="font-weight-bold text-med-blue mb-1">Consulta y Prevención</h4>
                                    <p class="text-muted text-sm mb-0">Evaluación médica enfocada en la salud del trabajador</p>
                                </div>

                                <hr class="my-3">

                                <ul class="list-unstyled list-med-services mb-0">
                                    <li>Consulta médica de ingreso</li>
                                    <li>Evaluaciones médicas periódicas</li>
                                    <li>Historia clínica y antecedentes ocupacionales</li>
                                    <li>Toma de signos vitales</li>
                                    <li>Evaluación cardiovascular y respiratoria</li>
                                    <li>Orientación y prevención de riesgos a la salud</li>
                                    <li>Seguimiento de enfermedades crónicas</li>
                                    <li>Campañas de salud dentro de la empresa</li>
                                </ul>
                            </div>

                            <div class="card-footer bg-med-light border-0 p-3 mt-auto">
                                <p class="text-med-blue font-weight-bold text-center text-md mb-0">
                                <i class="bi bi-people me-1"></i> Programas adaptados al número de colaboradores y necesidades de cada empresa.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Columna 3: Estudios de Gabinete -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card card-medicina-laboral h-100 shadow-sm d-flex flex-column justify-content-between">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <div class="icon-circle-lg mb-3">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                    <h4 class="font-weight-bold text-med-blue mb-1">Estudios de Gabinete</h4>
                                    <p class="text-muted text-sm mb-0">Evaluación integral con estudios en un mismo centro</p>
                                </div>

                                <hr class="my-3">

                                <ul class="list-unstyled list-med-services mb-0">
                                    <li>Radiografía digital de tórax</li>
                                    <li>Espirometría</li>
                                    <li>Electrocardiograma</li>
                                    <li>Audiometría (si se requiere)</li>
                                    <li>Ultrasonido</li>
                                    <li>Ecocardiograma Doppler</li>
                                    <li>Holter</li>
                                    <li>MAPA</li>
                                    <li>Prueba de esfuerzo</li>
                                    <li>Densitometría ósea</li>
                                    <li>Valoración por Cardiología</li>
                                    <li>Valoración por Neumología</li>
                                </ul>
                            </div>

                            <div class="card-footer bg-med-light border-0 p-3 mt-auto">
                                <p class="text-med-blue font-weight-bold text-center text-md mb-0">
                                <i class="bi bi-check-circle-fill me-1"></i> Diagnóstico de alta precisión y resultados en un solo lugar.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botón de Acción Directo a WhatsApp -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                    <a href="https://wa.me/+522717298227?text=Hola,%20solicito%20información%20sobre%20Medicina%20Laboral%20para%20empresas" target="_blank" class="btn btn-success btn-lg px-4 py-3 shadow-sm font-weight-bold rounded-pill">
                        <i class="bi bi-whatsapp me-2 fs-5"></i> Solicitar Cotización Empresarial
                    </a>
                    </div>
                </div>

            </div>
        </section>

        <section id="pre-footer" class="py-5 bg-white border-top">
            <div class="container">
                <div class="row g-4 align-items-center">
                    
                    <!-- Video Promocional -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                            <div class="card-header bg-med-blue text-white py-3">
                                <h5 class="mb-0 text-center fw-bold"><i class="bi bi-play-circle me-2"></i>Conócenos en Video</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="ratio ratio-16x9">
                                    <video controls width="100%" poster="assets/images/portada_video.webp" id="video_lib">
                                        <source src="assets/videos/video_lib.mp4" type="video/mp4">
                                        Tu navegador no es compatible con el vídeo de HTML5.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Anita Gotita - Mascota Corporativa -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 h-100 bg-med-light text-center p-4">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="assets/images/anita_gotita_2.webp" alt="Anita Gotita" class="img-fluid rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h4 class="fw-bold text-med-blue mb-1">Anita Gotita</h4>
                            <p class="text-muted small">¡Hola! Soy Anita Gotita, tu acompañante en Lib Laboratorios. Estoy aquí para recordarte la importancia de tus chequeos preventivos con empatía y calidez.</p>
                        </div>
                    </div>

                    <!-- Medidas de Sustentabilidad -->
                    <div class="col-lg-4 col-md-12">
                        <div class="p-3 bg-light rounded-4 border">
                            <h5 class="fw-bold text-med-blue mb-3 text-center"><i class="bi bi-tree me-2 text-success"></i>Sustentabilidad y Medio Ambiente</h5>
                            <p class="small text-muted text-center mb-3">Conoce nuestras 6 iniciativas ecológicas e institucionales:</p>
                            
                            <div class="row g-2">
                               <div class="col-6">
                                    <div class="sustentable-card p-2 text-center" onclick="ModalEcologia('medida_1.webp');">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div class="fw-bold text-dark" style="font-size: 0.75rem;">Políticas energéticas</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="sustentable-card p-2 text-center" onclick="ModalEcologia('medida_4.webp');">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div class="fw-bold text-dark" style="font-size: 0.75rem;">Gestión de residuos</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="sustentable-card p-2 text-center" onclick="ModalEcologia('medida_2.webp');">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div class="fw-bold text-dark" style="font-size: 0.75rem;">Uso de recipientes para alimentos y bebidas</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="sustentable-card p-2 text-center" onclick="ModalEcologia('medida_3.webp');">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div class="fw-bold text-dark" style="font-size: 0.75rem;">Estaciones de bebederos o purificadores de agua</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="sustentable-card p-2 text-center" onclick="ModalEcologia('medida_5.webp');">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div class="fw-bold text-dark" style="font-size: 0.75rem;">Reducción y utilización de papel ecológico</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="sustentable-card p-2 text-center" onclick="ModalEcologia('medida_6.webp');">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div class="fw-bold text-dark" style="font-size: 0.75rem;">Recolección de desechable o centro de recolección</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <a href="https://wa.me/+522717298227?text=Hola,%20quisiera%20solicitar%20información%20o%20una%20cotización" target="_blank" class="btn-whatsapp-float" aria-label="Contacto WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>

        <script src="assets/lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
        <script src="assets/lib/jquery-3.7.1.min.js"></script>
        <script src="assets/lib/sweetAlert2/sweetalert2.min.js"></script>
        <script src="assets/js/Sucursales.js?<?= $time; ?>"></script>
        <script src="assets/js/Modals.js?<?= $time; ?>"></script>

        <?php require "footer.php"; ?>
        
    </body>
</html>
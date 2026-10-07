<?php
    $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIB Laboratorios | Densitometría Ósea</title>
        <meta name="description" content="Estudios de densitometría ósea con tecnología DXA en LIB Laboratorios. Conoce nuestros estudios, paquetes y promociones.">
        <link rel="shortcut icon" href="/assets/images/favicon.png">
        <link href="/assets/lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/lib/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
        <link href="/assets/lib/sweetAlert2/sweetalert2.min.css" rel="stylesheet">
        <link href="/assets/css/styles.css?<?= $time; ?>" rel="stylesheet">
        <link href="/assets/css/styles_secciones.css?<?= $time; ?>" rel="stylesheet">
    </head>
    <body class="bg-light">
        <?php require_once('../menu.php'); ?>

        <!-- Hero híbrido: fondo institucional de Cardiología y composición de Neumología -->
        <section class="dxa-hero py-5">
            <div class="container py-lg-3">
                <div class="row align-items-center g-4">
                    <div class="col-12 text-center text-lg-start">
                        <span class="badge badge-medical-light rounded-pill px-3 py-2 mb-3 text-uppercase">
                            <i class="bi bi-shield-check me-1"></i> Diagnóstico por imagen · Tecnología DXA
                        </span>
                        <h1 class="display-4 fw-bold mb-3">Densitometría <span style="color:var(--lib-accent,#FBB635)">Ósea</span></h1>
                        <p class="lead text-white-50 mb-4">Conoce la salud de tus huesos mediante un estudio rápido, no invasivo y de baja radiación.</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                            <a href="https://wa.me/522717298227?text=Hola%2C%20quiero%20informes%20sobre%20densitometr%C3%ADa%20%C3%B3sea" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg px-4"><i class="bi bi-whatsapp me-2"></i>Solicitar informes</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Estudios -->
        <section id="estudios" class="container py-5 dxa-anchor">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <span class="dxa-section-kicker">Nuestros servicios</span>
                    <h2 class="fw-bold text-dark mt-2">Estudios de densitometría</h2>
                    <div class="separator-line mx-auto my-3"></div>
                    <p class="text-muted">Opciones de evaluación de la densidad mineral ósea con tecnología DXA.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                
                <div class="col-md-6 col-lg-4">
                    <article class="card card-service shadow-sm h-100 p-3">
                        <div class="card-body d-flex flex-column p-2">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box-service">
                                    <i class="bi bi-person-standing"></i>
                                </div>
                                <h3 class="h5 fw-bold text-lib-primary mb-0">Densitometría Cuerpo Completo</h3>
                            </div>
                            <p class="text-secondary small mb-4">Evaluación mediante tecnología DXA.</p>
                            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                <small class="text-muted">Precio del estudio</small>
                                <span class="dxa-price">$1,400</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card card-service shadow-sm h-100 p-3">
                        <div class="card-body d-flex flex-column p-2">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box-service">
                                    <i class="bi bi-universal-access"></i>
                                </div>
                                <h3 class="h5 fw-bold text-lib-primary mb-0">MIP de Columna y Cadera</h3>
                            </div>
                            <p class="text-secondary small mb-4">Evaluación de columna y cadera mediante tecnología DXA.</p>
                            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                <small class="text-muted">Precio del estudio</small>
                                <span class="dxa-price">$1,000</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card card-service shadow-sm h-100 p-3">
                        <div class="card-body d-flex flex-column p-2">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box-service">
                                    <i class="bi bi-capsule"></i>
                                </div>
                                <h3 class="h5 fw-bold text-lib-primary mb-0">Densitometría Cuerpo Completo con Vitamina D</h3>
                            </div>
                            <p class="text-secondary small mb-4">Estudio DXA de cuerpo completo acompañado de prueba de vitamina D.</p>
                            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                <small class="text-muted">Precio del estudio</small>
                                <span class="dxa-price">$1,480</span>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </section>

        <!-- Descripción principal -->
        <section id="informacion" class="bg-white py-5 border-top border-bottom dxa-anchor">
            <div class="container py-lg-3">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5">
                        <div class="doctor-img-container p-2 bg-white">
                            <img src="/assets/images/seccion/densitometria/densitometria.webp" class="dxa-main-photo img-fluid rounded-3" alt="Equipo de densitometría ósea DXA" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <span class="dxa-section-kicker">Conoce el estudio</span>
                        <h2 class="fw-bold text-lib-primary mt-2 mb-3">Evalúa la salud de tus huesos con precisión</h2>
                        <div class="separator-line mb-4"></div>
                        <p class="text-secondary">
                            La densitometría ósea utiliza rayos X de baja dosis (DXA) para medir la densidad mineral de los huesos. Ayuda a diagnosticar osteopenia y osteoporosis y aporta información para valorar el riesgo de fractura.
                        </p>
                        <p class="text-secondary">
                            También puede utilizarse para el seguimiento de tratamientos. En estudios específicos de cuerpo completo, el equipo puede estimar la composición corporal, incluida la masa grasa y la masa magra.
                        </p>
                        <div class="card bg-light border-0 dxa-feature mt-4">
                            <div class="card-body p-4">
                                <h3 class="h6 fw-bold text-lib-primary">
                                    <i class="bi bi-info-circle me-2"></i>¿Para qué sirve?
                                </h3>
                                <ul class="dxa-list mb-0 mt-3">
                                    <li><i class="bi bi-check-circle-fill"></i><span>Detectar disminución de la densidad mineral ósea.</span></li>
                                    <li><i class="bi bi-check-circle-fill"></i><span>Apoyar el diagnóstico de osteopenia y osteoporosis.</span></li>
                                    <li><i class="bi bi-check-circle-fill"></i><span>Complementar la evaluación del riesgo de fracturas.</span></li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill"></i><span>Dar seguimiento a la salud ósea y al tratamiento indicado.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Información en tarjetas -->
        <section class="container py-5">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <span class="dxa-section-kicker">Guía del paciente</span>
                    <h2 class="fw-bold mt-2">Todo lo que necesitas saber</h2>
                    <div class="separator-line mx-auto my-3"></div>
                    <p class="text-muted">Indicaciones frecuentes, procedimiento y beneficios.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <article class="card card-service h-100 shadow-sm p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="icon-box-service">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h3 class="h5 text-lib-primary fw-bold mb-0">¿Quiénes pueden necesitarla?</h3>
                            </div>
                            <ul class="dxa-list mb-0">
                                <li><i class="bi bi-check-circle"></i><span>Mujeres después de la menopausia, según su edad y factores de riesgo.</span></li>
                                <li><i class="bi bi-check-circle"></i><span>Personas con antecedentes familiares de osteoporosis o fracturas.</span></li>
                                <li><i class="bi bi-check-circle"></i><span>Pacientes con determinadas enfermedades crónicas o tratamientos prolongados con corticoides.</span></li>
                                <li><i class="bi bi-check-circle"></i><span>Personas con bajo peso o fracturas por fragilidad.</span></li>
                                <li class="mb-0"><i class="bi bi-check-circle"></i><span>Niños y adolescentes únicamente cuando exista indicación médica específica.</span></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="card card-service h-100 shadow-sm p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="icon-box-service">
                                    <i class="bi bi-clipboard2-check"></i>
                                </div>
                                <h3 class="h5 text-lib-primary fw-bold mb-0">¿Cómo se realiza el estudio?</h3>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <span class="dxa-step">1</span>
                                <p class="text-secondary small mb-0">Te recuestas cómodamente en la camilla del densitómetro.</p>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <span class="dxa-step">2</span>
                                <p class="text-secondary small mb-0">El brazo del equipo se desplaza sobre la región estudiada y utiliza una dosis baja de rayos X.</p>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <span class="dxa-step">3</span>
                                <p class="text-secondary small mb-0">El procedimiento suele durar entre 10 y 20 minutos, dependiendo del tipo de estudio.</p>
                            </div>
                            <div class="d-flex gap-3 mb-3"><span class="dxa-step">4</span>
                                <p class="text-secondary small mb-0">Confirma al agendar si necesitas alguna preparación especial y avisa si existe posibilidad de embarazo.</p>
                            </div>
                            <div class="d-flex gap-3">
                                <span class="dxa-step">5</span>
                                <p class="text-secondary small mb-0">Los resultados incluyen las mediciones correspondientes; los índices T-score y Z-score se reportan cuando aplican.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <article class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-4 bg-lib-primary text-white p-4 p-lg-5">
                                <i class="bi bi-stars fs-1 d-block mb-3" style="color:var(--lib-accent,#FBB635)"></i>
                                <h3 class="h4 fw-bold">Ventajas de la densitometría en LIB</h3>
                                <p class="text-white-50 mb-0 small">Una herramienta útil para la evaluación y el seguimiento de tu salud ósea.</p>
                            </div>
                            <div class="col-lg-8 p-4 p-lg-5">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-circle-fill text-lib-primary"></i><span class="text-secondary small">Tecnología DXA de haz en abanico.</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-circle-fill text-lib-primary"></i>
                                            <span class="text-secondary small">Procedimiento rápido y no invasivo.</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-circle-fill text-lib-primary"></i>
                                            <span class="text-secondary small">Estudio con baja dosis de radiación.</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-circle-fill text-lib-primary"></i>
                                            <span class="text-secondary small">Útil en chequeos preventivos cuando está indicado.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Promociones -->
        <section id="promociones" class="bg-white py-5 border-top dxa-anchor">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <span class="dxa-section-kicker">Promociones y paquetes</span>
                        <h2 class="fw-bold mt-2">Cuida tus huesos con nuestros paquetes</h2>
                        <div class="separator-line mx-auto my-3"></div>
                        <p class="text-muted">Consulta las imágenes de los paquetes para conocer sus detalles y confirma su vigencia al solicitar informes.</p>
                    </div>
                </div>
                <div class="row g-3 justify-content-center">
                    <div class="col-6 col-md-4 col-lg-2">
                        <a class="dxa-promo package-thumb" href="/assets/images/seccion/densitometria/densitometria.webp" target="_blank" aria-label="Ver Promoción de densitometría">
                            <img src="/assets/images/seccion/densitometria/densitometria.webp" alt="Promoción de densitometría" loading="lazy">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a class="dxa-promo package-thumb" href="/assets/images/seccion/densitometria/paq_hombre_40.webp" target="_blank" aria-label="Ver Paquete Hombre 40">
                            <img src="/assets/images/seccion/densitometria/paq_hombre_40.webp" alt="Paquete Hombre 40" loading="lazy">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a class="dxa-promo package-thumb" href="/assets/images/seccion/densitometria/paq_metabolico_osea.webp" target="_blank" aria-label="Ver Paquete metabólico y salud ósea">
                            <img src="/assets/images/seccion/densitometria/paq_metabolico_osea.webp" alt="Paquete metabólico y salud ósea" loading="lazy">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a class="dxa-promo package-thumb" href="/assets/images/seccion/densitometria/paq_osteoporosis.webp" target="_blank" aria-label="Ver Paquete osteoporosis">
                            <img src="/assets/images/seccion/densitometria/paq_osteoporosis.webp" alt="Paquete osteoporosis" loading="lazy">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a class="dxa-promo package-thumb" href="/assets/images/seccion/densitometria/paq_posmenopausia.webp" target="_blank" aria-label="Ver Paquete posmenopausia">
                            <img src="/assets/images/seccion/densitometria/paq_posmenopausia.webp" alt="Paquete posmenopausia" loading="lazy">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a class="dxa-promo package-thumb" href="/assets/images/seccion/densitometria/paq_reumatologico.webp" target="_blank" aria-label="Ver Paquete reumatológico">
                            <img src="/assets/images/seccion/densitometria/paq_reumatologico.webp" alt="Paquete reumatológico" loading="lazy">
                        </a>
                    </div>        
                </div>
            </div>
        </section>

        <!-- Cierre -->
        <section class="container py-5">
            <div class="card card-appointment shadow-sm border-0">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-8 p-4 p-lg-5">
                        <span class="badge badge-lib-accent rounded-pill px-3 py-2 mb-3">Estamos para ayudarte</span>
                        <h2 class="h3 fw-bold text-lib-primary">¿Quieres agendar tu densitometría?</h2>
                        <p class="text-secondary mb-lg-0">Consulta disponibilidad, preparación y promociones en nuestras sucursales.</p>
                    </div>
                    <div class="col-lg-4 p-4 text-center">
                        <a href="https://wa.me/522717298227?text=Hola%2C%20quiero%20agendar%20una%20densitometr%C3%ADa%20%C3%B3sea" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg w-100 py-3">
                            <i class="bi bi-whatsapp me-2"></i>Agendar por WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script src="/assets/lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/lib/jquery-3.7.1.min.js"></script>
        <script src="/assets/lib/sweetAlert2/sweetalert2.min.js"></script>
        <script src="/assets/js/Sucursales.js?<?= $time; ?>"></script>
        <script src="/assets/js/Modals.js?<?= $time; ?>"></script>

        <?php require('../footer.php'); ?>

    </body>
</html>

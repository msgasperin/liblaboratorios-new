<?php 
   $time = date('his');    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lib Laboratorios | Cardiología de Alto Nivel</title>
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
    <section class="cardio-hero py-5 shadow-sm">
        <div class="container py-3">
            <div class="row align-items-center g-4">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge badge-medical-light px-3 py-2 rounded-pill mb-3 text-uppercase">
                        <i class="bi bi-shield-check me-1"></i> Unidad de Alto Nivel Diagnóstico
                    </span>
                    <h1 class="display-4 fw-bold mb-2">Cardiología Especializada</h1>
                    <p class="lead mb-0 text-white-50">Cuidado integral del corazón, prevención cardiovascular y diagnóstico con equipamiento hospitalario de última generación.</p>
                </div>
                <div class="col-lg-5 text-center text-lg-end">
                    <a href="https://wa.me/+522717298227?text=Hola,%20estoy%20interesado%20en%20una%20consulta%20de%20Cardiolog%C3%ADa" 
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

    <!-- SECCIÓN DE SERVICIOS Y TARIFAS -->
    <section id="servicios" class="container py-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 1px;">Catálogo de Servicios</span>
                <h2 class="fw-bold text-dark mt-1">Estudios y Consultas Cardiológicas</h2>
                <div class="mx-auto rounded" style="width: 60px; height: 4px; background-color: var(--lib-primary);"></div>
                <p class="text-muted mt-2">Valoraciones especializadas con reporte e interpretación por médico cardiólogo certificado.</p>
            </div>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- Columna Izquierda: Grid de Servicios -->
            <div class="col-lg-8">
                <div class="row g-3">

                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card card-service h-100 p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="icon-box-service"><i class="bi bi-person-badge-fill"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">Consulta Especializada</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Consulta con Médico Especialista en Cardiología Clínica y Certificado. Atención médica integral y valoración inicial.</p>
                                </div>
                                <div class="text-end mt-4 pt-2 border-top">
                                    <div>
                                        <span class="fs-4 price-tag">$1,350</span>
                                        <small class="text-muted fw-normal fs-7">(primera vez)</small>
                                    </div>
                                    <div class="mt-1">
                                        <span class="fs-6 fw-bold text-secondary">$1,200</span>
                                        <small class="text-muted fs-7">(seguimiento)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card card-service h-100 p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="icon-box-service"><i class="bi bi-node-plus-fill"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">Consulta + Laboratorio</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Consulta con Especialista Certificado. Incluye Química Sanguínea de 24 elementos con Perfil de Lípidos.</p>
                                </div>
                                <div class="text-end mt-4 pt-2 border-top">
                                    <span class="fs-4 price-tag">$1,500</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6">
                        <div class="card card-service h-100 p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="icon-box-service"><i class="bi bi-activity"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">M.A.P.A (24 hrs)</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Monitoreo Ambulatorio de Presión Arterial. Incluye reporte, valoración e interpretación por cardiólogo clínico.</p>
                                </div>
                                <div class="text-end mt-4 pt-2 border-top">
                                    <span class="fs-4 price-tag">$1,900</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6">
                        <div class="card card-service h-100 p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="icon-box-service"><i class="bi bi-broadcast"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">HOLTER (24 o 48 hrs)</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Monitoreo Electrocardiográfico continuo. Reporte con valoración e interpretación por especialista certificado.</p>
                                </div>
                                <div class="mt-4 pt-2 border-top">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="fs-5 price-tag">$2,100</span>
                                            <small class="text-muted d-block fs-7">24 hrs.</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="fs-5 price-tag">$3,200</span>
                                            <small class="text-muted d-block fs-7">48 hrs.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-md-6">
                        <div class="card card-service h-100 p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="icon-box-service"><i class="bi bi-file-earmark-medical-fill"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">Electrocardiograma</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Estudio en reposo. Incluye reporte completo con valoración e interpretación por cardiólogo certificado.</p>
                                </div>
                                <div class="text-end mt-4 pt-2 border-top">
                                    <span class="fs-4 price-tag">$500</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-6">
                        <div class="card card-service h-100 p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="icon-box-service"><i class="bi bi-heart-pulse-fill"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">Prueba de Esfuerzo</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Ergometría completa. Evaluación precisa de la respuesta cardíaca y rendimiento durante el ejercicio físico.</p>
                                </div>
                                <div class="text-end mt-4 pt-2 border-top">
                                    <span class="fs-4 price-tag">$3,000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-12">
                        <div class="card card-service p-3 shadow-sm border-0">
                            <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 p-2">
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <div class="icon-box-service"><i class="bi bi-display-fill"></i></div>
                                        <h6 class="fw-bold mb-0" style="color: var(--lib-primary);">Ecocardiograma Strain</h6>
                                    </div>
                                    <p class="card-text text-muted small mb-0">Doppler Color Transtorácico y Strain Longitudinal. Incluye perfil de lípidos de 11 elementos. Evalúa cavidades, válvulas y fuerza sistólica.</p>
                                </div>
                                <div class="text-md-end border-top border-md-0 pt-2 pt-md-0 flex-shrink-0">
                                    <span class="fs-3 price-tag">$2,500</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Columna Derecha: Tarjeta de Llamado a la Acción / Imagen Doctor -->
            <div class="col-lg-4">
                <div class="card card-appointment shadow-sm h-100 border-0">
                    <div class="p-3 text-center bg-light">
                        <img src="/assets/images/seccion/cardiologia/dr_josue.webp?<?= $time; ?>" class="img-fluid rounded-4 shadow-sm" alt="Consulta de Cardiología LIB">
                    </div>
                    <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                        <span class="badge bg-primary-subtle text-primary fw-bold text-uppercase mb-2 px-3 py-2 rounded-pill">Atención Personalizada</span>
                        <h5 class="fw-bold mb-2" style="color: var(--lib-primary);">¿Necesitas una valoración cardiológica?</h5>
                        <p class="text-muted small mb-4">Agenda tu cita con nuestros especialistas certificados y obtén un diagnóstico certero.</p>
                        <a href="https://wa.me/+522717298227?text=Hola,%20quisiera%20agendar%20una%20consulta%20de%20Cardiolog%C3%ADa" 
                           target="_blank" 
                           class="btn btn-whatsapp py-2.5 px-4 w-100 d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-whatsapp fs-5"></i> Agendar por WhatsApp
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECCIÓN DEL MÉDICO ESPECIALISTA Y EXPERIENCIA -->
    <section id="medico" class="bg-white py-5 border-top border-bottom">
        <div class="container py-3">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 1px;">Excelencia Médica</span>
                    <h2 class="fw-bold text-dark mt-1">¿Por qué elegir Cardiología en LIB LABORATORIOS?</h2>
                    <div class="mx-auto rounded" style="width: 60px; height: 4px; background-color: var(--lib-primary);"></div>
                    <p class="text-muted mt-2">Respaldados por la trayectoria, certificaciones y reconocimientos internacionales de nuestro equipo especialista.</p>
                </div>
            </div>

            <div class="row align-items-center mb-5 g-4">
                <div class="col-lg-4 text-center">
                    <div class="doctor-img-container d-inline-block">
                        <img src="/assets/images/seccion/cardiologia/consulta_dr_josue.webp?<?= $time; ?>" class="img-fluid" alt="Dr. Josué Páez Tirado">
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="badge bg-warning text-dark font-weight-bold px-3 py-2 rounded-pill mb-2">
                        <i class="bi bi-patch-check-fill me-1"></i> Cardiólogo Clínico Certificado
                    </span>
                    <h3 class="fw-bold text-dark mb-1">Dr. Josué Páez Tirado</h3>
                    <p class="text-muted fw-semibold mb-3">Céd. Prof: 12052921 &bull; 14868628</p>

                    <div class="card border-0 bg-light p-3 mb-3 border-left-medical rounded-3">
                        <ul class="mb-0 text-secondary small ps-3">
                            <li class="mb-2">
                                <strong>Reconocimiento Internacional:</strong> Ganador del <em>"Model Sharing Poster Honorable Mention"</em> en el Global Quality Showcase de las sesiones científicas de la <strong>American Heart Association 2024</strong> (Chicago, IL).
                            </li>
                            <li>
                                Excoordinador de residentes de cardiología durante el ciclo 2024-2025.
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-start gap-2 text-secondary small">
                        <i class="bi bi-geo-alt-fill text-danger fs-5 flex-shrink-0"></i>
                        <span><strong>Ubicación de Consulta:</strong> Montecito 38, piso 20 oficina 19, Col. Nápoles C.P. 03810, Alcaldía Benito Juárez, Ciudad de México.</span>
                    </div>
                </div>
            </div>

            <!-- Experiencia y Áreas de Especialidad -->
            <div class="row g-4">
                <!-- Experiencia Destacada -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-header text-white fw-bold py-3 border-0 d-flex align-items-center gap-2" style="background-color: var(--lib-primary);">
                            <i class="bi bi-award-fill text-warning"></i> Experiencia Destacada
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <ul class="text-secondary small mb-4 ps-3">
                                <li class="mb-2">Valoración cardiológica integral privada en la Ciudad de México (2025-actual).</li>
                                <li class="mb-2">Médico adscrito al servicio de Urgencias Cardiovasculares del Hospital de Cardiología de CMN Siglo XXI del IMSS (2025-actual).</li>
                                <li class="mb-2">Miembro activo del grupo de trabajo CMN SXXI en el proyecto “Calidad con corazón” con reconocimientos BRONZE, SILVER PLUS y GOLDEN PLUS por la AHA (2023-2025).</li>
                                <li class="mb-2">Miembro activo en el proceso de certificación como “UNIDAD DE DOLOR TORÁCICO” en el Hospital de Cardiología de CMN SXXI (2025-actual).</li>
                                <li class="mb-2">Participación en el protocolo nacional “Registro Mexicano de Dislipidemias” (REMEXDIS) (2022-2025).</li>
                                <li>Conferencista asociado a Novartis y MedScientific con participación activa como speaker en congresos nacionales e internacionales.</li>
                            </ul>
                            <div class="row g-2 text-center mt-auto">
                                <div class="col-6">
                                    <img src="/assets/images/seccion/cardiologia/dr_josue_2.webp" class="img-fluid rounded-3 border shadow-sm" alt="Dr. Josué Páez en Congreso">
                                </div>
                                <div class="col-6">
                                    <img src="/assets/images/seccion/cardiologia/dr_josue_3.webp" class="img-fluid rounded-3 border shadow-sm" alt="Dr. Josué Páez Ponencia">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Áreas de Especialidad -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-header text-white fw-bold py-3 border-0 d-flex align-items-center gap-2" style="background-color: var(--lib-primary);">
                            <i class="bi bi-heart-pulse-fill text-warning"></i> Áreas de Especialidad
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <ul class="text-secondary small ps-3 mb-4">
                                <li class="mb-3"><strong>Prevención cardiovascular:</strong> Control de colesterol LDL, obesidad (uso de análogos de GLP-1), hipertensión, diabetes y tabaquismo.</li>
                                <li class="mb-3"><strong>Dominio de guías clínicas actualizadas</strong> e investigación científica avanzada.</li>
                                <li class="mb-3"><strong>Habilidades diagnósticas e interpretación:</strong> Electrocardiograma, Ecocardiograma, Holter de 24 hrs o más, Prueba de esfuerzo físico y MAPA de 24 hrs.</li>
                                <li class="mb-3"><strong>Manejo de enfermedades cardiovasculares:</strong> Hipertensión, Enfermedad Coronaria, Insuficiencia Cardíaca y Arritmias (fibrilación auricular, taquicardias).</li>
                                <li class="mb-3"><strong>Procedimientos avanzados:</strong> Canalización de vasos centrales, colocación de catéter venoso central, marcapaso temporal y catéter Swan-Ganz.</li>
                            </ul>
                            <div class="text-center mt-auto">
                                <img src="/assets/images/seccion/cardiologia/dr_josue_estudio.webp" class="img-fluid rounded-3 border shadow-sm w-100" alt="Dr. Josué Páez Estudio">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNERS DE PAQUETES Y CHEQUEOS -->
    <section id="paquetes" class="container py-5">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 1px;">Promociones Integrales</span>
                <h2 class="fw-bold text-dark mt-1">Paquetes y Chequeos Especializados</h2>
                <div class="mx-auto rounded" style="width: 60px; height: 4px; background-color: var(--lib-primary);"></div>
                <p class="text-muted mt-2">Conoce nuestras promociones vigentes. Haz clic en cualquiera para amplificar la información.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/check_up_anual_preventivo_cardiologico.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/check_up_anual_preventivo_cardiologico.webp" alt="Check Up Anual Preventivo">
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/check_up_cardiovascular.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/check_up_cardiovascular.webp" alt="Check Up Cardiovascular">
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/paq_arritmia_estres_cardiaco.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/paq_arritmia_estres_cardiaco.webp" alt="Paquete Arritmia y Estrés Cardíaco">
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/paq_cardiologia_deportiva.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/paq_cardiologia_deportiva.webp" alt="Cardiología Deportiva 1">
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/paq_cardiologia_deportiva_2.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/paq_cardiologia_deportiva_2.webp" alt="Cardiología Deportiva 2">
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/paq_esfuerzo_basico.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/paq_esfuerzo_basico.webp" alt="Paquete Esfuerzo Básico">
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a href="/assets/images/seccion/cardiologia/perfil_hipertension.webp" class="package-thumb swipebox">
                    <img src="/assets/images/seccion/cardiologia/perfil_hipertension.webp" alt="Perfil Hipertensión">
                </a>
            </div>
        </div>

        <!-- BOTÓN INTERMEDIO DE WHATSAPP -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="https://wa.me/+522717298227?text=Hola,%20estoy%20interesado%20en%20una%20consulta%20de%20Cardiolog%C3%ADa" 
                   class="btn btn-whatsapp btn-lg px-5 py-3 shadow-sm" target="_blank">
                    <i class="bi bi-whatsapp me-2 fs-5"></i> Solicitar Informes y Cotizaciones
                </a>
            </div>
        </div>
    </section>

    <!-- SECCIÓN INFORMATIVA Y DETALLE DE ESTUDIOS -->
    <section id="informacion_estudios" class="bg-white py-5 border-top">
        <div class="container py-3">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 1px;">Guía Médica</span>
                    <h2 class="fw-bold text-dark mt-1">Información Detallada de los Estudios</h2>
                    <div class="mx-auto rounded" style="width: 60px; height: 4px; background-color: var(--lib-primary);"></div>
                    <p class="text-muted mt-2">Conoce el alcance de cada prueba diagnóstica y sus principales indicaciones clínicas.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Card MAPA -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box-service"><i class="bi bi-activity"></i></div>
                                <h4 class="fw-bold mb-0" style="color: var(--lib-primary);">Monitoreo Ambulatorio de Presión Arterial (M.A.P.A)</h4>
                            </div>
                            <p class="text-secondary">Es un estudio continuo que registra la presión arterial durante 24 horas continuas. Es fundamental para confirmar el diagnóstico de Hipertensión Arterial y evaluar la respuesta al tratamiento farmacológico.</p>
                            
                            <hr class="my-4">

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-dark"><i class="bi bi-check2-circle text-primary me-1"></i> ¿Qué evalúa el MAPA?</h6>
                                    <ul class="ps-3 text-secondary small">
                                        <li class="mb-1">Comportamiento real de la presión arterial día y noche.</li>
                                        <li class="mb-1">Variaciones fisiológicas ante estrés, actividad o descanso.</li>
                                        <li class="mb-1">Detección de hipertensión oculta o enmascarada.</li>
                                        <li class="mb-1">Efectividad del tratamiento antihipertensivo.</li>
                                        <li>Picos hipertensivos nocturnos no detectados.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-dark"><i class="bi bi-person-check text-primary me-1"></i> ¿Para quién es ideal?</h6>
                                    <ul class="ps-3 text-secondary small">
                                        <li class="mb-1">Pacientes con hipertensión o sospecha clínica.</li>
                                        <li class="mb-1">Efecto "bata blanca" (presión alta en consultorio).</li>
                                        <li class="mb-1">Mareos, cefaleas o palpitaciones inexplicables.</li>
                                        <li class="mb-1">Ajuste de dosis de medicamentos antihipertensivos.</li>
                                        <li>Control preoperatorio, en diabéticos o adultos mayores.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card HOLTER -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box-service"><i class="bi bi-broadcast"></i></div>
                                <h4 class="fw-bold mb-0" style="color: var(--lib-primary);">Monitor HOLTER Electrocardiográfico</h4>
                            </div>
                            <p class="text-secondary">Prueba especializada, no invasiva y de registro prolongado que evalúa la actividad eléctrica del corazón durante la rutina diaria. Detecta arritmias intermitentes o alteraciones del ritmo no visibles en un electrocardiograma convencional.</p>
                            
                            <hr class="my-4">

                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-person-check text-primary me-1"></i> ¿Para quién está indicado?</h6>
                            <ul class="ps-3 text-secondary small mb-0">
                                <li class="mb-1">Evaluación integral preventiva o chequeo cardiológico.</li>
                                <li class="mb-1">Pacientes con palpitaciones, mareos, fatiga o desmayos sin causa aparente.</li>
                                <li class="mb-1">Seguimiento de trastornos del ritmo o control de marcapasos.</li>
                                <li class="mb-1">Deportistas en evaluación de función cardíaca bajo esfuerzo.</li>
                                <li>Pacientes hipertensos, diabéticos o con antecedentes familiares de riesgo.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card Ecocardiograma -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box-service"><i class="bi bi-display-fill"></i></div>
                                <h4 class="fw-bold mb-0" style="color: var(--lib-primary);">Ecocardiograma Doppler con Strain</h4>
                            </div>
                            <p class="text-secondary">Estudio ultrasónico de imagen cardíaca en tiempo real. Analiza la estructura y mecánica cardíaca, válvulas y deformación miocárdica (Strain). Equipado con la tecnología <strong>Philips Affinity 70</strong> para análisis de precisión hospitalaria.</p>

                            <hr class="my-4">

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-dark"><i class="bi bi-person-check text-primary me-1"></i> Indicaciones Claves</h6>
                                    <ul class="ps-3 text-secondary small">
                                        <li class="mb-1">Evaluación de hipertensión, arritmias o soplos.</li>
                                        <li class="mb-1">Seguimiento oncológico (detección de cardiotoxicidad).</li>
                                        <li class="mb-1">Valoración preoperatoria o postinfarto.</li>
                                        <li>Chequeo en deportistas de alto rendimiento.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-dark"><i class="bi bi-calendar2-check text-primary me-1"></i> Recomendación por Edades</h6>
                                    <ul class="ps-3 text-secondary small">
                                        <li class="mb-1"><strong>35-40 años:</strong> Ecocardiograma de referencia inicial.</li>
                                        <li class="mb-1"><strong>30 años:</strong> Con factores de riesgo (cada 1-2 años).</li>
                                        <li class="mb-1"><strong>40-45 años:</strong> Mujeres en menopausia o con antecedentes.</li>
                                        <li><strong>60+ años:</strong> Control cardiovascular anual recomendado.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="p-3 bg-light rounded-3 border-left-medical mb-4">
                                <h6 class="fw-bold text-dark mb-1">Importancia del Cardiólogo Operador</h6>
                                <p class="text-secondary small mb-0">La interpretación es realizada por cardiólogos capacitados para correlacionar los datos de Strain con el diagnóstico y tratamiento oportuno.</p>
                            </div>

                            <!-- Galería Ecocardiograma -->
                            <div class="row g-3 text-center">
                                <div class="col-4">
                                    <img src="/assets/images/seccion/cardiologia/ecocardiograma_1.webp" class="img-fluid rounded-3 border shadow-sm" alt="Ecocardiograma 1">
                                </div>
                                <div class="col-4">
                                    <img src="/assets/images/seccion/cardiologia/ecocardiograma_2.webp" class="img-fluid rounded-3 border shadow-sm" alt="Ecocardiograma 2">
                                </div>
                                <div class="col-4">
                                    <img src="/assets/images/seccion/cardiologia/ecocardiograma_3.webp" class="img-fluid rounded-3 border shadow-sm" alt="Ecocardiograma 3">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- JS REQUERIDOS -->
    <script src="/assets/lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/jquery-3.7.1.min.js"></script>
    <script src="/assets/lib/sweetAlert2/sweetalert2.min.js"></script>
    <script src="/assets/js/Sucursales.js?<?= $time; ?>"></script>
    <script src="/assets/js/Modals.js?<?= $time; ?>"></script>

    <?php require('../footer.php'); ?>

</body>
</html>
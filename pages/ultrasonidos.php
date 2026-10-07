<?php
  $time = date('his');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/assets/images/favicon.png">
  <title>Lib Laboratorios | Ultrasonidos y Doppler</title>
  <meta name="description" content="Estudios de ultrasonido y Doppler, paquetes diagnósticos y sedes de atención de Lib Laboratorios en Córdoba, Veracruz.">
  <link href="/assets/lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/lib/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
  <link href="/assets/lib/sweetAlert2/sweetalert2.min.css" rel="stylesheet">
  <link href="/assets/css/styles.css?<?= $time; ?>" rel="stylesheet">
  <link href="/assets/css/styles_secciones.css?<?= $time; ?>" rel="stylesheet">
</head>
<body class="bg-light">
<?php require_once('../menu.php'); ?>

<!-- Encabezado institucional, compartido con Cardiología -->
<section class="cardio-hero py-5 shadow-sm">
  <div class="container py-3">
    <div class="row align-items-center g-4">
      <div class="col-lg-7 text-center text-lg-start">
        <span class="badge badge-medical-light px-3 py-2 rounded-pill mb-3 text-uppercase"><i class="bi bi-shield-check me-1"></i> Diagnóstico por imagen</span>
        <h1 class="display-4 fw-bold mb-3">Ultrasonidos y Doppler</h1>
        <p class="lead text-white-50 mb-0">Estudios de ultrasonido y Doppler con tecnología avanzada para una valoración diagnóstica clara y oportuna.</p>
      </div>
      <div class="col-lg-5 text-center text-lg-end">
        <a href="https://wa.me/522711699574?text=Hola%2C%20me%20gustar%C3%ADa%20agendar%20o%20cotizar%20un%20ultrasonido" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg px-4 py-3 d-inline-flex align-items-center gap-3 rounded-3 shadow-sm text-start">
          <i class="bi bi-whatsapp fs-2"></i><span><strong class="d-block">Informes y cotizaciones</strong><small class="fw-normal">271 169 95 74</small></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sedes -->
<section id="sedes" class="container py-5">
  <div class="row text-center mb-4"><div class="col-12">
    <span class="small fw-bold text-uppercase text-muted" style="letter-spacing:1px">Dónde encontrarnos</span>
    <h2 class="fw-bold text-lib-primary mt-1">Nuestras sedes de atención</h2>
    <div class="separator-line mx-auto my-3"></div>
    <p class="text-muted">Comunícate con nosotros para consultar disponibilidad y preparación de tu estudio.</p>
  </div></div>
  <div class="row g-4">
    <div class="col-md-6"><div class="card card-service shadow-sm h-100 p-3"><div class="card-body d-flex flex-column">
      <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
        <img src="/assets/images/amec.webp" class="img-fluid rounded-3" style="max-width:46%;max-height:52px;object-fit:contain" alt="AMEC">
        <img src="/assets/images/logo_azul.webp" class="img-fluid" style="max-width:46%;max-height:52px;object-fit:contain" alt="Logo azul">
      </div>
      <div class="d-flex align-items-center gap-3 mb-2"><div class="icon-box-service"><i class="bi bi-hospital"></i></div><h5 class="fw-bold text-lib-primary mb-0">Centro de Ultrasonidos y Tomografía</h5></div>
      <p class="text-secondary small mt-3"><i class="bi bi-geo-alt-fill text-lib-accent me-2"></i>Avenida 9 BIS C. núm. 912, Col. San José, Córdoba, Ver., C. P. 94560.</p>
      <p class="text-muted small">Centro de ultrasonidos y tomografía en Córdoba.</p>
      <div class="mt-auto pt-3 border-top"><a href="tel:2711699574" class="btn btn-outline-primary w-100"><i class="bi bi-telephone me-2"></i>Cotiza al 271 169 95 74</a></div>
    </div></div></div>
    <div class="col-md-6"><div class="card card-service shadow-sm h-100 p-3"><div class="card-body d-flex flex-column">
      <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
        <img src="/assets/images/salud_cor.webp" class="img-fluid rounded-3" style="max-width:46%;max-height:52px;object-fit:contain" alt="Saludcor">
        <img src="/assets/images/logo_azul.webp" class="img-fluid" style="max-width:46%;max-height:52px;object-fit:contain" alt="Logo azul">
      </div>
      <div class="d-flex align-items-center gap-3 mb-2"><div class="icon-box-service"><i class="bi bi-building"></i></div><h5 class="fw-bold text-lib-primary mb-0">Unidad de Diagnóstico Especializado</h5></div>
      <p class="text-secondary small mt-3"><i class="bi bi-geo-alt-fill text-lib-accent me-2"></i>Calle 18, Av. 21, núm. 2113, Col. Lomas.</p>
      <p class="text-muted small">Atención médica integral con tecnología de imagen.</p>
      <div class="mt-auto pt-3 border-top"><a href="https://wa.me/522711699574" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp w-100"><i class="bi bi-whatsapp me-2"></i>Enviar WhatsApp</a></div>
    </div></div></div>
  </div>
</section>

<!-- Estudios -->
<section id="servicios" class="container pb-5">
  <div class="row text-center mb-4"><div class="col-12">
    <span class="small fw-bold text-uppercase text-muted" style="letter-spacing:1px">Catálogo de servicios</span>
    <h2 class="fw-bold text-lib-primary mt-1">Estudios de Ultrasonido y Doppler</h2>
    <div class="separator-line mx-auto my-3"></div>
    <p class="text-muted">Consulta los estudios disponibles y sus precios de referencia.</p>
    <span class="badge badge-lib-accent px-3 py-2 rounded-pill">14 estudios</span>
  </div></div>
  <div class="row g-3">
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-heart-pulse"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Doppler Venoso de Extremidades</h3></div>
      <p class="small text-secondary mb-4">Diagnóstico de trombosis o várices, sin radiación.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$3,500</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-activity"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Doppler Arterial de Extremidades</h3></div>
      <p class="small text-secondary mb-4">Evalúa circulación arterial y perfusión periférica.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$4,200</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-droplet-half"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Doppler Renal o Abdominal</h3></div>
      <p class="small text-secondary mb-4">Evaluar flujo en arterias, obstrucciones, alteraciones vascular.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$3,800</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-clipboard2-pulse"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Abdominal Completo</h3></div>
      <p class="small text-secondary mb-4">Evalúa hígado, vesícula, páncreas, riñones, bazo y vías biliares.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$1,100</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-prescription2"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Hepatobiliar</h3></div>
      <p class="small text-secondary mb-4">Revisión específica de hígado y vesícula biliar (cálculos, grasa hepática, inflamación).</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$700</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-moisture"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Renal y Vías Urinarias</h3></div>
      <p class="small text-secondary mb-4">Evalúa riñones y vejiga; detecta cálculos o infecciones urinarias.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$600</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-person"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Prostático y Vesical</h3></div>
      <p class="small text-secondary mb-4">Evalúa tamaño prostático, volumen urinario y vaciamiento.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$800</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-gender-female"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Ginecológico</h3></div>
      <p class="small text-secondary mb-4">Evalúa útero, endometrio y ovarios; identifica miomas o quistes.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$900</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-person-hearts"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Obstétrico</h3></div>
      <p class="small text-secondary mb-4">Evalúa desarrollo fetal, placenta y líquido amniótico; incluye biometría fetal.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$1,100</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-heart"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido de Mama</h3></div>
      <p class="small text-secondary mb-4">Diagnóstico de nódulos o lesiones mamarias.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$800</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-bandaid"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Tiroides y Paratiroides</h3></div>
      <p class="small text-secondary mb-4">Evalúa tamaño, nódulos y vascularidad de la glándula tiroides.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$800</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-universal-access"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Musculoesquelético</h3></div>
      <p class="small text-secondary mb-4">Valoración de tendones, ligamentos y articulaciones (hombro, rodilla, tobillo, etc.).</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$700</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-search"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido de Partes Pequeñas</h3></div>
      <p class="small text-secondary mb-4">Estudio de glándulas salivales, ganglios, testículos o tejidos blandos superficiales.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$600</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
    <div class="col-md-6 col-lg-4"><article class="card card-service h-100 p-3 shadow-sm"><div class="card-body d-flex flex-column p-2">
      <div class="d-flex align-items-center gap-3 mb-3"><div class="icon-box-service"><i class="bi bi-body-text"></i></div><h3 class="h6 fw-bold text-lib-primary mb-0">Ultrasonido Intestinal / Herniario</h3></div>
      <p class="small text-secondary mb-4">Detecta hernias, apendicitis o inflamaciones de la pared abdominal.</p>
      <div class="mt-auto pt-3 border-top text-end"><span class="price-tag fs-4">$600</span><small class="text-muted ms-1">MXN</small></div>
    </div></article></div>
  </div>
</section>

<!-- Paquetes -->
<section id="paquetes" class="bg-white py-5 border-top">
  <div class="container">
    <div class="row text-center mb-4"><div class="col-12">
      <span class="small fw-bold text-uppercase text-muted" style="letter-spacing:1px">Chequeos integrales</span>
      <h2 class="fw-bold text-lib-primary mt-1">Paquetes Diagnósticos</h2>
      <div class="separator-line mx-auto my-3"></div>
      <p class="text-muted">Opciones que combinan ultrasonido con otros estudios de laboratorio y gabinete.</p>
    </div></div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4"><article class="card card-service shadow-sm h-100 overflow-hidden">
        <div class="bg-lib-primary text-white p-3 d-flex align-items-center gap-2"><i class="bi bi-person fs-4 text-lib-accent"></i><h3 class="h6 fw-bold mb-0">Paquete Ultrasonido Masculino</h3></div>
        <div class="card-body p-4 d-flex flex-column"><ul class="list-unstyled small text-secondary mb-4">
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Paquete Básico Mixto (BHC, QS6, EGO)</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Antígeno específico prostático</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Ultrasonido prostático</span></li>
        </ul><div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center"><small class="text-muted">Precio del paquete</small><strong class="price-tag fs-4">$1,050</strong></div></div>
      </article></div>
      <div class="col-md-6 col-lg-4"><article class="card card-service shadow-sm h-100 overflow-hidden">
        <div class="bg-lib-primary text-white p-3 d-flex align-items-center gap-2"><i class="bi bi-gender-female fs-4 text-lib-accent"></i><h3 class="h6 fw-bold mb-0">Paquete Ultrasonido Femenino</h3></div>
        <div class="card-body p-4 d-flex flex-column"><ul class="list-unstyled small text-secondary mb-4">
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Paquete Básico Mixto (BHC, QS6, EGO)</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Papanicolaou</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Ultrasonido de mama y Ginecológico (útero, endometrio y ovarios)</span></li>
        </ul><div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center"><small class="text-muted">Precio del paquete</small><strong class="price-tag fs-4">$2,200</strong></div></div>
      </article></div>
      <div class="col-md-6 col-lg-4"><article class="card card-service shadow-sm h-100 overflow-hidden">
        <div class="bg-lib-primary text-white p-3 d-flex align-items-center gap-2"><i class="bi bi-clipboard2-pulse fs-4 text-lib-accent"></i><h3 class="h6 fw-bold mb-0">Paquete Abdomen Completo</h3></div>
        <div class="card-body p-4 d-flex flex-column"><ul class="list-unstyled small text-secondary mb-4">
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Paquete Integral (BHC, QS35, EGO)</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Electrocardiograma</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Ultrasonido de abdomen completo</span></li>
        </ul><div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center"><small class="text-muted">Precio del paquete</small><strong class="price-tag fs-4">$1,700</strong></div></div>
      </article></div>
      <div class="col-md-6 col-lg-4"><article class="card card-service shadow-sm h-100 overflow-hidden">
        <div class="bg-lib-primary text-white p-3 d-flex align-items-center gap-2"><i class="bi bi-activity fs-4 text-lib-accent"></i><h3 class="h6 fw-bold mb-0">Paquete Tiroides Sana</h3></div>
        <div class="card-body p-4 d-flex flex-column"><ul class="list-unstyled small text-secondary mb-4">
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Perfil tiroideo LIB (8 parámetros)</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Acs. Anti tiroides (Tiroiditis autoinmune)</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Ultrasonido de tiroides</span></li>
        </ul><div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center"><small class="text-muted">Precio del paquete</small><strong class="price-tag fs-4">$1,800</strong></div></div>
      </article></div>
      <div class="col-md-6 col-lg-4"><article class="card card-service shadow-sm h-100 overflow-hidden">
        <div class="bg-lib-primary text-white p-3 d-flex align-items-center gap-2"><i class="bi bi-heart-pulse fs-4 text-lib-accent"></i><h3 class="h6 fw-bold mb-0">Paquete Hígado Ultrasano</h3></div>
        <div class="card-body p-4 d-flex flex-column"><ul class="list-unstyled small text-secondary mb-4">
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Perfil sanguíneo Hígado SANO (11 elementos, DHL, Tiempos de coagulación, Insulina Basal, Glucosa, Colesterol, Triglicéridos)</span></li>
          <li class="mb-3 d-flex gap-2"><i class="bi bi-check-circle-fill text-lib-primary flex-shrink-0"></i><span>Ultrasonido Hepático</span></li>
        </ul><div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center"><small class="text-muted">Precio del paquete</small><strong class="price-tag fs-4">$1,400</strong></div></div>
      </article></div>
    </div>
    <div class="row mt-5"><div class="col-12 text-center">
      <a href="https://wa.me/522711699574?text=Hola%2C%20quisiera%20informes%20sobre%20los%20paquetes%20de%20ultrasonido" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg px-5 py-3 shadow-sm"><i class="bi bi-whatsapp me-2"></i>Solicitar informes y cotizaciones</a>
      <p class="text-muted small mt-3 mb-0"><i class="bi bi-info-circle me-1"></i>Precios sujetos a cambios sin previo aviso.</p>
    </div></div>
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

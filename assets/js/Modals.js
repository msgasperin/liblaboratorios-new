const ModalIni = () => {
   let html = 
   `<!-- Modal Promocional de Bienvenida -->
   <div class="modal fade modal-promo" id="modalBienvenida" tabindex="-1" aria-labelledby="modalBienvenidaLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-xl modal-dialog-centered">
         <div class="modal-content border-0 p-3 p-md-4 position-relative">
               
               <!-- Botón de Cierre Personalizado -->
               <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Cerrar" onclick="$('#containerModal').html('');">
                  <i class="bi bi-x-lg fs-6"></i>
               </button>

               <div class="modal-body p-2">
                  <div class="row g-4 align-items-center">
                     
                     <!-- Lado Izquierdo: Video -->
                     <div class="col-lg-6">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                            <div class="card-header bg-med-blue text-white py-3">
                                <h5 class="mb-0 text-center fw-bold"><i class="bi bi-play-circle me-2"></i>Conócenos en Video</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="ratio ratio-16x9">
                                    <video controls width="100%" poster="v2/assets/images/portada_video.webp" id="video_lib">
                                        <source src="assets/videos/video_lib.mp4" type="video/mp4">
                                        Tu navegador no es compatible con el vídeo de HTML5.
                                    </video>
                                </div>
                            </div>
                        </div>
                     </div>

                     <!-- Lado Derecho: Imagen Banner Horizontal -->
                     <div class="col-lg-6">
                        <div class="modal-promo-banner-wrapper p-2">
                           <img src="assets/images/seccion/neumologia/estudio_sueno.webp" class="img-fluid" alt="Estudio del sueño">
                        </div>
                     </div>

                  </div>
               </div>

         </div>
      </div>
   </div>`;

   $('#containerModal').html(html);
   $('#modalBienvenida').modal('show');
}

const ModalSucursal = (id) => {
    let suc = arrSucursales.find(s => s.id == id);

    if (!suc) {
        console.error("Sucursal no encontrada");
        return;
    }

    let basePath = '/assets/images/sucursales/';

    let html = `
    <div class="modal fade modal-sucursal" id="modalSucursal" tabindex="-1" aria-labelledby="modalSucursalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0">
                
                <!-- Encabezado de la Modal con Foto Miniatura Integrada -->
                <div class="modal-header border-0 align-items-center">
                    <div class="d-flex align-items-center gap-3">
                        <!-- Miniatura pequeña complementaria -->
                        <img src="${basePath}${suc.foto}" alt="${suc.sucursal}" class="sucursal-thumb">
                        <div>
                            <span class="badge bg-warning text-dark text-uppercase font-weight-bold mb-1" style="font-size: 0.65rem; letter-spacing: 0.5px;">Sucursal</span>
                            <h5 class="modal-title mb-0" id="modalSucursalLabel">
                                ${suc.sucursal}
                            </h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close-white-custom ms-auto" data-bs-dismiss="modal" aria-label="Cerrar">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                <!-- Cuerpo de la Modal -->
                <div class="modal-body p-4">
                    <div class="row g-4">
                        
                        <!-- Columna Izquierda: Información Detallada -->
                        <div class="col-lg-5 d-flex flex-column justify-content-between">
                            <div>
                                <!-- Dirección -->
                                <div class="sucursal-info-item">
                                    <div class="sucursal-icon-box">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-uppercase text-muted fw-bold" style="font-size: 0.725rem; letter-spacing: 0.5px;">Dirección</span>
                                        <p class="mb-0 text-dark small fw-medium" style="line-height: 1.4;">${suc.dirección}</p>
                                    </div>
                                </div>

                                <!-- Horarios -->
                                <div class="sucursal-info-item">
                                    <div class="sucursal-icon-box">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-uppercase text-muted fw-bold" style="font-size: 0.725rem; letter-spacing: 0.5px;">Horario de Atención</span>
                                        <div class="mb-0 text-dark small" style="line-height: 1.4;">${suc.horarios}</div>
                                    </div>
                                </div>

                                <!-- Contacto -->
                                <div class="sucursal-info-item">
                                    <div class="sucursal-icon-box">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-uppercase text-muted fw-bold" style="font-size: 0.725rem; letter-spacing: 0.5px;">Teléfono(s)</span>
                                        <div class="d-flex flex-wrap align-items-center gap-2 mt-1">
                                            <a href="tel:${suc.contacto}" class="fw-bold text-decoration-none" style="color: #1C307E;">
                                                ${suc.contacto}
                                            </a>
                                            ${suc.contacto2 ? `
                                                <span class="text-muted">|</span>
                                                <a href="tel:${suc.contacto2}" class="fw-bold text-decoration-none" style="color: #1C307E;">
                                                    ${suc.contacto2}
                                                </a>
                                            ` : ''}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botón Directo a WhatsApp -->
                            <div class="mt-3">
                                <a href="https://wa.me/52${suc.contacto}?text=Hola,%20solicito%20información%20sobre%20la%20sucursal%20${encodeURIComponent(suc.sucursal)}" 
                                   target="_blank" 
                                   class="btn-whatsapp-sucursal w-100 justify-content-center">
                                    <i class="bi bi-whatsapp fs-5"></i> Contactar por WhatsApp
                                </a>
                            </div>
                        </div>

                        <!-- Columna Derecha: Mapa de Ubicación -->
                        <div class="col-lg-7 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="fw-bold text-uppercase text-muted" style="font-size: 0.725rem; letter-spacing: 0.5px;">
                                    Ubicación en Google Maps
                                </span>
                                <a href="https://maps.google.com/?q=${encodeURIComponent(suc.dirección)}" target="_blank" class="small text-decoration-none fw-bold" style="color: #1C307E;">
                                    Abrir en Maps <i class="bi bi-box-arrow-up-right ms-1"></i>
                                </a>
                            </div>

                            <div class="sucursal-map-wrapper flex-grow-1">
                                <iframe src="${suc.maps}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer de la Modal -->
                <div class="modal-footer border-0 bg-light py-2 px-4 justify-content-between">
                    <small class="text-muted">Lib Laboratorios &bull; Tu laboratorio de confianza</small>
                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    `;

    $('#containerModal').html(html);
    $('#modalSucursal').modal('show');
};

const ModalDocumentos = (titulo, documento) => {

   let html =
   `<div class="modal fade modal-pdf" id="modalDocPdf" tabindex="-1" aria-labelledby="modalHistoriaPDFLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
         <div class="modal-content border-0">
               
               <!-- Encabezado de la Modal -->
               <div class="modal-header border-0 align-items-center">
                  <div class="d-flex align-items-center gap-2">
                     <i class="bi bi-file-earmark-pdf-fill text-warning fs-4"></i>
                     <div>
                        <h5 class="modal-title mb-0" id="modalHistoriaPDFLabel">${titulo}</h5>
                        <small class="text-white-50">Conoce nuestra trayectoria e identidad institucional</small>
                     </div>
                  </div>
                  <button type="button" class="btn-close-white-custom ms-auto" data-bs-dismiss="modal" aria-label="Cerrar">
                     <i class="bi bi-x-lg"></i>
                  </button>
               </div>

               <!-- Cuerpo de la Modal (Visor PDF) -->
               <div class="modal-body p-3 p-md-4">
                  <div class="pdf-viewer-container">
                     <iframe src="/assets/docs/${documento}#toolbar=1" 
                        class="pdf-iframe" 
                        title="Historia de Lib Laboratorios">
                        <p>Tu navegador no soporta la visualización directa de PDF. Puedes <a href="v2/assets/docs/${documento}" target="_blank">descargarlo aquí</a>.</p>
                     </iframe>
                  </div>
               </div>

               <!-- Footer de la Modal -->
               <div class="modal-footer border-0 bg-light py-2 px-4 justify-content-between">
                  <small class="text-muted">Lib Laboratorios &bull; Compromiso con la salud y precisión</small>
                  
                  <div class="d-flex gap-2">
                     <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3" data-bs-dismiss="modal">
                        Cerrar
                     </button>
                  </div>
               </div>

         </div>
      </div>
   </div>`;

   $('#containerModal').html(html);
   $('#modalDocPdf').modal('show');
}

const ModalEcologia = (img) => {
    
    let html = `
    <div class="modal fade" id="modalEcologia" tabindex="-1" aria-labelledby="modalEcologiaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 shadow">
        
                <!-- Cuerpo de la Modal -->
                <div class="modal-body text-center p-4">
                    <div class="position-relative d-inline-block w-100">
                    <img src="/assets/images/medidas_sustentables/${img}" 
                        class="img-fluid rounded-4 shadow-sm border border-light" 
                        alt="Vista Previa Informativa">
                    </div>
                </div>

                <!-- Pie de la Modal con Call to Action -->
                <div class="modal-footer border-0 pt-0 text-end">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>`;

    $('#containerModal').html(html);
    $('#modalEcologia').modal('show');
};

const ModalBolsaTrabajo = () => {
    
    let html = `
    <div class="modal fade" id="modalBolsa" tabindex="-1" aria-labelledby="modalBolsaLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 shadow-lg">
            
            <!-- Encabezado -->
            <div class="modal-header border-bottom bg-light px-4 py-3">
                <h5 class="modal-title fw-bold text-lib-primary d-flex align-items-center" id="modalBolsaLabel">
                    <i class="bi bi-briefcase-fill me-2 text-lib-accent"></i> Búsqueda de Talento — Envíanos tu CV
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-body p-4">                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nomcv" class="form-label small fw-bold text-secondary">Nombre Completo <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-person"></i></span>
                            <input type="text" name="nomcv" id="nomcv" class="form-control border-start-0 ps-0" placeholder="Ej. Juan Pérez" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="telcv" class="form-label small fw-bold text-secondary">Teléfono</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-telephone"></i></span>
                            <input type="tel" inputmode="numeric" name="telcv" id="telcv" class="form-control border-start-0 ps-0" placeholder="10 dígitos" maxlength="10">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="corcv" class="form-label small fw-bold text-secondary">Correo Electrónico <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="corcv" id="corcv" class="form-control border-start-0 ps-0" placeholder="correo@ejemplo.com" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="ciudadcv" class="form-label small fw-bold text-secondary">Ciudad</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" name="ciudadcv" id="ciudadcv" class="form-control border-start-0 ps-0" placeholder="Ej. Córdoba / Veracruz">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="puestocv" class="form-label small fw-bold text-secondary">Puesto o Área de Interés</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-person-badge"></i></span>
                            <input type="text" name="puestocv" id="puestocv" class="form-control border-start-0 ps-0" placeholder="Ej. Recepcionista, Q.F.B., Enfermería">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="pdf" class="form-label small fw-bold text-secondary">Adjunta tu CV en formato PDF <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted"><i class="bi bi-file-earmark-pdf"></i></span>
                            <input type="file" class="form-control" name="pdf" id="pdf" accept="application/pdf">
                        </div>
                    </div>
                </div>

                <!-- Botón Enviar -->
                <div class="row mt-4">
                    <div class="col-md-6 offset-md-3 text-center">
                    <button type="button" class="btn btn-lib-primary btn-lg w-100 rounded-pill shadow-sm" id="btnEnviarCv" onclick="enviar_cv()">
                        <i class="bi bi-send-fill me-2"></i>Enviar Curriculum
                    </button>
                    </div>
                </div>

                </form>
            </div>

            <div class="modal-footer bg-light border-top-0 rounded-bottom-4 px-4 py-3 justify-content-between align-items-center">
                <div class="d-flex align-items-center text-muted small">
                    <i class="bi bi-info-circle-fill text-lib-primary fs-5 me-2"></i>
                    <div>
                        <span class="d-block">* Los campos marcados con asterisco (<span class="text-danger">*</span>) son obligatorios.</span>
                        <span class="d-block">* El archivo debe ser exclusivamente en formato <strong>PDF</strong> y no exceder los <strong>500 KB</strong>.</span>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3 ms-2" data-bs-dismiss="modal">
                    Cancelar
                </button>
            </div>

            </div>
        </div>
    </div>`;

    $('#containerModal').html(html);
    $('#modalBolsa').modal('show');
};

const mostrarToastError = (mensaje, tipo, timer = 4000, icon = 'bi-exclamation-triangle-fill') => {
  let html = 
  `<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1090;">
        <div id="toastValidacion" class="toast align-items-center text-white bg-${tipo} border-0 rounded-3 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body d-flex align-items-center fs-6">
                    <i class="bi ${icon} fs-4 me-2"></i>
                    ${mensaje}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
        </div>
    </div>`; 

    $('#containerToast').html(html);
  
    // Obtiene o crea la instancia del Toast de Bootstrap 5
    var toastElement = document.getElementById('toastValidacion');
    var toast = bootstrap.Toast.getOrCreateInstance(toastElement, { delay: timer }); // Se oculta a los 4 seg
  
    toast.show();
}

const valida_mail = (correo) => {
  let emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (emailRegex.test(correo))
    return true;
  else
    return false;
}

const enviar_cv = () => {
	
    let nombre   = $('#nomcv').val().trim();
    let telefono = $('#telcv').val().trim();
    let correo   = $('#corcv').val().trim();
    let ciudad   = $('#ciudadcv').val().trim();
    let puesto   = $('#puestocv').val().trim();
    let file0    = document.getElementById('pdf');
    let file     = file0.files[0];

    if(nombre == '') {        
        mostrarToastError('¡Atención! debes ingresar el nombre', 'primary');
        $('#nomcv').focus();
        return;
    }
    else if(correo == '') {
        mostrarToastError('¡Atención! debes ingresar el correo de contacto', 'primary');
        $('#corcv').focus();
        return;
    }
    else if(!valida_mail(correo)) {
        mostrarToastError('¡Atención! debes ingresar un correo válido', 'primary');
        $('#corcv').focus();
        return;
    }
    else if(typeof (file) == "undefined") {
        mostrarToastError('¡Atención! debes adjuntar tu CV en formato PDF', 'primary');
        $('#pdf').focus();
        return;
    }
    else if (!(/\.(pdf)$/i).test(file.name)) {
        mostrarToastError('¡Atención! debes adjuntar tu CV en formato PDF', 'primary');
        $('#pdf').focus();
        return;
    }

    let data  = new FormData();
    data.append('accion', 'enviar_cv');
    data.append('nombre', nombre);
    data.append('telefono', telefono);
    data.append('correo', correo);
    data.append('ciudad', ciudad);
    data.append('puesto', puesto);
    data.append('archivo', file); 
    
    $('#btnEnviarCv').prop('disabled',true);

    $.ajax({
        type: 'POST',
        url: '/api/funciones.php',
        data: data,
        contentType: false,
        processData: false,
        cache: false,
        success: function (res) {
            if(res.estatus == 200) {
                mostrarToastError('¡CV Enviado!', 'success');
                $('#modalBolsa').modal('hide');
                return;
            }
            else {
                mostrarToastError('¡Atención! hubo un problema para enviar el CV, actualiza la página e inténtalo de nuevo', 'danger');
                $('#btnEnviarCv').prop('disabled',false);
                return;
            }
        }
    });
}

<!-- Top Bar con accesos directos y redes sociales -->
<div class="top-bar py-2 text-white d-none d-md-block">
   <div class="container-fluid px-lg-5">
         <div class="row align-items-center">
            <div class="col-lg-8 col-md-7">
               <div class="d-flex flex-wrap gap-3 align-items-center">
                     <span><i class="bi bi-credit-card-2-front text-med-yellow me-1"></i> Aceptamos VISA, Mastercard y AMEX</span>
                     <span class="text-white-50">|</span>
                     <a href="https://wa.me/+522717298227" target="_blank"><i class="bi bi-clock-history text-med-yellow me-1"></i> Cotizaciones 24 hrs aquí</a>
                     <span class="text-white-50">|</span>
                     <a href="#" onclick="ModalBolsaTrabajo();">
                        <i class="bi bi-person-workspace text-med-yellow me-1"></i> Forma parte de nuestro equipo
                     </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-5 text-end">
               <div class="d-inline-flex align-items-center gap-3">
                  <span class="small">Cotiza las 24 hrs:</span>
                  <a href="https://www.facebook.com/liblaboratorios.mx/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook fs-6"></i></a>
                  <a href="https://www.instagram.com/liblaboratoriosmx/?hl=es-la" target="_blank" aria-label="Instagram"><i class="bi bi-instagram fs-6"></i></a>
                  <a href="https://www.lib-laboratorios.com/sislib/res-lib/?id=1" class="btn btn-sm btn-med-yellow rounded-pill px-3 py-1 text-dark ms-2 fw-bold shadow-sm">
                     <i class="bi bi-file-earmark-medical me-1"></i> Consulta tus resultados
                  </a>
               </div>
            </div>
         </div>
   </div>
</div>

<!-- Header / Menú de Navegación Responsive -->
<header class="sticky-top bg-white shadow-sm border-bottom">
   <nav class="navbar navbar-expand-lg py-2">
      <div class="container-fluid px-lg-5">
         
         <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/assets/images/logo_azul.webp" alt="Lib Laboratorios Logo">
         </a>

         <div class="d-lg-none ms-auto me-2">
            <a href="https://www.lib-laboratorios.com/sislib/res-lib/?id=1" class="btn btn-sm btn-med-yellow rounded-pill px-2 py-1 fw-bold">
               <i class="bi bi-file-earmark-check"></i> Resultados
            </a>
         </div>

         <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Abrir menú">
            <i class="bi bi-list fs-1 text-med-blue"></i>
         </button>

         <div class="collapse navbar-collapse d-none d-lg-flex" id="desktopNavbar">
            <ul class="navbar-brand-nav navbar-nav ms-auto mb-2 mb-lg-0 main-nav align-items-center">
               <li class="nav-item"><a class="nav-link active" href="https://www.lib-laboratorios.com">Inicio</a></li>
               <li class="nav-item">
                  <a class="nav-link" href="#" onclick="ModalDocumentos('Nosotros', 'nosotros.pdf');">Nosotros</a>
               </li>

               <!-- Dropdown Sucursales -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="sucursalesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Sucursales
                  </a>
                  <ul class="dropdown-menu p-3 shadow-lg" aria-labelledby="sucursalesDropdown" style="min-width: 260px;">
                     <li class="dropdown-header text-med-blue fw-bold uppercase"><i class="bi bi-geo-alt me-1"></i> Córdoba</li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(1);">Matriz</a></li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(2);">SaludCor</a></li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(3);">AMEC</a></li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(4);">Centro</a></li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(5);">Plaza Palmas</a></li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(6);">Gómez Urrutia</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <li class="dropdown-header text-med-blue fw-bold uppercase"><i class="bi bi-geo-alt me-1"></i> Orizaba</li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(7);">Real</a></li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(8);">Sanatorio Rebeca</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <li class="dropdown-header text-med-blue fw-bold uppercase"><i class="bi bi-geo-alt me-1"></i> Fortín</li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(9);">Centro de Atención</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <li class="dropdown-header text-med-blue fw-bold uppercase"><i class="bi bi-geo-alt me-1"></i> Zongolica</li>
                     <li><a class="dropdown-item rounded py-1 ps-3" href="#" onclick="ModalSucursal(10);">Centro de Atención</a></li>
                  </ul>
               </li>

               <!-- Menú Servicios -->
               <li class="nav-item"><a class="nav-link" href="/pages/cardiologia">Cardiología</a></li>
               <li class="nav-item"><a class="nav-link" href="/pages/neumologia">Neumología</a></li>
               <li class="nav-item"><a class="nav-link" href="/pages/ultrasonidos">Ultrasonidos</a></li>
               <li class="nav-item"><a class="nav-link" href="/pages/analisis">Análisis Clínicos</a></li>
               <li class="nav-item"><a class="nav-link" href="/pages/densitometria">Densitometría</a></li>
               <li class="nav-item"><a class="nav-link" href="/pages/rayos-x">Rayos X</a></li>
               <li class="nav-item"><a class="nav-link" href="/pages/fibroscan">Fibroscan</a></li>
            </ul>
         </div>

      </div>
   </nav>
</header>

<!-- Menú Offcanvas Móvil - Ocupa 4/4 (100%) de la pantalla -->
<div class="offcanvas offcanvas-start offcanvas-mobile-full bg-white" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
   <div class="offcanvas-header bg-med-blue text-white py-3">
      <div class="d-flex align-items-center gap-2">
         <img src="/assets/images/logo_blanco.webp" alt="Lib" height="35">
      </div>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>

   <div class="offcanvas-body d-flex flex-column justify-content-between p-4">
         
         <div>
            <!-- Botón destacado Consulta tus Resultados Móvil -->
            <div class="mb-4">
               <a href="https://www.lib-laboratorios.com/sislib/res-lib/?id=1" class="btn btn-med-yellow w-100 py-3 rounded-3 shadow-sm fw-bold d-flex align-items-center justify-content-center gap-2" data-bs-dismiss="offcanvas">
                     <i class="bi bi-file-earmark-medical fs-5"></i> Consulta tus Resultados
               </a>
            </div>

            <!-- Enlaces de navegación vertical -->
            <div class="accordion accordion-flush" id="accordionMobileNav">

               <div class="accordion-item border-0">
                  <a href="https://www.lib-laboratorios.com/" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">
                     Inicio
                  </a>
               </div>
               
               <div class="accordion-item border-0">
                  <a href="#" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5" data-bs-dismiss="offcanvas" onclick="ModalDocumentos('Nosotros', 'nosotros.pdf');">
                     Nosotros
                  </a>
               </div>

               <!-- Dropdown Acordeón Sucursales -->
               <div class="accordion-item border-bottom">
                  <h2 class="accordion-header" id="headingSucursales">
                     <button class="accordion-button collapsed py-3 fw-bold text-med-blue fs-5 bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSucursales" aria-expanded="false">
                        Sucursales
                     </button>
                  </h2>
                  <div id="collapseSucursales" class="accordion-collapse collapse" data-bs-parent="#accordionMobileNav">
                     <div class="accordion-body ps-3 pt-1 pb-3 text-muted">
                        <div class="fw-bold text-med-blue mt-2 mb-1"><i class="bi bi-geo-alt text-med-yellow"></i> Córdoba</div>
                        <div class="ps-3 d-flex flex-column gap-1">
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(1);">Matriz</a>
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(2);">SaludCor</a>
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(3);">AMEC</a>
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(4);">Centro</a>
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(5);">Plaza Palmas</a>
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(6);">Gómez Urrutia</a>
                        </div>
                        <div class="fw-bold text-med-blue mt-3 mb-1"><i class="bi bi-geo-alt text-med-yellow"></i> Orizaba</div>
                        <div class="ps-3 d-flex flex-column gap-1">
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(7);">Real</a>
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(8);">Sanatorio Rebeca</a>
                        </div>
                        <div class="fw-bold text-med-blue mt-3 mb-1"><i class="bi bi-geo-alt text-med-yellow"></i> Fortín</div>
                        <div class="ps-3 d-flex flex-column gap-1">
                              <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(9);">Centro de Atención</a>
                        </div>
                        <div class="fw-bold text-med-blue mt-3 mb-1"><i class="bi bi-geo-alt text-med-yellow"></i> Zongolica</div>
                        <div class="ps-3 d-flex flex-column gap-1">
                           <a href="#" class="text-decoration-none text-dark py-1" onclick="ModalSucursal(10);">Centro de Atención</a>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="accordion-item border-0">
                  <a href="/pages/cardiologia" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Cardiología</a>
               </div>
               <div class="accordion-item border-0">
                  <a href="/pages/neumologia" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Neumología</a>
               </div>
               <div class="accordion-item border-0">
                  <a href="/pages/ultrasonidos" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Ultrasonidos</a>
               </div>
               <div class="accordion-item border-0">
                  <a href="/pages/analisis" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Análisis Clínicos</a>
               </div>
               <div class="accordion-item border-0">
                  <a href="/pages/densitometria" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Densitometría</a>
               </div>               
               <div class="accordion-item border-0">
                  <a href="/pages/rayos-x" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Rayos X</a>
               </div>
               <div class="accordion-item border-0">
                  <a href="/pages/fibroscan" class="nav-link py-3 fw-bold border-bottom text-med-blue fs-5">Fibroscan</a>
               </div>
            </div>
         </div>

         <!-- Footer del Menú Móvil -->
         <div class="pt-4 border-top">
            <div class="d-flex flex-column gap-2 text-muted small mb-3">
               <div><i class="bi bi-credit-card-2-front text-med-yellow me-2"></i> Paga con Tarjeta VISA, MC, AMEX</div>
               <div><a href="https://wa.me/+522717298227" class="text-decoration-none text-dark"><i class="bi bi-whatsapp text-success me-2"></i> Cotizaciones 24 hrs clic aquí</a></div>
               <div><a href="#" class="text-decoration-none text-dark"><i class="bi bi-briefcase text-med-blue me-2"></i> Envía tu CV / Trabaja con nosotros</a></div>
            </div>
            
            <div class="d-flex justify-content-center gap-3 fs-4 text-med-blue">
               <a href="https://facebook.com" class="text-med-blue"><i class="bi bi-facebook"></i></a>
               <a href="https://instagram.com" class="text-med-blue"><i class="bi bi-instagram"></i></a>
               <a href="https://wa.me/+522717298227" class="text-success"><i class="bi bi-whatsapp"></i></a>
            </div>
         </div>

   </div>
</div>
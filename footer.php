 <div id="containerModal"></div>
<div id="containerToast"></div>
<footer class="bg-med-blue text-white pt-5 pb-4">
    <div class="container">
        <div class="row g-4 border-bottom border-white-50 pb-4">
            
            <!-- Información Institucional -->
            <div class="col-lg-5 col-md-12">
                <img src="/assets/images/logo_blanco.webp" alt="Lib Laboratorios" height="50" class="p-2 rounded mb-3">
                <p class="text-light small pe-lg-4">
                    Somos un laboratorio clínico integrado por un equipo humano calificado y comprometido a satisfacer totalmente al cliente promoviendo servicios de salud que proporcionan información confiable y oportuna.
                </p>
                <p class="fw-bold text-med-yellow mb-0 small">
                    <i class="bi bi-geo-alt-fill me-1"></i> Presencia en: Córdoba, Orizaba, Fortín y Zongolica.
                </p>
            </div>

            <!-- Acreditaciones y Certificaciones -->
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <h6 class="text-med-yellow fw-bold text-uppercase mb-3">Calidad Certificada</h6>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <img src="/assets/images/iso.webp" alt="ISO 9001 QR" width="80" class="img-fluid rounded border">
                    <div class="text-start">
                        <span class="d-block fw-bold small">Certificado ISO</span>
                        <span class="text-light" style="font-size: 0.75rem;">Sistema de Gestión de Calidad</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <img src="/assets/images/pacal.webp" alt="PACAL" width="80" class="img-fluid rounded border">
                    <div class="text-start">
                        <span class="d-block fw-bold small">Galardón PACAL</span>
                        <span class="text-light" style="font-size: 0.75rem;">Aseguramiento de Calidad</span>
                    </div>
                </div>
            </div>

            <!-- Contacto y Enlaces -->
            <div class="col-lg-4 col-md-6">
                <h6 class="text-med-yellow fw-bold text-uppercase mb-3">Contacto & Legal</h6>
                <ul class="list-unstyled text-light small d-flex flex-column gap-2">
                    <li>
                        <i class="bi bi-telephone-fill me-2 text-med-yellow"></i> 
                        <strong>Comunícate:</strong> <a href="tel:2717298227" class="text-white text-decoration-none">271 729 8227</a>
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill me-2 text-med-yellow"></i> <strong>Email:</strong> 
                        <a href="mailto:liblaboratoriosmx@gmail.com" class="text-white text-decoration-none">liblaboratoriosmx@gmail.com</a>
                    </li>
                    <li class="pt-2">
                        <a href="/assets/docs/aviso_privacidad_lib_laboratorios.pdf" class="text-light text-decoration-underline" target="_blank">
                            <i class="bi bi-shield-lock me-1"></i> Aviso de Privacidad
                        </a>
                    </li>
                    <li>
                        <a href="/assets/docs/politica_calidad.pdf" class="text-light text-decoration-underline" target="_blank">
                            <i class="bi bi-journal-check me-1"></i> Políticas del Sistema de Gestión de Calidad
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row pt-3 align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="small text-light mb-0">&copy; <?php echo date('Y'); ?> Lib Laboratorios. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                <span class="small text-light">Análisis clínicos de rutina, alta y gran especialidad</span>
            </div>
        </div>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Cerrar Offcanvas al hacer clic en un enlace de navegación interna
        const navLinks = document.querySelectorAll('#mobileMenu a[href^="#"]');
        const offcanvasEl = document.getElementById('mobileMenu');
        
        if (offcanvasEl) {
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
                    if (bsOffcanvas) {
                        bsOffcanvas.hide();
                    }
                });
            });
        }
    });
</script>
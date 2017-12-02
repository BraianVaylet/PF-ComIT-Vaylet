  <?php require 'views\head.php'; ?>
  <?php require  'views\barra_nav.php'; ?>
  
          <!-- CONTENIDO-PAGINA PRINCIPAL-->
          <div class="box" id="box">
              <div class="contenido_img">
                <div class="contenido">
                   <h1 class="titulo_principal">WolaloW</h1>
                   <p class="texto_principal">Servicios de Cadeterías y Fletes</p>
                   <p class="texto_principal">todos en un mismo lugar</p>
                </div>
              </div>
          </div>

  <?php require 'views\footer.php'; ?>
  <?php require 'views\script.php'; ?>
  <?php if (session()): ?>
    <script src="<?php echo RUTA; ?>/js/misArchivos/principal.js" charset="utf-8"></script>
  <?php endif ?> -->

  </body>
  </html>

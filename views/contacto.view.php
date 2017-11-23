  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>
  <main>

    <!-- DONDE SE MUESTRA LA INFORMACION DE CONTACTO -->
  <div class="contacto_flex_box">
      <div class="info_contacto_box">
        <h4>Información de Contacto de <?php echo $usuario ?></h4>
        <ul class="collection with-header">
          <li class="collection-item">
            <div class="flex_ico">
              <div class="icono">
                <i class="medium material-icons">contact_mail</i>
              </div>
              <div class="">
                <p class="texto"><?php echo $correo; ?></p>
              </div>
            </div>
          </li>

          <li class="collection-item">
            <div class="flex_ico">
              <div class="icono">
                <?php if ($whatsapp == 1) {
                    ?> <i class="fa fa-whatsapp fa-4x" aria-hidden="true"></i><?php
                } else {
                  ?> <i class="medium material-icons">contact_phone</i> <?php
                }?>
              </div>
              <div class="">
                <p class="texto"><?php echo $telefono; ?></p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="footer_contacto_box">
        <div class="">
          <a href="<?php echo RUTA; ?>/index.php">CONTINUAR</a>
        </div>
        <div class="">
          <p class="text_modal_footer">En la brevedad nos pondremos en contacto con usted para verificar si el servicio se llevó a cabo</p>
        </div>
      </div>
  </div>

  </main>


  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
  <?php if (session()): ?>
  <script src="<?php echo RUTA; ?>/js/misArchivos/principal.js" charset="utf-8"></script>
  <?php endif ?>


  </body>
  </html>

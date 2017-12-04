<?php require(RAIZ . '/views/head.php');
      require(RAIZ . '/views/barra_nav.php');?>

    <!-- ESTE ES EL PERFIL COMPLETO DE CADA CLIENTE. -->
      <main class="z-depth-3">
        <div class="contenedor">
          <div class="row ">
            <div class="box_flex">
              <div class="col s12 m12 l6">
                    <div class="perfil_titulo">
                      <h2 class="titulo">Bienvenido <?php echo $usuario_cliente; ?></h2>
                    </div>
                    <div class="z-depth-3">
                      <ul class="collection with-header info1">
                          <li class="collection-item">
                            <div class="flex_ico">
                              <div class="icono">
                                <i class="material-icons">contact_mail</i>
                              </div>
                              <div class="">
                                <p class="texto"><?php echo $correo; ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="collection-item">
                            <div class="flex_ico">
                              <div class="icono">
                                <i class="material-icons">contact_phone</i>
                              </div>
                              <div class="">
                                <p class="texto"><?php echo $telefono; ?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
              </div>
              <div class="col s12 m6 l3">
                <h3>¿Buscas algún servicio de Cadetería?</h3>
                <a href="../secciones/cadeterias.php" class=""><i class="material-icons icono_para_cliente">directions_bike</i></a>
              </div>
              <div class="col s12 m6 l3">
                <h3>¿Buscas algún servicio de Fletes?</h3>
                <a href="../secciones/fletes.php" class=""><i class="material-icons icono_para_cliente">local_shipping</i></a>
              </div>
            </div>
        </div>
      </div>
    </main>

  <?php require(RAIZ . '/views/footer.php');
        require(RAIZ . '/views/script.php');
        if (session()): ?>
          <script src="<?php echo RUTA; ?>/js/misArchivos/contenido_cerrar.js" charset="utf-8"></script>
  <?php endif ?>
  </body>
  </html>

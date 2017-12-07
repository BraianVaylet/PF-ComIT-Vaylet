  <?php require(RAIZ . '/views/head.php');?>
  <?php require(RAIZ . '/views/barra_nav.php');?>

    <div class="s12 m12 l12 titulo_top">
        <p class="texto_cadeterias">Bienvenido a nuestro servicio de</p>
        <div class="titular_fletes_foto z-depth-3">
            <div class="s12 m12 l12 titular_fletes_fondo">
              <h2 class="titular">Fletes</h2>
            </div>
        </div>
    </div>

    <main>
      <div class="row">

        <!-- CONTENIDO LATERAL =============================================================================== -->
        <div class="show-on-large">
          <?php require(RAIZ . '/secciones/views/contenido_lateral.view.php'); ?>
        </div>

        <!-- CONTENIDO PRINCIPAL =============================================================================== -->
        <div class="col s12 m12 l9 prueba">
            <div class="row">

            <!-- BUSCADOR VIEWS =============================================================================== -->
            <?php require(RAIZ . '/views/buscar_ciudad.view.php'); ?>

            <!-- ORDENAR =============================================================================== -->
            <!-- proximamente -->

            <!-- OPCION#2 -->
            <?php
            while ($row_u = $res_usuarios->fetch() and $row_s = $res_servicios->fetch() and $row_m = $res_montos->fetch()) {
              $id = $row_u[0];
              $usuario = $row_u[1];
              $foto_perfil = $row_u[8];
              $ciudad = $row_u[9];
              $calificacion = $row_u[10];
              $vidas = $row_u[11];
              $soy_cadete = $row_u[12];
              $soy_flete = $row_u[13];
              $fecha_ingreso = $row_u[14];

              $am = $row_s[5];
              $pm = $row_s[6];

              $modo_monto_cadete = $row_m[1];
              $modo_monto_flete = $row_m[2];
              $monto_cadeterias = $row_m[3];
              $monto_fletes = $row_m[4];
              $extracto = $row_m[5];

              // Muestro la fecha de ingreso en un formato mas piola.
              $fecha_ingreso = fecha($fecha_ingreso);

              //BUSCAR POR CIUDAD ===============================================================================
              require(RAIZ . '/buscar_ciudad.php');

              //defino la url en una variable para poder pasar el id por medio de la url.
              $url = "http://localhost/PF-ComIT-Vaylet/contenido_cliente.php?id_del_usuario=" .$id;

              // ELIJO QUE MOSTRAR: (DEFINO MIS CONDICIONES)
              if ($vidas > 0 and $soy_flete == 1 and $ciudad == $ciudad_buscada ) {
            ?>

            <div class="row z-depth-3 box_post">
              <div class="col s12 m3 l3 foto_post">
                  <h4 class="title post_titulo"><?php echo $usuario;?></h4>
                  <div class="calificacion_post">
                    <?php for ($i=0; $i < $calificacion; $i++) { ?>
                      <i class="small material-icons">grade</i>
                    <?php } ?>
                  </div>

                  <div class="">
                      <img src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" alt="" class="responsive-img img_post">
                  </div>
              </div>

              <div class="col s12 m6 l6 ">
                <div class="info">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header servicios">
                        <?php if ($soy_cadete == 1  && $soy_flete == 0) { ?>
                          <span> Servicios de Cadeterías</span>
                        <?php } ?>
                        <?php if ($soy_cadete == 0  && $soy_flete == 1) { ?>
                          <span> Servicios de Fletes</span>
                        <?php } ?>
                      <?php if ($soy_cadete == 1 && $soy_flete == 1) {  ?>
                          <span> Servicios de Cadeterías y Fletes</span>
                        <?php } ?>
                      </div>
                    </li>

                    <li>
                      <div class="collapsible-header"><i class="material-icons">account_box</i>Acerca de <i class="tiny material-icons">arrow_drop_down</i></div>
                      <div class="collapsible-body"><span><p class="texto_post"><?php echo $extracto; ?></p></span></div>
                    </li>

                    <li>
                      <div class="collapsible-header"><i class="material-icons">access_time</i>
                              <?php if ($am == 1 && $pm == 0) { ?>
                                <span> Solo de mañana</span>
                              <?php } ?>
                              <?php if ($am == 0 && $pm == 1) { ?>
                                <span> Solo de tarde</span>
                              <?php } ?>
                            <?php if ($am == 1 && $pm == 1) {  ?>
                                <span> de mañana y de tarde</span>
                              <?php } ?>
                      </div>
                    </li>

                    <li>
                      <div id="ciudad_usuario" class="collapsible-header"><i class="material-icons">place</i><?php echo $ciudad ?></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col s12 m3 l3 monto_post">
                    <div class="servicios">
                      <?php if ($soy_cadete == 1) { ?> <span class="icono_servicio"><i class="medium material-icons desactivado">directions_bike</i></span> <?php } ?>
                      <?php if ($soy_flete == 1) { ?> <span class="icono_servicio"><i class="medium material-icons activado">local_shipping</i></span> <?php } ?>
                    </div>
                    <div class="">
                      <h4 class="text_monto_post">$<?php echo $monto_cadeterias; ?></h4>
                      <p> <?php echo $modo_monto_cadete; ?></p>
                    </div>
                    <div class="btn_post_2">
                        <!-- MANDO EL ID POR LA URL -->
                        <a id="<?php echo $id?>" href="<?php echo $url; ?>" class="btn waves-effect waves-light btn_contactar">Contactar</a>
                    </div>
              </div>
            </div>
        <?php
          }
        }

        require(RAIZ . '/views/paginacion.view.php');
        ?>


        </div>
      </div>

    </main>
    <?php require(RAIZ . '/views/footer.php');?>
    <?php require(RAIZ . '/views/script.php');?>
    <?php if (session()): ?>
      <script src="<?php echo RUTA; ?>/js/misArchivos/principal.js" charset="utf-8"></script>
    <?php endif ?>
    <script src="<?php echo RUTA; ?>/js/misArchivos/secc_cadeterias.js" charset="utf-8"></script>
    </body>
    </html>

<?php require(RAIZ . '/views/head.php');
      require(RAIZ . '/views/barra_nav.php');?>

    <div class="s12 m12 l12 titulo_top">
        <p class="texto_cadeterias">Bienvenido a nuestro servicio de</p>
        <div class="titular_cadeterias_foto z-depth-3">
            <div class="s12 m12 l12 titular_cadeterias_fondo">
              <h2 class="titular">Cadeterías</h2>
            </div>
        </div>
    </div>
    <main>
      <div class="row">
        <!-- CONTENIDO LATERAL =============================================================================== -->
        <div class="col s12 m12 l3 sec1">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text z-depth-3">
              <span class="card-title">Importante!!!</span>
              <p class="texto">Próximamente estarán habilitadas dos secciones para compartir publicidad!!!</p>
              <p class="texto">Tendrás la oportunidad de publicitar tus servicios, los de tu local o empresa en nuestra página!!!</p>
              <p class="texto">Si te interesa que tus servicios sean vistos por más personas ponte en contacto con nosotros cuanto antes para contarte como hacerlo!!!</p>
            </div>
            <div class="card-action">
              <a class="modal-trigger nav_menu_enlace" href="#modal_contacto_index">Contáctanos</a>
            </div>
          </div>

          <!-- PLUGIN FACEBOOK -->
          <div class="video-container face_post">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWolaloW-358020271326859%2F&tabs=timeline&width=390&height=853&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="390" height="853" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>

        </div>

        <!-- CONTENIDO PRINCIPAL =============================================================================== -->
        <div class="col s12 m12 l9 prueba">


          <!-- BUSCADOR VIEWS =============================================================================== -->
          <?php require(RAIZ . '/views/buscar_ciudad.view.php'); ?>

          <!-- ORDENAR =============================================================================== -->
          <!-- proximamente -->

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
            if ($vidas > 0 and $soy_cadete == 1 and $ciudad == $ciudad_buscada ) {
          ?>

            <div class="row z-depth-3 box_post">
              <div class="col s12 m6 l3 foto_post">
                  <div class="">
                      <img src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" alt="" class="responsive-img img_post">
                  </div>

                  <div class="servicios">
                    <?php if ($soy_cadete == 1) { ?> <span class="icono_servicio"><i class="small material-icons">directions_bike</i></span> <?php } ?>
                    <?php if ($soy_flete == 1) { ?> <span class="icono_servicio"><i class="small material-icons">local_shipping</i></span> <?php } ?>
                  </div>
              </div>

              <div class="col s12 m6 l9 ">
                <div class="col s12 m12 l9">
                    <h4 class="title post_titulo"><?php echo $usuario;?></h4>
                    <div class="calificacion_post">
                      <?php for ($i=0; $i < $calificacion; $i++) {
                          ?><i class="small material-icons">grade</i> <?php
                        } ?>
                    </div>
                  </div>
                  <div class="col s12 m12 l3 monto_post">
                        <h4 class="text_monto_post">$<?php echo $monto_cadeterias; ?></h4>
                        <p> <?php echo $modo_monto_cadete; ?></p>
                  </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="info">
                      <ul class="collapsible" data-collapsible="accordion">
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
                <div class="col s12 m12 l12">
                  <div class="btn_post_2">
                      <!-- MANDO EL ID POR LA URL -->
                      <a id="<?php echo $id?>" href="<?php echo $url; ?>" class="waves-effect waves-light btn">Contactar</a>
                  </div>
              </div>
            </div>
        <?php
          }
        }
        ?>

        </div>
      </div>
    </main>
    <?php require(RAIZ . '/views/footer.php');
          require(RAIZ . '/views/script.php');
          if (session()): ?>
            <script src="<?php echo RUTA; ?>/js/misArchivos/principal.js" charset="utf-8"></script>
    <?php endif ?>
    <script src="<?php echo RUTA; ?>/js/misArchivos/secc_cadeterias.js" charset="utf-8"></script>
    </body>
    </html>

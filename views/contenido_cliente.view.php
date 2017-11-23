  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>

    <!-- ESTE PERFIL ES EL Q VERAN LOS CLIENTES -->
    <main class="z-depth-3">
      <div class="contenedor">
        <div class="row ">
          <div class="col s4">
            <div class="sec1 z-depth-3">
              <div class="perfil_top">
                <div class="perfil_usuario">
                  <h2 class="titulo_perfil"><?php echo $usuario; ?></h2>
                </div>
                <div class="perfil_foto">
                  <img src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" class="responsive-img circle z-depth-3 foto_perfil" alt="IMAGEN DE PERFIL">
                </div>
                <div class="">
                  <p>En WololoW desde: <?php echo $fecha_ingreso; ?></p>
                </div>
              </div>
            </div>

            <div class="z-depth-3">
              <ul class="collection with-header">
                <li class="collection-item">
                  <div class="">
                    <?php for ($i=0; $i < $calificacion; $i++) { ?>
                      <i class="small material-icons calificacion">grade</i>
                    <?php	} ?>
                  </div>
                </li>
              </ul>
            </div>

            <div class="info z-depth-3">
              <ul class="collection with-header">
                <li class="collection-item">
                  <div class="flex_ico">
                    <div class="icono">
                      <i class="medium material-icons">home</i>
                    </div>
                    <div class="">
                      <p class="texto">de <?php echo $ciudad; ?></p>
                    </div>
                  </div>
                </li>

                <li class="collection-item">
                  <div class="flex_ico">
                    <div class="icono">
                      <i class="medium material-icons">cake</i>
                    </div>
                    <div class="">
                      <p class="texto"><?php echo $fecha_nacimiento; ?></p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="info z-depth-3">
              <ul class="collection with-header">
                <li class="collection-header"><h4>Servicios:</h4></li>
                <li class="collection-item">
                    <div class="flex_ico">
                      <?php
                          if ($soy_cadete == 1) { ?>
                            <div class="icono">
                              <i class="medium material-icons">directions_bike</i>
                            </div>
                            <div>
                              <p class="texto">$<?php echo $monto_cadeterias; ?></p>
                              <p><?php echo $modo_monto_cadete; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </li>

                <li class="collection-item">
                    <div class="flex_ico">
                      <?php
                          if ($soy_flete == 1) { ?>
                            <div class="icono">
                              <i class="medium material-icons">local_shipping</i>
                            </div>
                            <div>
                              <p class="texto">$<?php echo $monto_fletes; ?></p>
                              <p><?php echo $modo_monto_flete; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col s8">
            <div class="sec2">
                <div class="z-depth-3 perfil_contactar ">
                  <!-- Modal Trigger -->
                  <div class="flex_btn">
                    <div class="icono">
                      <i class="large material-icons">call</i>
                    </div>
                    <div class="">
                      <a class="modal-trigger boton" href="#modal_pregunta">Contactar</a>
                    </div>
                  </div>
                </div>

                <!-- Modal Structure -->
                <div id="modal_pregunta" class="modal">
                  <div class="modal-content">
                    <h4>¿Está completamente seguro de contactar a <?php  echo "</br>" . $usuario ?>?</h4>
                  </div>
                  <div class="modal-footer preguntas_enlaces">
                    <?php $url = "http://localhost/PF-ComIT-Vaylet/contacto.php?id_del_usuario=" .$id_del_usuario; ?>

                    <a class="modal-trigger" href="<?php echo $url; ?>"><div class="flex_ico_pregunta">
                      <div class="icono">
                        <i class="large material-icons">call</i>
                      </div>
                      <div class="">
                        <span class="texto_pregunta">Si, estoy seguro</span>
                      </div>
                    </div></a>

                    <a class="" href="<?php echo RUTA; ?>/index.php"><div class="flex_ico_pregunta">
                      <div class="icono_no">
                        <i class="large material-icons">call_end</i>
                      </div>
                      <div class="">
                        <span class="texto_pregunta">No, prefiero seguir buscando</span>
                      </div>
                    </div></a>
                  </div>
                </div>

                <div class="info z-depth-3">
                  <ul class="collection with-header">

                      <li class="collection-item">
                        <div class="flex_ico">
                          <div class="icono">
                            <i class="medium material-icons">access_time</i>
                          </div>
                          <div class="">
                            <?php if ($am == 1 && $pm == 0) {
                              ?>
                                <p class="texto">Solo de mañana</p>
                              <?php
                            }  ?>
                            <?php if ($am == 0 && $pm == 1) {
                              ?>
                                <p class="texto">Solo de tarde</p>
                              <?php
                            }  ?>
                            <?php if ($am == 1 && $pm == 1) {
                              ?>
                                <p class="texto">de mañana y de tarde</p>
                              <?php
                            }  ?>
                          </div>
                        </div>
                      </li>

                      <li class="collection-item">
                        <div class="flex_ico">
                          <div class="icono">
                            <i class="medium material-icons">directions_car</i>
                          </div>
                          <div class="">
                            Sobre su Vehículo:<p class="texto"><?php echo $tipo; ?></p>
                          </div>
                        </div>
                      </li>

                      <li class="collection-item">
                        <div class="flex_ico">
                          <div class="icono">
                            <i class="medium material-icons">view_compact</i>
                          </div>
                          <div class="">
                            Capacidad:<p class="texto"><?php echo $capacidad; ?></p>
                          </div>
                        </div>
                      </li>

                      <li class="collection-item">
                        <div class="flex_ico">
                          <div class="icono">
                            <i class="medium material-icons">work</i>
                          </div>
                          <div class="">
                            Algunos de sus Trabajos:<p class="texto"><?php echo $trabajos; ?></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="info z-depth-3">
                    <ul class="collection with-header">

                      <li class="collection-header"><h4>Acerca de sus servicios:</h4></li>
                      <li class="collection-item"><div>Distancia Mínima:<p class="texto"><?php echo $dist_min; ?> km</p><a class="secondary-content"></a></div></li>
                      <li class="collection-item"><div>Distancia Máxima:<p class="texto"><?php echo $dist_max; ?> km</p><a class="secondary-content"></a></div></li>
                      <li class="collection-item"><div>Peso Máximo:<p class="texto"><?php echo $peso_max; ?> kg</p><a class="secondary-content"></a></div></li>
                      <li class="collection-item">
                        <div>
                          <?php if ($dist_trabajo == 1) {
                            ?>
                              <p class="texto">Realiza trabajos fuera de <?php echo $ciudad; ?></p>
                            <?php
                          } else {
                               ?>
                                <p class="texto">Realiza trabajos únicamente en <?php echo $ciudad; ?></p>
                              <?php
                          }; ?>
                        </div>
                      </li>

                      <li class="collection-item">
                        <div>
                          <?php if ($encargos == 1) {
                            ?>
                              <p class="texto">Realizo encargos en el día</p>
                            <?php
                          } else {
                               ?>
                                <p class="texto">Solo realizo encargos con previa anticipación</p>
                              <?php
                          }; ?>
                        </div>
                      </li>

                  </ul>
                </div>
            </div>
        </div>

        <div class="col s12">
          <div class="sec2">
              <div class="info z-depth-3">
                <ul class="collection with-header">
                    <li class="collection-header"><h4>Más Información: </h4></li>
                    <li class="collection-item"><div><p class="texto"><?php echo $extracto; ?></p><a href="#!" class="secondary-content"></a></div></li>
                </ul>
              </div>
          </div>
      </div>

        <div class="col s12">
          <div class="mensaje_admin z-depth-3">
            <p>La edición de los perfiles está en construcción, esta es una versión básica, pero funcional. Acordate que si tenés dudas, siempre podés consultarnos en el chat de abajo. ¡Disculpá las molestias!</p>
          </div>
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

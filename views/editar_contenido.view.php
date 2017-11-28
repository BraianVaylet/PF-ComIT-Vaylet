  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>

    <!-- EDICION DE LOS DATOS DEL PERFIL DE CADA USUARIO. -->
      <main class="z-depth-3">
        <div class="contenedor">

          <div class="row">
            <div class="col s12">
              <p class="texto">Puedes escojer que tabla quieres modificar</p>
            </div>
            <!-- Tabla Usuarios -->
            <div class="col s12 m6 l4">

                <div class="info z-depth-3">
  								<ul class="collection with-header">
                    <a href="editar_contenido/editar_usuarios.php" class="secondary-content editar_tablas"> <i class="medium material-icons ico_edit">edit</i></a>
                    <li class="collection-header"><h4>Contenido 1/3</h4></li>

                    <!-- usuario -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Usuario:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $usuario; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- correo -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Correo:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $correo; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- password -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Password:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $password; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- telefono -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Teléfono:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $telefono; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- whatsapp -->
                    <li class="collection-item">
                      <div class="flex_ico">
                        <div class="icono">
                          <p class="texto">Whatsapp:</p>
                        </div>
                        <div class="">
                          <?php if ($whatsapp == 1) { ?>
                            <p class="texto">si</p>
                          <?php } else { ?>
                            <p class="texto">no</p>
                          <?php }; ?>
                        </div>
                      </div>
                    </li>

                    <!-- dni -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">DNI:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $dni; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- fecha Nacimiento -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Edad:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $fecha_nacimiento; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- foto_perfil -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Foto de perfil:</p>
  											</div>
  											<div class="">
  												<img src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" class="responsive-img z-depth-3" width="100" alt="IMAGEN DE PERFIL">
  											</div>
  										</div>
  									</li>

                    <!-- ciudad -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Ciudad:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $ciudad; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- fecha Nacimiento -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Servicios:</p>
  											</div>
  											<div class="">
                          <?php if ($soy_cadete == 1): ?>
                            <p class="texto">Cadeterías</p>
                          <?php endif; ?>
                          <?php if ($soy_flete == 1): ?>
                            <p class="texto">Fletes</p>
                          <?php endif; ?>
  											</div>
  										</div>
  									</li>


              </ul>
            </div>
            </div>

            <!-- Tabla Servicios -->
            <div class="col s12 m6 l4">

                <div class="info z-depth-3">
  								<ul class="collection with-header">
                    <a href="editar_contenido/editar_servicios.php" class="secondary-content editar_tablas"> <i class="medium material-icons ico_edit">edit</i></a>
                    <li class="collection-header"><h4>Contenido 2/3</h4></li>

                    <!-- distancia minima -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Dist. mínima:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $dist_min; ?> km</p>
  											</div>
  										</div>
  									</li>

                    <!-- distancia maxima -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Dist. Máxima:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $dist_max; ?> km</p>
  											</div>
  										</div>
  									</li>

                    <!-- trabajos fuera de la ciudad -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Trabajos fuera de la ciudad:</p>
  											</div>
  											<div class="">
                          <?php if ($dist_trabajo == 1) { ?>
                            <p class="texto">si</p>
                          <?php } else { ?>
                            <p class="texto">no</p>
                          <?php }; ?>
  											</div>
  										</div>
  									</li>

                    <!-- peso maximo -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Peso Máximo:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $peso_max; ?> kg</p>
  											</div>
  										</div>
  									</li>

                    <!-- horario -->
                    <li class="collection-item">
                      <div class="flex_ico">
                        <div class="icono">
                          <p class="texto">Horario:</p>
                        </div>
                        <div class="">
                          <?php if ($am == 1 && $pm == 0) {
                            ?>
                              <p class="texto">mañana</p>
                            <?php
                          }  ?>
                          <?php if ($am == 0 && $pm == 1) {
                            ?>
                              <p class="texto">tarde</p>
                            <?php
                          }  ?>
                          <?php if ($am == 1 && $pm == 1) {
                            ?>
                              <p class="texto">mañana - tarde</p>
                            <?php
                          }  ?>
                        </div>
                      </div>
                    </li>

                    <!-- encargos en el día -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Encargos en el día:</p>
  											</div>
  											<div class="">
                          <?php if ($encargos == 1) { ?>
                            <p class="texto">si</p>
                          <?php } else { ?>
                            <p class="texto">no</p>
                          <?php }; ?>
  											</div>
  										</div>
  									</li>

                    <!-- vehiculo -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Vehículo:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $tipo; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- capacidad -->
                    <li class="collection-item">
                      <div class="flex_ico">
                        <div class="icono">
                          <p class="texto">Capacidad:</p>
                        </div>
                        <div class="">
                          <p class="texto"><?php echo $capacidad; ?></p>
                        </div>
                      </div>
                    </li>

                    <!-- trabajos -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Trabajos:</p>
  											</div>
  											<div class="">
  												<p class="texto"><?php echo $trabajos; ?></p>
  											</div>
  										</div>
  									</li>

                    <!-- carnet -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Carnet de conducir:</p>
  											</div>
  											<div class="">
                          <?php if ($carnet == 1) { ?>
                            <p class="texto">si</p>
                          <?php } else { ?>
                            <p class="texto">no</p>
                          <?php }; ?>
  											</div>
  										</div>
  									</li>
              </ul>
            </div>
            </div>

            <!-- Tabla Montos -->
            <div class="col s12 m6 l4">

                <div class="info z-depth-3">
  								<ul class="collection with-header">
                    <a href="editar_contenido/editar_montos.php" class="secondary-content editar_tablas"> <i class="medium material-icons ico_edit">edit</i></a>
                    <li class="collection-header"><h4>Contenido 3/3</h4></li>

                    <!-- monto cadeterias -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Costo cadeterías:</p>
  											</div>
  											<div class="">
                          <?php
  														if ($soy_cadete == 1) { ?>
  																<p class="texto">$<?php echo $monto_cadeterias; ?></p>
  																<p><?php echo $modo_monto_cadete; ?></p>
  													<?php } ?>
  											</div>
  										</div>
  									</li>

                    <!-- distancia maxima -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Costo fletes:</p>
  											</div>
  											<div class="">
                          <?php
  														if ($soy_flete == 1) { ?>
  																<p class="texto">$<?php echo $monto_fletes; ?></p>
  																<p><?php echo $modo_monto_flete; ?></p>
  													<?php } ?>
  											</div>
  										</div>
  									</li>

                    <!-- Extracto -->
                    <li class="collection-item">
  										<div class="flex_ico">
  											<div class="icono">
  												<p class="texto">Extracto:</p>
  											</div>
  											<div class="">
                          <p class="texto">$ <?php echo $extracto; ?></p>
  											</div>
  										</div>
  									</li>
              </ul>
            </div>
            </div>



        </div>
        <div class="back">
            <a class="link_back" href="<?php echo RUTA; ?>/contenido.php">volver</a>
        </div>
      </main>

  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
  <?php if (session()): ?>
    <script src="<?php echo RUTA; ?>/js/misArchivos/contenido_cerrar.js" charset="utf-8"></script>
  <?php endif ?>

  </body>
  </html>

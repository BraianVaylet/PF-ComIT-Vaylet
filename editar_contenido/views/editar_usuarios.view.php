  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>
      <main class="z-depth-3">
          <div class="contenedor">
                    <h2 class="titulo">Editar contenido 1/3</h2>

                    <div class="pregunta">
                        <p class="texto_small">Vuelva a completar los campos de la seccion 1/3 del registro</p>
                        <h4 class="titulo_pregunta">Modifique el contenido de los campos que quiera modificar.</h4>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario col" name="login" enctype="multipart/form-data" id="formulario"> <!--enctype="multipart/form-data" : para q el form pueda subir archivos -->
                      <div class="row">
                        <div class="col s12 m12 l12">
                            <ul class="collection with-header">

                                <!-- usuario -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Usuario:</p>
                                      <p class="texto"><?php echo $usuario; ?></p>
                                    </div>
                                    <div class="">
                                      <input type="text" name="usuario" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su nombre y luego separado por un espacio su apellido" id="usuario" value="<?php if(!$enviado && isset($usuario)) { echo $usuario; } else { echo $usuario; } ?>">
                                      <!-- ERROR -->
                                      <?php if(!empty($error_usuario)): ?>
                                        <p class="texto_error" id="error_usuario"><?php echo $error_usuario; ?></p>
                                      <?php endif; ?>
                                    </div>
                                  </div>
                                </li>

                                <!-- Correo -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono_no">
                                      <p class="texto_desactivado">Correo:</p>
                                      <p class="texto_desactivado"><?php echo $correo; ?></p>
                                    </div>
                                    <div class="">
                                      <input type="email" name="correo" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="No se puede modificar este campo" id="correo" value="<?php echo $correo;?>" disabled>
                                    </div>
                                  </div>
                                </li>

                                <!-- Password -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Password:</p>
                                      <p class="texto"><?php echo $password; ?></p>
                                    </div>
                                    <div class="">
                                      <input type="password" name="password" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese una contraseña para su cuenta" id="password" placeholder="mínimo 6 caracteres con letras y números.">
                                      <!-- ERROR -->
                                      <?php if(!empty($error_password)): ?>
                                        <p class="texto_error" id="error_password"><?php echo $error_password; ?></p>
                                      <?php endif; ?>

                                      <input type="password" name="password2" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Solo para verificar, vuelva a ingresar la contraseña" id="password2" placeholder="verifique su contraseña">
                                      <!-- ERROR -->
                                      <?php if(!empty($error_password2)): ?>
                                        <p class="texto_error" id="error_password2"><?php echo $error_password2; ?></p>
                                      <?php endif; ?>
                                    </div>
                                  </div>
                                </li>

                                <!-- telefono -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Teléfono:</p>
                                      <p class="texto"><?php echo $telefono; ?></p>
                                      <p class="texto">Whatsapp? <?php if ($whatsapp == 1) { echo "SI"; } else { echo "NO"; }?></p>
                                    </div>
                                    <div class="">
                                      <input type="text" name="telefono" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su numero de teléfono para poder ser contactado por los usuarios" value="<?php if(!$enviado && isset($telefono)) { echo $telefono; } else { echo $telefono; } ?>">
                                      <!-- ERROR -->
                                      <?php if(!empty($error_telefono)): ?>
                                        <p class="texto_error" id="error_telefono"><?php echo $error_telefono; ?></p>
                                      <?php endif; ?>
                                      <input type="checkbox" name="whatsapp" class="" id="whatsapp">
                                      <label class="label_textarea campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione esta casilla si utiliza whatsapp para comunicarse con sus clientes" for="whatsapp">usas whatsapp?</label>
                                    </div>
                                  </div>
                                </li>

                                <!-- dni -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono_no">
                                      <p class="texto_desactivado">Dni:</p>
                                      <p class="texto_desactivado"><?php echo $dni; ?></p>
                                    </div>
                                    <div class="">
                                      <input type="text" name="dni" class="campo tooltipped" id="dni" data-position="bottom" data-delay="50" data-tooltip="No puede modificar este campo" value="<?php echo $dni; ?>" disabled>

                                    </div>
                                  </div>
                                </li>

                                <!-- edad -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Fecha de Nacimiento:</p>
                                      <p class="texto"><?php echo $fecha_nacimiento; ?></p>
                                    </div>
                                    <div class="">
                                      <input type="text" name="fecha_nacimiento" class="datepicker campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingrese su fecha de nacimiento" id="fecha_nacimiento" value="<?php if(!$enviado && isset($fecha_nacimiento)) { echo $fecha_nacimiento; } else { echo $fecha_nacimiento; } ?>">
                                      <!-- ERROR -->
                                      <?php if(!empty($error_fecha_nacimiento)): ?>
                                        <p class="texto_error" id="error_fecha_nacimiento"><?php echo $error_fecha_nacimiento; ?></p>
                                      <?php endif; ?>

                                    </div>
                                  </div>
                                </li>

                                <!-- Foto -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Foto de perfil:</p>
                                      <img src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" class="responsive-img z-depth-3" width="100" alt="IMAGEN DE PERFIL">
                                    </div>
                                    <div class="">
                                      <div class="file-field input-field">
                                          <div class="btn">
                                              <span>Foto perfil</span>
                                              <input type="file" name="foto_perfil" class="campo tooltipped" data-position="left" data-delay="50" data-tooltip="Seleccione un foto de su Ordenador o Movil" id="foto_perfil" placeholder="Seleccione una Foto de Perfil" value="<?php if(!$enviado && isset($foto_perfil)) { echo $foto_perfil; } else { echo $foto_perfil; } ?>">
                                          </div>
                                          <div class="file-path-wrapper">
                                              <input class="file-path validate" type="text">
                                          </div>
                                      </div>

                                    </div>
                                  </div>
                                </li>

                                <!-- ciudad -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Ciudad:</p>
                                      <p class="texto"><?php echo $ciudad; ?></p>
                                    </div>
                                    <div class="">
                                      <div class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione su ciudad">
                                        <select class="icons" id="ciudad" name="ciudad[]">
                                            <option value="" disabled selected></option>
                                            <option value="Bahia Blanca">Bahía Blanca</option>
                                            <option value="Punta Alta">Punta Alta</option>
                                            <option value="Buenos Aires">Buenos Aires</option>
                                            <option value="La Plata">La Plata</option>
                                            <option value="Sierra de la Ventana">Sierra de la Ventana</option>
                                            <option value="Villa Ventana">Villa Ventana</option>
                                            <option value="Monte Hermosos">Monte Hermosos</option>
                                        </select>
                                        <!-- ERROR -->
                                        <?php if(!empty($error_ciudad)): ?>
                                          <p class="texto_error" id="error_ciudad"><?php echo $error_ciudad; ?></p>
                                        <?php endif; ?>
                                      </div>

                                    </div>
                                  </div>
                                </li>

                                <!-- servicios -->
                                <li class="collection-item">
                                  <div class="flex_ico_ed">
                                    <div class="icono">
                                      <p class="texto">Servicios:</p>
                                      <p class="texto"><?php if ($soy_cadete == 1) { echo "Cadete"; } ?> </p>
                                      <p class="texto"><?php if ($soy_flete == 1) { echo "Flete"; } ?> </p>
                                    </div>
                                    <div class="">
                                      <div class="row check tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione el/los servicios que usted realiza">
                                          <div class="col s4 offset-s5">
                                              <input type="checkbox" class="checkbox" name="soy_cadete" id="soy_cadete" />
                                              <label for="soy_cadete">Cadeterías</label>
                                              <br>
                                              <input type="checkbox" class="checkbox" name="soy_flete" id="soy_flete" />
                                              <label for="soy_flete">Fletes</label>
                                          </div>
                                          <!-- ERROR -->
                                          <?php if(!empty($error_checkbox)): ?>
                                            <p class="texto_error" id="error_checkbox"><?php echo $error_checkbox; ?></p>
                                          <?php endif; ?>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        </div>
                      </div>

                      <button class="btn waves-effect waves-light btn_guardar" type="submit" id="submit" class="submit" name="button">Guardar cambios<i class="material-icons right">check</i></button>

                      <div class="mensaje_admin z-depth-3">
                        <p>Hola!, soy el Administrador...</p>
                        <p>Si la ciudad que quiere ingresar no se encuentra no se preocupe, utilice el botón de contacto en la parte superior derecha para avisarnos y poder agregarla a nuestra base de datos.</p>
                        <p>Muchas gracias!!!</p>
                      </div>

                        <?php if(!empty($errores)) { ?>
                            <div class="error">
                                <ul>
                                  <?php echo $errores; ?>
                                </ul>
                              </div>
                        <?php } ?>
                    </form>
                  <div class="back">
                      <a class="link_back" href="<?php echo RUTA; ?>/editar_contenido.php">volver</a>
                  </div>
          </div>
      </main>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
  <!-- Se hizo con PHP la validacion del registro -->
  <!-- <script src="<?php echo RUTA; ?>/js/misArchivos/registro_primero.js" charset="utf-8"></script> -->
  </body>
  </html>

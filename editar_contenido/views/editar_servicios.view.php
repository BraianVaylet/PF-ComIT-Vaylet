  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>
      <main class="z-depth-3">
          <div class="contenedor">
                    <h2 class="titulo">Editar contenido 2/3</h2>

                    <div class="pregunta">
                        <p class="texto_small">Vuelva a completar los campos de la seccion 2/3 del registro</p>
                        <h4 class="titulo_pregunta">Modifique el contenido de los campos que quiera modificar.</h4>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario col" name="login" enctype="multipart/form-data" id="formulario"> <!--enctype="multipart/form-data" : para q el form pueda subir archivos -->
                        <!-- LIMITES ==============================================================================-->
                          <div class="row tres_campos">
                            <div class="input-field col s4">
                                <h4 class="label_textarea" for="dist_min">Distancia mínima, en Km *</h4>
                                <input type="text" name="dist_min" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el número correspondiente a la Distancia Mínima que Usted realiza en [Km]" value="<?php if(!$enviado && isset($dist_min)) { echo $dist_min; } else { echo $dist_min; } ?>">
                                <!-- ERROR -->
                                <?php if(!empty($error_dist_min)): ?>
                                  <p class="texto_error" id="error_dist_min"><?php echo $error_dist_min; ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="input-field col s4">
                                <h4 class="label_textarea" for="dist_max">Distancia máxima, en Km *</h4>
                                <input type="text" name="dist_max" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el número correspondiente a la Distancia Máxima que Usted realiza, en [Km]" value="<?php if(!$enviado && isset($dist_max)) { echo $dist_max; } else { echo $dist_max; }?>">
                                <!-- ERROR -->
                                <?php if(!empty($error_dist_max)): ?>
                                  <p class="texto_error" id="error_dist_max"><?php echo $error_dist_max; ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="input-field col s4">
                                <h4 class="label_textarea" for="peso_max">Peso máximo, en Kg *</h4>
                                <input type="text" name="peso_max" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el número correspondiente a el Peso Máximo que Usted con el que Usted Trabaja, en [Kg]" value="<?php if(!$enviado && isset($peso_max)) { echo $peso_max; } else { echo $peso_max; }?>">
                                <!-- ERROR -->
                                <?php if(!empty($error_peso_max)): ?>
                                  <p class="texto_error" id="error_peso_max"><?php echo $error_peso_max; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- PREGUNTAS ============================================================================== -->
                        <div class="registro_check tres_campos">
                          <div class="row">
                            <div class="col s4">
                                <input type="checkbox" name="dist_trabajo" class="" id="dist_trabajo">
                                <label class="label_textarea campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione esta casilla si usted realiza trabajos fuera de su ciudad de origen" for="dist_trabajo">Realiza servicios fuera de la ciudad?</label>
                            </div>
                            <div class="col s4">
                                <input type="checkbox" name="encargos" class="" id="encargos">
                                <label class="label_textarea campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione esta casilla si usted realiza encargos en el mismo día" for="encargos">Acepta servicios en el mismo día y sin anticipación?</label>
                            </div>
                            <div class="col s4">
                                <input type="checkbox" name="carnet" class="" id="carnet">
                                <label class="label_textarea campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Tiene carnet de conducir?" for="carnet">Posee Carnet de conducir?</label>
                            </div>
                          </div>
                        </div>

                        <!-- HORARIO ============================================================================== -->
                        <div class="pregunta">
                            <h4 class="titulo_pregunta">Horario*</h4>
                        </div>

                        <div class="registro_check">
                          <div class="row check tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione el horario de trabajo que usted realiza">
                              <div class="col s4 offset-s5">
                                  <input type="checkbox" class="checkbox" name="am" id="am" />
                                  <label for="am">de mañana</label>
                                  <br>
                                  <input type="checkbox" class="checkbox" name="pm" id="pm" />
                                  <label for="pm">de tarde</label>
                              </div>
                              <!-- ERROR -->
                              <?php if(!empty($error_checkbox_horario)): ?>
                                <p class="texto_error" id="error_checkbox_horario"><?php echo $error_checkbox_horario; ?></p>
                              <?php endif; ?>
                          </div>
                        </div>

                        <!-- ACERCA DE ============================================================================== -->
                        <div class="pregunta">
                            <h4 class="titulo_pregunta">Acerca de:</h4>
                        </div>

                        <div class="row tres_campos">
                            <div class="input-field col s12 m12 l6 offset-l3">
                              <h4 class="label_textarea">Vehículo*</h4>
                              <select class="icons" id="tipo" name="tipo[]">
                                  <option value="" disabled selected></option>
                                  <option value="Bicicleta">Bicicleta</option>
                                  <option value="Moto">Moto</option>
                                  <option value="Automovil">Automovil</option>
                                  <option value="Camioneta">Camioneta</option>
                                  <option value="Camión">Camión</option>
                                  <option value="Combi">Combi</option>
                                  <option value="Colectivo">Colectivo</option>
                                  <option value="Otro">Otro</option>
                              </select>
                              <!-- ERROR -->
                              <?php if(!empty($error_tipo)): ?>
                                <p class="texto_error" id="error_tipo"><?php echo $error_tipo; ?></p>
                              <?php endif; ?>
                            </div>

                            <div class="input-field col s12 m12 l6 offset-l3">
                              <h4 class="label_textarea">Trabajos*</h4>
                              <textarea name="trabajos" placeholder="pagos de servicios, trámites bancarios, mudanzas, etc."class="materialize-textarea tooltipped" data-position="bottom" data-delay="50" data-tooltip="Describa con sus palabras los trabajos que realiza" id="trabajos" rows="8" cols="80" data-length="1500"><?php echo $trabajos; ?></textarea>
                              <!-- ERROR -->
                              <?php if(!empty($error_trabajos)): ?>
                                <p class="texto_error" id="error_trabajos"><?php echo $error_trabajos; ?></p>
                              <?php endif; ?>
                        </div>
                      </div>

                      <button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Guardar cambios<i class="material-icons right">check</i></button>

                        <?php if(!empty($errores)): ?>
                            <div class="error">
                                <ul>
                                  <?php echo $errores; ?>
                                </ul>
                              </div>
                        <?php endif; ?>
                    </form>

                  <div class="back">
                      <a class="link_back" href="<?php echo RUTA; ?>/editar_contenido.php">volver</a>
                  </div>
          </div>
      </main>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
  <!-- Se hizo con PHP la validacion del registro -->
  <!-- <script src="<?php echo RUTA; ?>/js/misArchivos/registro_segundo.js" charset="utf-8"></script> -->
  </body>
  </html>
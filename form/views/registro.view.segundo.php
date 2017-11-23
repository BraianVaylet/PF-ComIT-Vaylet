  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>
      <main class="z-depth-3">
          <div class="contenedor">
                    <h1 class="titulo">Registro 2 de 3</h1>

                    <div class="pregunta">
                        <p class="texto_small">¿Sigues aquí?, genial!!! continuemos con el registro...</p>
                        <h4 class="titulo_pregunta">En esta sección vamos a pedir que nos cuentes un poco sobre los servicios que ofreces</h4>
                        <p class="texto_small">Queremos ayudarte a contactar nuevos potenciales clientes, para ello queremos conocerte un poco más y que nos cuentes sobre tu metodología de trabajo</p>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario col" name="login" enctype="multipart/form-data" id="formulario"> <!--enctype="multipart/form-data" : para q el form pueda subir archivos -->
                        <!-- LIMITES ==============================================================================-->
                        <div class="pregunta">
                            <h4 class="titulo_pregunta">¿Qué límites poseen tus servicios?</h4>

                        </div>

                        <div class="row tres_campos">
                            <div class="input-field col s4">
                                <label class="label_textarea" for="dist_min">Distancia mínima, en Km *</label>
                                <input type="text" name="dist_min" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el número correspondiente a la Distancia Mínima que Usted realiza en [Km]" value="<?php if(!$enviado && isset($dist_min)) { echo $dist_min; }?>">
                                <!-- ERROR -->
						                    <p class="texto_error" id="error_dist_min"></p>
                            </div>
                            <div class="input-field col s4">
                                <label class="label_textarea" for="dist_max">Distancia máxima, en Km *</label>
                                <input type="text" name="dist_max" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el número correspondiente a la Distancia Máxima que Usted realiza, en [Km]" value="<?php if(!$enviado && isset($dist_max)) { echo $dist_max; }?>">
                                <!-- ERROR -->
						                    <p class="texto_error" id="error_dist_max"></p>
                            </div>
                            <div class="input-field col s4">
                                <label class="label_textarea" for="peso_max">Peso máximo, en Kg *</label>
                                <input type="text" name="peso_max" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el número correspondiente a el Peso Máximo que Usted con el que Usted Trabaja, en [Kg]" value="<?php if(!$enviado && isset($peso_max)) { echo $peso_max; }?>">
                                <!-- ERROR -->
						                    <p class="texto_error" id="error_peso_max"></p>
                            </div>
                        </div>

                        <!-- PREGUNTAS ============================================================================== -->
                        <div class="pregunta">
                            <h4 class="titulo_pregunta">Tenemos algunas preguntas más que hacerle....</h4>
                        </div>

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
                            <h4 class="titulo_pregunta">¿En qué horarios suele realizar sus servicios? *</h4>
                        </div>

                        <div class="registro_check">
                          <div class="row check tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione el/los servicios que usted realiza">
                              <div class="col s4 offset-s5">
                                  <input type="checkbox" class="checkbox" name="am" id="am" />
                                  <label for="am">de mañana</label>
                                  <br>
                                  <input type="checkbox" class="checkbox" name="pm" id="pm" />
                                  <label for="pm">de tarde</label>
                              </div>
                              <!-- ERROR -->
                              <p class="texto_error" id="error_checkbox_horario"></p>
                          </div>
                        </div>

                        <!-- ACERCA DE ============================================================================== -->
                        <div class="pregunta">
                            <h4 class="titulo_pregunta">Que nos puede contar acerca de:</h4>
                        </div>

                        <div class="row tres_campos">
                            <div class="input-field col s4">
                              <h4 class="label_textarea">Su vehículo *</h4>
                              <textarea name="tipo" placeholder="bici, moto, auto, camión, etc."class="materialize-textarea tooltipped" data-position="bottom" data-delay="50" data-tooltip="Describa su vehiculo: tipo (bici, moto, auto, camioneta, camión, etc)" id="tipo" rows="8" cols="80" data-length="1500" value="<?php if(!$enviado && isset($tipo)) { echo $tipo; }?>"></textarea>
                              <!-- ERROR -->
                              <p class="texto_error" id="error_tipo"></p>
                            </div>
                            <div class="input-field col s4">
                              <h4 class="label_textarea">La capacidad o espacio físico *</h4>
                              <textarea name="capacidad" placeholder="bolsos, mochila, baúl, caja, carro, acoplado, etc."class="materialize-textarea tooltipped" data-position="bottom" data-delay="50" data-tooltip="Describa su capacidad (mochila, bolso, caja, carro, etc)" id="capacidad" rows="8" cols="80" data-length="1500" value="<?php if(!$enviado && isset($capacidad)) { echo $capacidad; }?>"></textarea>
                              <!-- ERROR -->
                              <p class="texto_error" id="error_capacidad"></p>
                            </div>
                            <div class="input-field col s4">
                              <h4 class="label_textarea">Ejemplos de trabajos que realiza *</h4>
                              <textarea name="trabajos" placeholder="pagos de servicios, trámites bancarios, mudanzas, etc."class="materialize-textarea tooltipped" data-position="bottom" data-delay="50" data-tooltip="Describa con sus palabras los trabajos que realiza" id="trabajos" rows="8" cols="80" data-length="1500" value="<?php if(!$enviado && isset($trabajos)) { echo $trabajos; }?>"></textarea>
                              <!-- ERROR -->
                              <p class="texto_error" id="error_trabajos"></p>
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Continuar<i class="material-icons right">arrow_forward</i></button>

                        <?php if(!empty($errores)): ?>
                            <div class="error">
                                <ul>
                                  <?php echo $errores; ?>
                                </ul>
                              </div>
                        <?php endif; ?>
                    </form>

                  <div class="back">
                      <a class="link_back" href="../contenido.segundo.php">volver</a>
                  </div>
          </div>
      </main>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
  <script src="<?php echo RUTA; ?>/js/misArchivos/registro_segundo.js" charset="utf-8"></script>
  </body>
  </html>

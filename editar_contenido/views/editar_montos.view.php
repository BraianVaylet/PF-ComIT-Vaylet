  <?php require(RAIZ . '/views/head.php');?>
  <?php require(RAIZ . '/views/barra_nav.php');?>
        <main class="z-depth-3">
            <div class="contenedor">
                      <h2 class="titulo">Editar contenido 3/3</h2>

                      <div class="pregunta">
                          <p class="texto_small">Vuelva a completar los campos de la seccion 3/3 del registro</p>
                          <h4 class="titulo_pregunta">Modifique el contenido de los campos que quiera modificar.</h4>
                      </div>

                      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario col" name="login" enctype="multipart/form-data" id="formulario">

                      <!-- MONTO ============================================================================== -->
                      <?php if ($soy_cadete == 0) { ?>
                        <div class="row tres_campos">
                          <div class="col s4 pregunta">
                            <h4 class="titulo_monto">Usted NO realiza servicios de Cadeterías.</h4>
                          </div>
                        </div>
                      <?php } else { ?>
                      <!-- PARA CADETERIA -->
                          <div class="row tres_campos">
                            <div class="col s4 pregunta">
                              <h4 class="titulo_monto">Su servicio de Cadeterías:</h4>
                            </div>
                            <div class="col s4">
                              <h4 class="label_textarea">Monto en $:</h4>
                              <input type="text" name="monto_cadeterias" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el valor del servicio" id="monto_cadeterias" value="<?php if(!$enviado && isset($monto_cadeterias)) { echo $monto_cadeterias; } else { echo $monto_cadeterias; } ?>">
                              <!-- ERROR -->
                              <?php if(!empty($error_monto_cadeterias)): ?>
                                <p class="texto_error" id="error_monto_cadeterias"><?php echo $error_monto_cadeterias; ?></p>
                              <?php endif; ?>
                            </div>

                            <div class="col s4">
                              <h4 class="label_textarea">Modalidad:</h4>
                              <div class="campo tooltipped" data-position="top" data-delay="50" data-tooltip="Seleccione la modalidad de cobro de tu servicio">
                                <select class="icons" id="modo_monto_cadete" name="modo_monto_cadete[]">
                                    <option value="" disabled selected></option>
                                    <option value="Por Hora">Por Hora</option>
                                    <option value="Por todo el Servicio">Por todo el Servicio</option>
                                    <option value="Por Kilometro">Por Kilometro</option>
                                </select>
                                <!-- ERROR -->
                                <?php if(!empty($error_modo_monto_cadete)): ?>
                                  <p class="texto_error" id="error_modo_monto_cadete"><?php echo $error_modo_monto_cadete; ?></p>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                      <?php }?>

                      <?php if ($soy_flete == 0) { ?>
                        <div class="row tres_campos">
                          <div class="col s4 pregunta">
                            <h4 class="titulo_monto">Usted NO realiza servicios de Fletes.</h4>
                          </div>
                        </div>
                      <?php } else { ?>
                       <!-- PARA FLETES -->
                           <div class="row tres_campos">
                             <div class="col s4 pregunta">
                               <h4 class="titulo_monto">Su servicio de Fletes:</h4>
                             </div>
                             <div class="col s4">
                               <h4 class="label_textarea">Monto en $:</h4>
                               <input type="text" name="monto_fletes" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese solo el valor del servicio" id="monto_fletes" value="<?php if(!$enviado && isset($monto_fletes)) { echo $monto_fletes; } else { echo $monto_fletes; } ?>">
                               <!-- ERROR -->
                               <?php if(!empty($error_monto_fletes)): ?>
                                 <p class="texto_error" id="error_monto_fletes"><?php echo $error_monto_fletes; ?></p>
                               <?php endif; ?>
                             </div>

                             <div class="col s4">
                               <h4 class="label_textarea">Modalidad:</h4>
                               <div class="campo tooltipped" data-position="top" data-delay="50" data-tooltip="Seleccione la modalidad de cobro de tu servicio">
                                 <select class="icons" id="modo_monto_flete" name="modo_monto_flete[]">
                                     <option value="" disabled selected></option>
                                     <option value="Por Hora">Por Hora</option>
                                     <option value="Por todo el Servicio">Por todo el Servicio</option>
                                     <option value="Por Kilometro">Por Kilometro</option>
                                 </select>
                                 <!-- ERROR -->
                                 <?php if(!empty($error_modo_monto_flete)): ?>
                                   <p class="texto_error" id="error_modo_monto_flete"><?php echo $error_modo_monto_flete; ?></p>
                                 <?php endif; ?>
                               </div>
                             </div>
                           </div>
                      <?php }?>

                      <!-- EXTRACTO ============================================================================== -->
                      <div class="row tres_campos">
                        <div class="col s8 offset-s2">
                          <h4 class="label_textarea">Extracto:</h4>
                          <textarea name="extracto" class="materialize-textarea tooltipped" data-position="bottom" data-delay="50" data-tooltip="ingrese un pequeño extracto contando acerca de usted, esto será visto por todos los usuarios, sea cuidadoso al redactarlo" id="extracto$extracto" rows="8" cols="80" data-length="1500" value="<?php if(!$enviado && isset($extracto)) { echo $extracto; }?>"><?php  echo $extracto; ?></textarea>
                          <!-- ERROR -->
                          <?php if(!empty($error_extracto)): ?>
                            <p class="texto_error" id="error_extracto"><?php echo $error_extracto; ?></p>
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
      <?php require(RAIZ . '/views/footer.php');?>
      <?php require(RAIZ . '/views/script.php');?>
      <script src="<?php echo RUTA; ?>/js/misArchivos/registro_tercero.js" charset="utf-8"></script>
      </body>
  </html>

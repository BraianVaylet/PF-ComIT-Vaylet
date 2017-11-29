<!-- BARRA DE NAVEGACION: -->
          <!-- MENU -->
          <header>
            <div class="navbar-fixed">
              <nav class="nav_menu">
                  <div class="nav-wrapper">
                    <a href="<?php echo RUTA; ?>" class="brand-logo center">WolaloW</a>
                      <ul class="left hide-on-med-and-down">
                          <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace" href="#!" data-activates="dropdown1"><i class="material-icons">menu</i></a>

                            <?php if (session()): ?>
                              <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace" data-activates="dropdown0" href=""><i class="material-icons">person</i></a></li>
                            <?php endif ?>

                      </ul>
                      <ul class="right">
                        <li class="nav_menu_icono"><a class="nav_menu_enlace" href="<?php echo RUTA; ?>/acerca_de.view.php">Acerca de nosotros</a></li>
                        <li class="nav_menu_icono"><a class="nav_menu_enlace"href="<?php echo RUTA; ?>/ayuda.view.php"><i class="material-icons">live_help</i></a></li>

                        <!-- Modal Trigger -->
                        <li class="nav_menu_icono"><a class="modal-trigger nav_menu_enlace" href="#modal_contacto_index"><i class="material-icons">email</i></a></li>
          						</ul>
                  </div>
              </nav>
            </div>

            <!-- SECCIONES DE BARRA DE USUARIO -->
            <ul id='dropdown0' class='dropdown-content menu_down_perfil'>
                <li><a class="texto_enlace_perfil" href="<?php echo RUTA; ?>/contenido.php">Mi Perfil</a></li>
                <li class="divider"></li>
                <li><a class="texto_enlace_perfil" href="<?php echo RUTA; ?>/cerrar.php">Cerrar Sesión</a></li>
            </ul>

            <!-- SECCIONES DE BARRA PRINCIPAL -->
            <ul id="dropdown1" class="dropdown-content menu_down_principal">
                <div class="menu_principal">
                  <li class="divider"></li>
                  <li><a class="text_principal enlace_cadete" id="enlace_cadete" href="<?php echo RUTA; ?>secciones/cadeterias.php">Cadeterías</a></li>
                  <li class="divider"></li>
                  <li><a class="text_principal enlace_flete" id="enlaenlace_fletece_" href="<?php echo RUTA; ?>secciones/fletes.php">Fletes</a></li>
                </div>
                <div class="menu_secundario">
                  <li class="divider"></li>
                  <li><a class="text_secundario enlace_iniciar" id="enlace_iniciar" href="<?php echo RUTA; ?>/form/login.php">Iniciar Sesión</a></li>
                  <li><a class="text_secundario enlace_volver" id="enlace_volver" href="<?php echo RUTA; ?>/../index.php">volver</a></li>
                </div>
            </ul>

            <!-- FORMULARIO DE CONTACTO: -->
            <!-- Modal Structure -->
            <div id="modal_contacto_index" class="modal">
              <div class="modal-content">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="contacto">
                    <div class="pregunta_contac">
                        <h4 class="titulo_pregunta">Contacto:</h4>
                    </div>

                    <div class="row">
    									<div class="col s6 offset-s3">
                        <label class="label_textarea" for="usuario">Nombre:</label>
                        <input type="text" name="usuario" placeholder="Ingrese su nombre." class="campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingrese su nombre completo" id="usuario">
    									</div>
                    </div>

                    <div class="row">
      								<div class="col s6 offset-s3">
      										<label for="correo" class="label_textarea" data-error="incoorecto, vuelva a intentarlo" data-success="perfecto,gracias">Correo: </label>
      										<input type="email" name="correo" placeholder="Ingrese su correo." class="campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingresesu correo electrónico" id="correo">
                    </div>

                    <div class="row">
      								<div class="col s6 offset-s3">
                        <h4 class="label_textarea">Mensaje:</h4>
                        <textarea name="tipo" placeholder="Deje su mensaje."class="materialize-textarea tooltipped" data-position="right" data-delay="50" data-tooltip="Dejenos un mensaje para poder ayudarlo" id="tipo" rows="8" cols="80" data-length="1500" ></textarea>
                      </div>
                    </div>

                </form>
              </div>
              <div class="modal-footer">
                <button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Enviar<i class="material-icons right">send</i></button>
              </div>
            </div>
          </div>
          </header>

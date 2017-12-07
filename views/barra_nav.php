<!-- BARRA DE NAVEGACION: -->
          <!-- MENU -->
          <header>
            <div class="navbar-fixed">
              <nav class="nav_menu">
                  <div class="nav-wrapper">
                    <div class="hide-on-small-only">
                      <a href="<?php echo RUTA; ?>" class="brand-logo center">WolaloW</a>
                    </div>
                    <div class="hide-on-med-and-up">
                      <ul id="nav-mobile" class="center show-on-small">
                        <li class="nav_menu_icono"><a href="<?php echo RUTA; ?>/secciones/cadeterias.php" class="nav_menu_enlace"><i class="material-icons">directions_bike</i></a></li>
                        <li class="nav_menu_icono"><a href="<?php echo RUTA; ?>/secciones/fletes.php" class="nav_menu_enlace"><i class="material-icons">local_shipping</i></a></li>
                        <?php if (session()) { ?>
                          <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace"  href="<?php echo RUTA; ?>/contenido.php"><i class="tiny material-icons">person</i></a></li>
                        <?php } else { ?>
                          <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace"  href="<?php echo RUTA; ?>/form/login.php"><i class="tiny material-icons">perm_identity</i></a></li>
                        <?php } ?>
                        <li class="nav_menu_icono"><a href="<?php echo RUTA; ?>/index.php" class="nav_menu_enlace"><i class="material-icons">W</i></a></li>
                        <?php if (session()): ?>
                          <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace" data-activates="dropdown0" href="<?php echo RUTA; ?>/cerrar.php"><i class="tiny material-icons">call_made</i></a></li>
                        <?php endif ?>
                      </ul>
                    </div>
                      <ul class="hide-on-small-only left">
                          <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace" href="#!" data-activates="dropdown1"><i class="material-icons">menu</i></a>

                            <?php if (session()): ?>
                              <li class="nav_menu_icono"><a class="dropdown-button nav_menu_enlace" data-activates="dropdown0" href=""><i class="material-icons">person</i></a></li>
                            <?php endif ?>

                      </ul>
                      <ul class="right hide-on-med-and-down">
                        <li class="nav_menu_icono"><a class="nav_menu_enlace" href="<?php echo RUTA; ?>/acerca_de.view.php">Acerca de nosotros</a></li>
                        <li class="nav_menu_icono"><a class="nav_menu_enlace"href="<?php echo RUTA; ?>/ayuda.view.php"><i class="tiny material-icons">live_help</i></a></li>
                        <!-- Modal Trigger -->
                        <li class="nav_menu_icono"><a class="modal-trigger nav_menu_enlace" href="#modal_contacto_index"><i class="tiny material-icons">email</i></a></li>

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
                  <li><a class="text_principal enlace_cadete" id="enlace_cadete" href="<?php echo RUTA; ?>/secciones/cadeterias.php">Cadeterías</a></li>
                  <li class="divider"></li>
                  <li><a class="text_principal enlace_flete" id="enlaenlace_fletece_" href="<?php echo RUTA; ?>/secciones/fletes.php">Fletes</a></li>
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
              <div class="modal-content formulario_contacto">
                <?php require(RAIZ . 'formulario_contacto.php'); ?>
              </div>
            </div>
          </div>
          </header>

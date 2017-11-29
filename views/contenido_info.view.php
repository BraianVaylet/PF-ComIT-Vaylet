

  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>


        <main>
          <div class="z-depth-3 contenedor">
            <h4 class="titulo">Hola, <?php echo $usuario; ?></h4>
            <p class="texto">Bienvenid@ a WolaloW, ¡Nos alegra informarle que su registro se completó de forma exitosa y como agradecimiento ha sido recompensado con 10 vistas! ¡Así que felicitaciones!</p>
            <p class="texto">Sabemos que tienes dudas, así que puedes ingresar en todo momento en la sección ayudas en la parte superior y entérate de cómo es el funcionamiento de las vistas, tu calificación y todo lo referido a la página.</p>
            </p>

            <div class="contenido_info z-depth-3">
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <img class="circle z-depth-3 responsive-img" width="250" height="250" src="<?php echo RUTA; ?>/fotos_perfiles/<?php echo $foto_perfil; ?>" alt="foto de perfil de <?php echo $usuario; ?>">
                      <ul class="">
                        <h3>¡Genial! ya tienes 10 vistas</h3>
                        <li class="">
                          <div class="mostrar_vidas">
                            <?php for ($i=0; $i < $vidas; $i++) {
                                ?> <i class="small material-icons vidas">visibility</i> <?php
                              } ?>
                          </div>
                        </li>
                      </ul>
                      <ul>
                        <h3>Tu calificacion actual es de</h3>
                        <li class="mostrar_calificacion">
                          <div>
                            <?php for ($i=0; $i < $calificacion; $i++) {
                                ?><i class="small material-icons calificacion">grade</i> <?php
                              } ?>
                          </div>
                          <p class="texto">Consigue que tus clientes te recomienden positivamente para ganar reputación</p>
                        </li>
                        <li>
                          <div class="boton_continuar">
                            <a class="continuar" href="contenido.php">CONTINUAR</a>
                          </div>
                        </li>
                      </ul>
                    </div>
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
          </div>

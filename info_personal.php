  <?php session_start(); ?>
  <?php require 'funciones.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>


      <main>
        <div class="contenedor">
            <h3 class="titulo">¿Quiénes somos?</h3>
            <p class="texto_small">Por el momento, solo yo :p</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


              <div class="row">
                <div class="col s12 m12 l12 info_de_mi">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <img class="responsive-img circle" width="250" src="img/yo.jpg" alt="foto perfil de Braian D. Vaylet">
                      <span class="card-title">Braian D. Vaylet</span>
                          <p>Soy estudiante de la Universidad Nacional del Sur, en 2017 decidí cambiar de rumbo y comencé a dedicarme al desarrollo web, esta página nació como proyecto final para uno de los cursos que me encontraba haciendo en ese momento.</p>
                    </div>
                        <div class="card-action redes-sociales">
                          <a href="https://www.facebook.com/bvaylet" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="https://twitter.com/BraianVaylet" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#" class="mail" onclick="Materialize.toast('braianvaylet@gmail.com', 4000)"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                          <a href="https://www.linkedin.com/in/braian-dami%C3%A1n-vaylet-8b999783/" class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

            <div class="pregunta">
                <p class="texto_small">¿Quieres formar parte del desarrollo de WololoW?</p>
                <h4 class="titulo_pregunta">ponte en contacto!!!</h4>
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

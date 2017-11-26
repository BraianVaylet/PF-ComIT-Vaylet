  <?php session_start(); ?>
  <?php require 'funciones.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>


      <main>
        <div class="contenedor">
            <h3 class="titulo">¿Quiénes forman parte de WololoW?</h3>
            
            <p>Soy un alumno de la Universidad Nacional del Sur que decidió buscar una solución para resolver un problema muy común para las personas en su día a día, como lo es la búsqueda de un servicio de cafeterías o de fletes en la ciudad en la que se encuentra. La idea tomo forma tras la necesidad de presentar un proyecto final en un curso de desarrollo web que me encontraba haciendo, utilizando los conocimientos aprendidos y tras muchas horas de trabajo fue como nació WololoW, el lugar donde encontraran a los cadetes y fletes que tanto estaban necesitando.</p>

            <div class="row">
              <div class="col s12 m12 l12 info_de_mi">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <img class="responsive-img circle" width="200" src="img/yo.jpg" alt="foto perfil de Braian D. Vaylet">
                    <span class="card-title">Braian D. Vaylet</span>
                        <p>Nacido en Carhué, es estudiante de la Universidad Nacional del Sur, en 2017 decidió cambiar de rumbo y comenzó a dedicarse al desarrollo web, esta página nació como proyecto final para un curso de PHP organizado por ComIT que fue dictado ese año en Bahía Blanca.</p>
                  </div>
                      <div class="card-action redes-sociales">
                        <a href="#acerca_de_mail" class="mail" id="acerca_de_mostrar_mail"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/braian-dami%C3%A1n-vaylet-8b999783/" class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <h4 id="acerca_de_mail">braianvaylet@gmail.com</h4>
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

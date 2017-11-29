  <?php session_start(); ?>
  <?php require 'funciones.php'; ?>

  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>

    <main>
      <div class="contenedor">
        <div class="row">
          <div class="col s12 m12 l12">
            <h4 class="titulo_pregunta">¿Cómo funcionan WolaloW?</h4>
            <p class="texto">El objetivo de WolaloW es el de poner en contacto a las personas con quienes se dedican a brindar servicios de cadetería y/o fletes en la ciudad.</p>
          </div>
        </div>

        <div class="row">
            <div class="col s12 m12 l6">
              <div class="pregunta">
                  <h4 class="titulo_pregunta">¿Qué son las vistas y cómo funcionan?</h4>
              </div>
              <p class="texto">WolaloW funciona con un sistema de vistas, las vistas equivalen a mostrar la información de contacto de un usuario a otro. Los usuarios registrados tienen un máximo de 10 vistas, cada vez que su información de contacto es revelada a algún potencial cliente se pierde una de ellas.</p>
              <p class="texto">Cuando el usuario se quede sin vistas ya no estará visible en las secciones de WolaloW, para recuperar las vistas necesitara ponerse en contacto con el administrador de la página.</p>
            </div>

            <div class="col s12 m12 l6">
              <div class="pregunta">
                  <h4 class="titulo_pregunta">¿Qué sucede si el cliente no se pone en contacto conmigo, pierdo una de las vistas?</h4>
              </div>
                <p class="texto">Si, si algún usuario lo contacta se le revelara su información de contacto, si el servicio no se llevó a cabo porque el usuario no se contactó la vista se perderá de todas formas</p>
                <p class="texto">De todos modos, ese no es un verdadero problema, ya que el objetivo de WolaloW es que las personas tengan un método de comunicación con ustedes, nosotros les acercamos la información de contacto del usuario que ellos elijan o prefieran.</p>
            </div>

            <div class="col s12 m12 l6">
              <div class="pregunta">
                  <h4 class="titulo_pregunta">¿Qué me asegura de que las vistas que perdí se convirtieron en futuros potenciales clientes?</h4>
              </div>
                <p class="texto">No te preocupes, cada vez que alguien acceda a tu información de contacto te avisaremos por mail con el nombre de usuario de esa persona, una vez se terminen las 10 vistas te enviaremos un informe con las 10 personas que accedieron a tu información.</p>
                <p class="texto">Recuerda que nuestro trabajo es ayudar a las personas a que te contacten más fácil, el tuyo será convertir a esas personas en tus clientes.</p>
            </div>

            <div class="col s12 m12 l6">
              <div class="pregunta">
                  <h4 class="titulo_pregunta">Conseguí muchos clientes por medio de WolaloW pero me quede sin vistas ¿Cómo consigo más de esas?</h4>
              </div>
                <p class="texto">No hay de qué preocuparse, solo tienes que ir a tu perfil y desde el tendrás acceso a un formulario de contacto donde podrás escribirnos para recuperar las vistas que perdiste.</p>
                <p class="texto">¡Felicitaciones por cierto!  si gastaste las 10 vistas significa que hay 10 personas que ahora poseen tu información de contacto, ellos podrán volver a solicitar tus servicios o recomendarte a alguien más. </p>
            </div>
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

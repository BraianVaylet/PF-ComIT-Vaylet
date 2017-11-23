  <?php session_start(); ?>
  <?php require 'funciones.php'; ?>

  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>

    <main>
      <div class="contenedor">
        <div class="row">
          <div class="col s12 m12 l6">
            <div class="pregunta">
                <h4 class="titulo_pregunta">¿Cómo funcionan las vistas?</h4>
            </div>
            <p class="texto">WololoW funciona con un sistema de vistas, un usuario estará activo en la página mientras este posea vistas, una vez se les terminen, su información de contacto no podrá ser vista por nadie más.</p>
          </div>

          <div class="col s12 m12 l6">
            <div class="pregunta">
                <h4 class="titulo_pregunta">¿Cómo pierdo vistas?</h4>
            </div>
              <p class="texto">Cada vez que un cliente entra a la página, podrá escoger entre todos los usuarios activos al de su preferencia.
              Para poder ponerse en contacto con el necesitara entrar a su perfil y hacer uso del botón contactar, el cual le revelara la información de contacto, número de teléfono y correo electrónico de ese usuario.</p>
              <p class="texto">Cada vez que un usuario es contactado este pierde una vida. Lo cual no es algo malo, si te empezaste a quedar sin vidas es porque tu perfil es muy popular, todos quieren y prefieren tus servicios, ¡genial!, ¿no?</p>
          </div>

          <div class="col s12 m12 l6">
            <div class="pregunta">
                <h4 class="titulo_pregunta">¿Qué sucede si el cliente no se pone en contacto conmigo, pierdo una de las vistas?</h4>
            </div>
              <p class="texto">No te preocupes, si el cliente no comenta tus servicios en los próximos 5 días nos pondremos en contacto con él, si no se comunicó por no necesitar del servicio te devolvemos la vista. </p>
          </div>

          <div class="col s12 m12 l6">
            <div class="pregunta">
                <h4 class="titulo_pregunta">Conseguí muchos clientes por medio de WololoW ¿Cómo consigo más vistas?</h4>
            </div>
              <p class="texto">¡No hay nada más feo que quedarte sin vistas!, pero no te preocupes!!! Quedarte sin vistas no es algo malo, por el contrario, significa que tu perfil está haciendo muchos nuevos clientes, así que ¡felicitaciones!
              ¡Si quieres más vistas ponte en contacto con nosotros cuanto antes!, no hay tiempo que perder!!!</p>
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

  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\head.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\barra_nav.php'; ?>

      <main class="z-depth-3">
          <div class="contenedor">
            <h1 class="titulo">Registro clientes</h1>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" id="formulario">
              <div class="row dos_campos">
                <div class="input-field col s6 offset-s3">
                  <label class="label_textarea" for="usuario_cliente">¿Cuál es tu nombre y apellido? *</label>
                  <input type="text" name="usuario_cliente" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su nombre y luego separado por un espacio su apellido" id="usuario_cliente" value="<?php if(!$enviado && isset($usuario_cliente)) { echo $usuario_cliente; }?>">
                  <!-- ERROR -->
                  <?php if(!empty($error_usuario_cliente)): ?>
                    <p class="texto_error" id="error_usuario_cliente"><?php echo $error_usuario_cliente; ?></p>
                  <?php endif; ?>
                </div>
              </div>

                <div class="row dos_campos">
                  <div class="input-field col s4 offset-s2">
                    <label for="correo" class="label_textarea" data-error="incorrecto, vuelva a intentarlo" data-success="perfecto, gracias">Ingrese su correo * </label>
                    <input type="email" name="correo" class="campo tooltipped" data-position="right" data-delay="50" data-tooltip="Ingrese su correo electrónico" id="correo" value="<?php if(!$enviado && isset($correo)) { echo $correo; }?>">
                    <!-- ERROR -->
                    <?php if(!empty($error_correo)): ?>
                      <p class="texto_error" id="error_correo"><?php echo $error_correo; ?></p>
                    <?php endif; ?>
                  </div>

                  <div class="input-field col s4 ">
                      <label class="label_textarea" for="telefono">¿Cuál es su número de teléfono? *</label>
                      <input type="text" name="telefono" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese su numero de teléfono para poder ser contactado por los usuarios" value="<?php if(!$enviado && isset($telefono)) { echo $telefono; }?>">
                      <!-- ERROR -->
                      <?php if(!empty($error_telefono)): ?>
                        <p class="texto_error" id="error_telefono"><?php echo $error_telefono; ?></p>
                      <?php endif; ?>
                  </div>
                </div>

                <div class="row dos_campos">
                    <div class="input-field col s4 offset-s2">
                        <label class="label_textarea" for="password">Ingrese una contraseña *</label>
                        <input type="password" name="password" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingrese una contraseña para su cuenta" id="password">
                        <!-- ERROR -->
                        <?php if(!empty($error_password)): ?>
                          <p class="texto_error" id="error_password"><?php echo $error_password; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="input-field col s4 ">
                        <label class="label_textarea" for="password2">Verificar contraseña *</label>
                        <input type="password" name="password2" class="campo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Solo para verificar, vuelva a ingresar la contraseña" id="password2">
                        <!-- ERROR -->
                        <?php if(!empty($error_password2)): ?>
                          <p class="texto_error" id="error_password"><?php echo $error_password2; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" id="submit" class="submit" name="button">Enviar<i class="material-icons right">send</i></button>
            </form>

            <div class="texto">
                <p class="texto_small">¿ Ya tienes una cuenta ?</p>
            </div>
            <div class="reg">
                <a class="link_reg" href="login.php">Iniciar sesión</a>
            </div>
            <div class="back">
                <a class="link_back" href="../index.php">volver</a>
            </div>
          </div>

      </main>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\footer.php'; ?>
  <?php require 'C:\wamp64\www\PF-ComIT-Vaylet\views\script.php'; ?>
  <!-- Se hizo con PHP la validacion del registro -->
  <!-- <script src="<?php echo RUTA; ?>/js/misArchivos/registro_clientes.js" charset="utf-8"></script> -->

  </body>
  </html>

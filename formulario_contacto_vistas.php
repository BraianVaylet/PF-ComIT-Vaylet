<?php
                   ///////Configuración/////
                   $mail_destinatario = 'correolet@dominio.com';
                   ///////Fin configuración//

                   if (isset ($_POST['enviar'])) {
                   $headers .= "From: ".$_POST['email']. "\r\n";
                   if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre y apellidos : ".$_POST['nombre']." Asunto: Vistas"."n Mensaje :n ".stripcslashes ($_POST['mensaje']), $headers )) echo '

                   Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros

                   ';

                   else echo '

                   Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.

                   '; }

                   echo '
                   <form action="?" class="formulario" method="post">
                       <label class="label_textarea" for="nombre">Nombre y apellidos : </label>
                       <input type="text" name="nombre"><br>
                       <label class="label_textarea" for="email">Email : </label>
                       <input type="text" name="email"><br>
                       <label class="label_textarea" for="mensaje">Mensaje : </label>
                       <textarea class="materialize-textarea" name="mensaje"></textarea> <br>
                       <label class="label_textarea" for="enviar">
                       <input class="btn waves-effect waves-light" type="submit" name="enviar" value="Enviar consulta"></label>
                    </form>
                    <img src="<?php echo RUTA; ?>/img/mini_logo.jpg" alt="imagen wolalow.com" class="responsive-img img_post">
                   ';
               ?>

  <?php
  session_start();
  require 'funciones.php';

  //OBTENGO LA ID Q MANDE POR LA URL.
  $id_del_usuario = $_GET["id_del_usuario"];

  // COMPROBAMOS QUE EL USUARIO TENGA UNA SESION INICIADA.
  if (session()) {

    // CONEXION CON LA BASE DE DATOS. (PDO)
    $conexion = conexion_pdo($BaseDatos_config);
    if (!$conexion) {
      header('Location: error_conexion.php');
    }
    else {

      // traigo todos los datos de usuarios.
      $resultados_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id_del_usuario');
      $resultados_usuarios->execute(array(':id_del_usuario' => $id_del_usuario));
      $filas = $resultados_usuarios->rowCount();
      foreach ($resultados_usuarios as $row) {
          $usuario = $row[1];
          $correo = $row[2];
          $telefono = $row[4];
          $whatsapp = $row[5];
          $vidas = $row[11];
      }
        $vidas = $vidas - 1;
        $resultados_vidas = $conexion->prepare('UPDATE usuarios SET vidas = :vidas WHERE id = :id_del_usuario');
        $resultados_vidas->execute(array(':vidas' => $vidas, ':id_del_usuario' => $id_del_usuario));
      }

  } else {
    header('Location: form/login.php');
  }
  require 'views/contacto.view.php';

  ?>

  <?php session_start(); ?>
  <?php
    require 'funciones.php';

    if (session()) { // COMPROBAMOS QUE EL USUARIO TENGA UNA SESION INICIADA.
      $correo = $_SESSION['correo'];

      // CONEXION CON LA BASE DE DATOS. (PDO)
      $conexion = conexion_pdo($BaseDatos_config);

      if (!$conexion) {
        header('Location: error_conexion.php');
      }
      else {
        // traigo todos los datos de usuarios.
        $resultados_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
  			$resultados_usuarios->execute(array(':correo' => $correo));
  			$filas = $resultados_usuarios->rowCount();
  			foreach ($resultados_usuarios as $row) {
  					$usuario = $row[1];
  					$foto_perfil = $row[8];
  					$ciudad = $row[9];
            $calificacion = $row[10];
  					$vidas = $row[11];
  					$soy_cadete = $row[12];
  					$soy_flete = $row[13];
  			}
      }
    } else {
      // header('Location: login.php');
    }
    require 'views/contenido_info.view.php';
 ?>

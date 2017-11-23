  <?php

  session_start();
  $errores = '';
  $enviado = '';
  require '../funciones.php';

  // COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA. (USAR LA FUNCION).
  if (session()) {
    header('Location: ../index.php');
  }

  // LEVANTO VALORES DEL FORM.
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $usuario = limpiarDatos(filter_var($_POST['usuario']),FILTER_SANITIZE_STRING);
      $correo = limpiarDatos(filter_var($_POST['correo']),FILTER_VALIDATE_EMAIL);
      $password = limpiarDatos(filter_var($_POST['password']),FILTER_SANITIZE_STRING);
      $password2 = limpiarDatos(filter_var($_POST['password2']),FILTER_SANITIZE_STRING);
      $telefono = limpiarDatos(filter_var($_POST['telefono']),FILTER_SANITIZE_NUMBER_FLOAT);
      $dni = limpiarDatos(filter_var($_POST['dni']),FILTER_SANITIZE_NUMBER_FLOAT);
      $fecha_nacimiento = limpiarDatos($_POST['fecha_nacimiento']);
      $foto_perfil = $_FILES['foto_perfil']['tmp_name'];

      // TRABAJO LOS CHECK ===================================================================================
      if (isset($_POST['whatsapp'])) {$whatsapp = 1;} else {$whatsapp = 0;}
      if (isset($_POST['soy_cadete'])) {
        $soy_cadete = 1;
      } else {
        $soy_cadete = 0;
      }

      if (isset($_POST['soy_flete'])) {
        $soy_flete = 1;
      } else {
        $soy_flete = 0;
      }


      // TRABAJO LOS SELECT ===================================================================================
      if (isset($_POST['ciudad'])) {
        $ciudad = $_POST['ciudad'];
        for ($i = 0; $i < count($ciudad); $i++) {
            $ciudad = $ciudad[$i];
        }
      } else {
        $errores .= '<li>ingrese un valor para el campo ciudad</li>';
      }

      // ENCRIPTAMOS LA CONTRASEÑA ===================================================================================
      // $password = campo_seguro($password);
      // $password2 = campo_seguro($password2);

      // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS ===================================================================================
      //ACOMODAR!!!
			if (empty($usuario)) {$errores .= '<li>Por favor rellena el campo USUARIO</li>';}
			if (empty($correo)) {$errores .= '<li>Por favor rellena el campo CORREO</li>';}
			if (empty($password)) {$errores .= '<li>Por favor rellena el campo PASSWORD</li>';}
			if (empty($password2)) {$errores .= '<li>Por favor rellena el campo  VERIFICACION DE CORREO</li>';}
			if (empty($telefono)) {$errores .= '<li>Por favor rellena el campo TELEFONO</li>';}
			if (empty($dni)) {$errores .= '<li>Por favor rellena el campo NÚMERO DE DOCUMENTO</li>';}
			if (empty($fecha_nacimiento)) {$errores .= '<li>Por favor rellena el campo EDAD</li>';}

      if ($password !== $password2) {$errores .= '<li>Las contraseñas no coinciden</li>';}

      // CONEXION CON LA BASE DE DATOS. (PDO) ===================================================================================
      $conexion = conexion_pdo($BaseDatos_config);
      if (!$conexion) {
      	header('Location: ../error_conexion.php');
      } else {

      			// CONSULTAS SQL EN LA BD. (PDO)
      			// #CASO EN Q EXISTA EL USUARIO ===================================================================================
      			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
      			$statement->execute(array(':usuario' => $usuario));
      			$resultado_usuario = $statement->fetch();
      			if ($resultado_usuario != false) {
      				$errores .= '<li>El nombre de usuario ya existe</li>';
      			}

      			// #CASO EN Q EXISTA EL CORREO ===================================================================================
      			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo LIMIT 1');
      			$statement->execute(array(':correo' => $correo));
      			$resultado_correo = $statement->fetch();
      			if ($resultado_correo != false) {
      				$errores .= '<li>ya existe una cuenta asociada a este correo</li>';
      			}

      			// SUBIMOS LA FOTO ===================================================================================
      			$carpeta = '../fotos_perfiles';
      			$foto = 'foto_perfil';
      			subir_foto($foto, $carpeta);
      			$foto_subida = $_FILES['foto_perfil']['name'];
      			// CASO DE NO SUBIR IMAGEN, USO AVATAR ===================================================================================
      			if ($foto_subida == null) {
      					$foto_subida = 'no_borrar/avatar.png';
      			}

      			// INSERTAMOS LOS DATOS EN LA BASE DE DATOS: (PDO) ===================================================================================
      			if ($errores == '') {
      					$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, correo, password, telefono, whatsapp, dni, fecha_nacimiento, foto_perfil, ciudad, calificacion, vidas, soy_cadete, soy_flete) VALUES (null, :usuario, :correo, :password, :telefono, :whatsapp, :dni, :fecha_nacimiento, :foto_perfil, :ciudad, :calificacion, :vidas, :soy_cadete, :soy_flete)');
      					$statement->execute(array(
      							':usuario' => $usuario,
      							':correo' => $correo,
      							':password' => $password,
      							':telefono' => $telefono,
      							':whatsapp' => $whatsapp,
      							':dni' => $dni,
      							':fecha_nacimiento' => $fecha_nacimiento,
      							':ciudad' => $ciudad,
                    ':calificacion' => 5, // calificacion inicial, solo para verlo.
                    ':vidas' => 10, // por defecto arrancan con 10 vidas!
      							':foto_perfil' => $foto_subida,
      							':soy_cadete' => $soy_cadete,
      							':soy_flete' => $soy_flete
      					));
                $filas = $statement->rowCount();
                if ($filas == 0) {
                  header('Location: ../error_conexion.php');;
                }
                $_SESSION['dni'] = $dni; // creamos una sesion con el dni para llevarme el valor a los otros archivos!
                header('Location: registro.segundo.php');

      				}
      			}
      }
  require 'views/registro.view.primero.php';
  ?>

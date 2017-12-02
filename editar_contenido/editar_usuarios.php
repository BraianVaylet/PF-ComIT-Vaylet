  <?php session_start();?>
  <?php
    require '../funciones.php';

    //inicio variables.
    $errores = '';
    $enviado = '';
    $error_usuario = '';
    $error_correo = '';
    $error_password = '';
    $error_password2 = '';
    $error_telefono = '';
    $error_dni = '';
    $error_fecha_nacimiento = '';
    $error_ciudad = '';
    $error_checkbox = '';

    $correo = $_SESSION['correo'];
    // COMPROBAMOS QUE EL USUARIO TENGA UNA SESION INICIADA.
    if (session()) {
      // CONEXION CON LA BASE DE DATOS. (PDO)
      $conexion = conexion_pdo($BaseDatos_config);
      if (!$conexion) {
        header('Location: ../error_conexion.php');
      } else {

        $usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
        $usuarios->execute(array(':correo' => $correo));
        $filas_usuarios = $usuarios->rowCount();

        if ($filas_usuarios !== 0) {
          foreach ($usuarios as $row) {
              $id = $row[0];
              $usuario = $row[1];
              $correo = $row[2];
              $password = $row[3];
              $telefono = $row[4];
              $whatsapp = $row[5];
              $dni = $row[6];
              $fecha_nacimiento = $row[7];
              $foto_perfil = $row[8];
              $ciudad = $row[9];
              $soy_cadete = $row[12];
              $soy_flete = $row[13];
          }
        }

        // LEVANTO VALORES DEL FORM.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = limpiarDatos(filter_var($_POST['usuario']),FILTER_SANITIZE_STRING);
            // $correo = limpiarDatos(filter_var($_POST['correo']),FILTER_VALIDATE_EMAIL);
            $password = limpiarDatos(filter_var($_POST['password']),FILTER_SANITIZE_STRING);
            $password2 = limpiarDatos(filter_var($_POST['password2']),FILTER_SANITIZE_STRING);
            $telefono = limpiarDatos(filter_var($_POST['telefono']),FILTER_SANITIZE_NUMBER_FLOAT);
            // $dni = limpiarDatos(filter_var($_POST['dni']),FILTER_SANITIZE_NUMBER_FLOAT);
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

            // TRABAJO LOS SELECT
            if (isset($_POST['ciudad'])) {
              $ciudad = $_POST['ciudad'];
              for ($i = 0; $i < count($ciudad); $i++) {
                  $ciudad = $ciudad[$i];
              }
            } else {
              //Valido campo ciudad.
              $error_ciudad .= 'Ingrese un valor para el campo ciudad';
              $errores = 'error';
            }

            // ENCRIPTAMOS LA CONTRASEÑA
            // $password = campo_seguro($password);
            // $password2 = campo_seguro($password2);

            // VALIDACION DEL FORMULARIO
            // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS
            if (empty($usuario)) {
              $error_usuario .= 'Por favor complete el campo USUARIO';
              $errores = 'error';
            }

            if (empty($password)) {
              $error_password .= 'Por favor complete el campo PASSWORD';
              $errores = 'error';
            } else {
              // Validacion del password.
              if (validar_clave($password, $error_encontrado)){
                $error_password = '';
              }else{
                $error_password = $error_encontrado;
                $errores = 'error';
              }
            }

            if (empty($password2)) {
              $error_password2 .= 'Por favor complete el campo  VERIFICACION DE CORREO';
              $errores = 'error';
            } elseif ($password2 != $password) {
              $error_password2 .= 'Las contraseñas no coinsiden';
              $errores = 'error';
            }

            if (empty($telefono)) {
              $error_telefono .= 'Por favor complete el campo TELEFONO';
              $errores = 'error';
            }

            if (empty($fecha_nacimiento)) {
              $error_fecha_nacimiento .= 'Por favor complete el campo EDAD';
              $errores = 'error';
            }

            if ($soy_cadete == 0 and $soy_flete == 0) {
              $error_checkbox .= 'Es necesario escojer alguno de los servicios';
              $errores = 'error';
            }

                  // SUBIMOS LA FOTO
                  $carpeta = '../fotos_perfiles';
                  $foto = 'foto_perfil';
                  subir_foto($foto, $carpeta);
                  $foto_subida = $_FILES['foto_perfil']['name'];
                  // CASO DE NO SUBIR IMAGEN, USO AVATAR
                  if ($foto_subida == null) {
                      $foto_subida = 'no_borrar/avatar.png';
                  }

                  // MODIFICAMOS LOS DATOS EN LA BASE DE DATOS: (PDO)
                  if ($errores == '') {
                      $sql = "UPDATE usuarios SET
                                  usuario = :usuario,
                                  password = :password,
                                  telefono = :telefono,
                                  whatsapp = :whatsapp,
                                  fecha_nacimiento = :fecha_nacimiento,
                                  foto_perfil = :foto_perfil,
                                  ciudad = :ciudad,
                                  soy_cadete = :soy_cadete,
                                  soy_flete = :soy_flete
                                  WHERE id = :id";
                      $stmt = $conexion->prepare($sql);
                      $stmt->execute(array(
                          ':id' => $id,
            							':usuario' => $usuario,
            							':password' => $password,
            							':telefono' => $telefono,
            							':whatsapp' => $whatsapp,
            							':fecha_nacimiento' => $fecha_nacimiento,
            							':ciudad' => $ciudad,
            							':foto_perfil' => $foto_subida,
            							':soy_cadete' => $soy_cadete,
            							':soy_flete' => $soy_flete
            					));

                      $filas = $stmt->rowCount();
                      if ($filas == 0) {
                        header('Location: ../error_conexion.php');;
                      }
                      // CREAMOS NUEVA SESION ===================================================================================
                          $_SESSION['correo'] = $correo; // creamos una sesion.
                          header('Location: ../contenido.php');
                    }
                  }
                }
          }
    require 'views/editar_usuarios.view.php';
  ?>

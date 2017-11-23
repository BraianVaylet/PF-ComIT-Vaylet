  <?php

  session_start();
  $errores = '';
  $enviado = '';
  require '../funciones.php';

  $dni = $_SESSION['dni'];


  // COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA. (USAR LA FUNCION).
  if (session()) {
    header('Location: ../index.php');
  } else {

    // CONEXION CON LA BASE DE DATOS. (PDO) ===================================================================================
    $conexion = conexion_pdo($BaseDatos_config);
    if (!$conexion) {
      header('Location: error_conexion.php');
    }
    else {

      $tabla_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE dni = :dni');
      $tabla_usuarios->execute(array(':dni' => $dni));
      $filas_us = $tabla_usuarios->rowCount();

      if ($filas_us == 0) {
        header('Location: ../error_conexion.php');
      } else {
          foreach ($tabla_usuarios as $row) {
                 $correo = $row[2];
                 $soy_cadete = $row[12];
                 $soy_flete = $row[13];
          }

      // LEVANTO VALORES DEL FORM.
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $extracto = limpiarDatos(filter_var($_POST['extracto']),FILTER_SANITIZE_STRING);
          if (empty($extracto)) {$errores .= '<li>Por favor rellena el campo Extracto sobre mí</li>';}

          //Para CADETERIAS:
          //=========================
          if ($soy_cadete == 1) {
              $monto_cadeterias = limpiarDatos(filter_var($_POST['monto_cadeterias']),FILTER_SANITIZE_NUMBER_FLOAT);

              // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS ===================================================================================
              if (empty($monto_cadeterias)) {
                $errores .= '<li>Por favor rellena el campo MONTO-CADETERIAS, si no necesita este campo ingrese como valor "0"</li>';
              }

              // TRABAJO LOS SELECT ===================================================================================
              if (isset($_POST['modo_monto_cadete'])) {
                $modo_monto_cadete = $_POST['modo_monto_cadete'];
                for ($i = 0; $i < count($modo_monto_cadete); $i++) {
                    $modo_monto_cadete = $modo_monto_cadete[$i];
                }
              } else {
                $errores .= '<li>disculpe, pero es necesario q llene todos los campos de monto-servicios-cadete</li>';
              }
          } else {
              $monto_cadeterias = 0;
              $modo_monto_cadete = null;
          }

          //Para FLETES:
          //=========================
          if ($soy_flete == 1) {
            $monto_fletes = limpiarDatos(filter_var($_POST['monto_fletes']),FILTER_SANITIZE_NUMBER_FLOAT);

            // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS ===================================================================================
            if (empty($monto_fletes)) {
              $errores .= '<li>Por favor rellena el campo MONTO-FLETES, si no necesita este campo ingrese como valor "0"</li>';
            }

            // TRABAJO LOS SELECT ===================================================================================
            if (isset($_POST['modo_monto_flete'])) {
              $modo_monto_flete = $_POST['modo_monto_flete'];
              for ($i = 0; $i < count($modo_monto_flete); $i++) {
                  $modo_monto_flete = $modo_monto_flete[$i];
              }
            } else {
              $errores .= '<li>disculpe, pero es necesario q llene todos los campos de monto-servicios-fletes</li>';
            }
          } else {
            $monto_fletes = 0;
            $modo_monto_flete = null;
          }

          // TRABAJO LOS CHECK ===================================================================================
          /* terminos y condiciones */
          if (isset($_POST['tyc_uso'])) {$tyc_uso = 1;} else {$tyc_uso = 0;}
          if ($tyc_uso == 0) {$errores .= '<li>Por favor acepte los términos y condiciones de uso de la página para poder continuar</li>';}


            // INSERTAMOS LOS DATOS EN LA BASE DE DATOS: (PDO) ===================================================================================
            if ($errores == '') {
                $statement3 = $conexion->prepare('INSERT INTO montos (dni, modo_monto_cadete, modo_monto_flete, monto_cadeterias, monto_fletes, extracto) VALUES (:dni, :modo_monto_cadete, :modo_monto_flete, :monto_cadeterias, :monto_fletes, :extracto)');
                $statement3->execute(array(
                    ':dni' => $dni,
                    ':modo_monto_cadete' => $modo_monto_cadete,
                    ':modo_monto_flete' => $modo_monto_flete,
                    ':monto_cadeterias' => $monto_cadeterias,
                    ':monto_fletes' => $monto_fletes,
                    ':extracto' => $extracto
                ));

                $filas = $statement3->rowCount();

                if ($filas == 0) {
                  header('Location: ../error_conexion.php');
                } else {
                  session_destroy();
                  session_start();

                  // CREAMOS NUEVA SESION ===================================================================================
                      $_SESSION['correo'] = $correo; // creamos una sesion.
                      header('Location: ../contenido_info.php');
                  }
                }
              }
          }
        }
      }

  require 'views/registro.view.tercero.php';

  ?>

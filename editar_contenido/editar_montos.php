<?php session_start(); 
    //INICIO VARIABLES.
    $errores = '';
    $enviado = '';
    $error_monto_cadeterias = '';
    $error_modo_monto_cadete = '';
    $error_monto_fletes = '';
    $error_modo_monto_flete = '';
    $error_extracto = '';

    require '../funciones.php';

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
              $correo = $row[2];
              $dni = $row[6];
              $soy_cadete = $row[12];
              $soy_flete = $row[13];
          }
        }

        $resultados_montos = $conexion->prepare('SELECT * FROM montos WHERE dni = :dni');
        $resultados_montos->execute(array(':dni' => $dni));
        $filas = $resultados_montos->rowCount();
        foreach ($resultados_montos as $row) {
            $modo_monto_cadete = $row[1];
            $modo_monto_flete = $row[2];
            $monto_cadeterias = $row[3];
            $monto_fletes = $row[4];
            $extracto = $row[5];
        }

        // LEVANTO VALORES DEL FORM.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $extracto = limpiarDatos(filter_var($_POST['extracto']),FILTER_SANITIZE_STRING);
            if (empty($extracto)) {
              $error_extracto .= 'Por favor complete el campo EXTRACTO';
              $errores = 'error';
            }

            //Para CADETERIAS:
            //=========================
            if ($soy_cadete == 1) {
                $monto_cadeterias = limpiarDatos(filter_var($_POST['monto_cadeterias']),FILTER_SANITIZE_NUMBER_FLOAT);

                // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS ===================================================================================
                if (empty($monto_cadeterias)) {
                  $error_monto_cadeterias .= 'Por favor complete el campo MONTO-CADETERIAS';
                  $errores = 'error';
                }

                // TRABAJO LOS SELECT ===================================================================================
                if (isset($_POST['modo_monto_cadete'])) {
                  $modo_monto_cadete = $_POST['modo_monto_cadete'];
                  for ($i = 0; $i < count($modo_monto_cadete); $i++) {
                      $modo_monto_cadete = $modo_monto_cadete[$i];
                  }
                } else {
                  $error_modo_monto_cadete .= 'disculpe, pero es necesario que complete el campo MODALIDAD para cadeterias';
                  $errores = 'error';
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
                $error_monto_fletes .= 'Por favor complete el campo MONTO-FLETES';
                $errores = 'error';
              }

              // TRABAJO LOS SELECT ===================================================================================
              if (isset($_POST['modo_monto_flete'])) {
                $modo_monto_flete = $_POST['modo_monto_flete'];
                for ($i = 0; $i < count($modo_monto_flete); $i++) {
                    $modo_monto_flete = $modo_monto_flete[$i];
                }
              } else {
                $error_modo_monto_flete .= 'disculpe, pero es necesario que complete el campo MODALIDAD para fletes';
                $errores = 'error';
              }
            } else {
              $monto_fletes = 0;
              $modo_monto_flete = null;
            }

          // MODIFICAMOS LOS DATOS EN LA BASE DE DATOS: (PDO)
          if ($errores == '') {
              $sql = "UPDATE montos SET
                          monto_cadeterias = :monto_cadeterias,
                          monto_fletes = :monto_fletes,
                          modo_monto_cadete = :modo_monto_cadete,
                          modo_monto_flete = :modo_monto_flete,
                          extracto = :extracto
                          WHERE dni = :dni";
              $stmt = $conexion->prepare($sql);
              $stmt->execute(array(
                  ':dni' => $dni,
                  ':monto_cadeterias' => $monto_cadeterias,
                  ':monto_fletes' => $monto_fletes,
                  ':modo_monto_cadete' => $modo_monto_cadete,
                  ':modo_monto_flete' => $modo_monto_flete,
                  ':extracto' => $extracto
              ));

              $filas = $stmt->rowCount();
              if ($filas == 0) {
                header('Location: ../error_conexion.php');;
              }
              // CREAMOS NUEVA SESION
                  $_SESSION['correo'] = $correo; // creamos una sesion.
                  header('Location: ../contenido.php');
            }
          }
        }
      }
    require(RAIZ . '/editar_contenido/views/editar_montos.view.php');

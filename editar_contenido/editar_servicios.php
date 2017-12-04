<?php session_start(); 
    $errores = '';
    $enviado = '';
    $error_dist_min = '';
    $error_dist_max = '';
    $error_peso_max = '';
    $error_tipo = '';
    $error_trabajos = '';
    $error_checkbox_horario = '';
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
          }
        }

        $resultados_servicios = $conexion->prepare('SELECT * FROM servicios WHERE dni = :dni');
        $resultados_servicios->execute(array(':dni' => $dni));
        $filas = $resultados_servicios->rowCount();
        foreach ($resultados_servicios as $row) {
            $dist_min = $row[1];
            $dist_max = $row[2];
            $dist_trabajo = $row[3];
            $peso_max = $row[4];
            $am = $row[5];
            $pm = $row[6];
            $encargos = $row[7];
            $tipo = $row[8];
            $trabajos = $row[9];
            $carnet = $row[10];
        }

        // LEVANTO VALORES DEL FORM.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $dist_min = limpiarDatos(filter_var($_POST['dist_min']),FILTER_SANITIZE_NUMBER_FLOAT);
          $dist_max = limpiarDatos(filter_var($_POST['dist_max']),FILTER_SANITIZE_NUMBER_FLOAT);
          $peso_max = limpiarDatos(filter_var($_POST['peso_max']),FILTER_SANITIZE_NUMBER_FLOAT);
          $trabajos = limpiarDatos(filter_var($_POST['trabajos']),FILTER_SANITIZE_STRING);

          // TRABAJO LOS CHECK
          if (isset($_POST['am'])) {$am = 1;} else {$am = 0;}
          if (isset($_POST['pm'])) {$pm = 1;} else {$pm = 0;}
          if (isset($_POST['dist_trabajo'])) {$dist_trabajo = 1;} else {$dist_trabajo = 0;}
          if (isset($_POST['encargos'])) {$encargos = 1;} else {$encargos = 0;}
          if (isset($_POST['carnet'])) {$carnet = 1;} else {$carnet = 0;}

          // TRABAJO LOS SELECT
          if (isset($_POST['tipo'])) {
            $tipo = $_POST['tipo'];
            for ($i = 0; $i < count($tipo); $i++) {
                $tipo = $tipo[$i];
            }
          } else {
            //Valido campo ciudad.
            $error_tipo .= 'Ingrese un valor para el campo ciudad';
            $errores = 'error';
          }

          // VALIDACION DEL FORMULARIO
          // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS
          if (empty($dist_min)) {
            $error_dist_min .= 'Por favor rellena el campo DISTANCIA MÍNIMA';
            $errores = "error";
          }

          if (empty($dist_max)) {
            $error_dist_max .= 'Por favor rellena el campo DISTANCIA MÁXIMA';
            $errores = "error";
          }

          if (empty($peso_max)) {
            $error_peso_max .= 'Por favor rellena el campo PESO MÁXIMO';
            $errores = "error";
          }

          if (empty($tipo)) {
            $error_tipo .= 'Por favor rellena el campo ACERCA DE SU VEHICULO';
            $errores = "error";
          }

          if (empty($trabajos)) {
            $error_trabajos .= 'Por favor rellena el campo EJEMPLOS DE TRABAJOS...';
            $errores = "error";
          }

          if ($am == 0 and $pm == 0) {
            $error_checkbox_horario .= 'Por favor rellena el campo HORARIOS';
          }

          // DISTANCIAS
          if ($dist_min > $dist_max) {
            $error_dist_max .= 'la distancia máxima no puede ser menor a la distancia mínima ingresada';
          }

          // MODIFICAMOS LOS DATOS EN LA BASE DE DATOS: (PDO)
          if ($errores == '') {
              $sql = "UPDATE servicios SET
                          dist_min = :dist_min,
                          dist_max = :dist_max,
                          dist_trabajo = :dist_trabajo,
                          peso_max = :peso_max,
                          am = :am,
                          pm = :pm,
                          encargos = :encargos,
                          tipo = :tipo,
                          trabajos = :trabajos,
                          carnet = :carnet
                          WHERE dni = :dni";
              $stmt = $conexion->prepare($sql);
              $stmt->execute(array(
          				':dni' => $dni,
          				':dist_min' => $dist_min,
          				':dist_max' => $dist_max,
          				':dist_trabajo' => $dist_trabajo,
          				':peso_max' => $peso_max,
          				':am' => $am,
          				':pm' => $pm,
          				':encargos' => $encargos,
          				':tipo' => $tipo,
          				':trabajos' => $trabajos,
          				':carnet' => $carnet
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
  require(RAIZ . '/editar_contenido/views/editar_servicios.view.php');

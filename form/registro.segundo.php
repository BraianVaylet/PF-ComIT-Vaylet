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

    // traigo el valor del dni en la sesion
    $dni = $_SESSION['dni'];

    // COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA. (USAR LA FUNCION).
    if (session()) {
      header('Location: ../index.php');
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

      if (empty($trabajos)) {
        $error_trabajos .= 'Por favor complete el campo EJEMPLOS DE TRABAJOS...';
        $errores = "error";
      }

      if ($am == 0 and $pm == 0) {
        $error_checkbox_horario .= 'Por favor complete el campo HORARIOS';
      }

      // CONEXION CON LA BASE DE DATOS. (PDO)
      $conexion = conexion_pdo($BaseDatos_config);
      if (!$conexion) {
      	header('Location: ../error_conexion.php');
      } else {

      // CONSULTAS SQL EN LA BD. (PDO)
      // DISTANCIAS
      if ($dist_min > $dist_max) {
      	$error_dist_max .= 'la distancia máxima no puede ser menor a la distancia mínima ingresada';
      }

      // INSERTAMOS LOS DATOS EN LA BASE DE DATOS: (PDO)
      if ($errores == '') {
      		$statement2 = $conexion->prepare('INSERT INTO servicios (dni, dist_min, dist_max, dist_trabajo, peso_max, am, pm, encargos, tipo, trabajos, carnet) VALUES ( :dni, :dist_min, :dist_max, :dist_trabajo, :peso_max, :am, :pm, :encargos, :tipo, :trabajos, :carnet)');
      		$statement2->execute(array(
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
          $filas = $statement2->rowCount();
          if ($filas == 0) {
            header('Location: ../error_conexion.php');
          }
          header('Location: registro.tercero.php');
      	}
      }
    }
    require(RAIZ . '/form/views/registro.view.segundo.php');

  <?php

  session_start();
  $errores = '';
  $enviado = '';
  require '../funciones.php';

  $dni = $_SESSION['dni'];
  // echo $dni;

  // COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA. (USAR LA FUNCION).
  if (session()) {
    header('Location: ../index.php');
  }

  // LEVANTO VALORES DEL FORM.
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dist_min = limpiarDatos(filter_var($_POST['dist_min']),FILTER_SANITIZE_NUMBER_FLOAT);
    $dist_max = limpiarDatos(filter_var($_POST['dist_max']),FILTER_SANITIZE_NUMBER_FLOAT);
    $peso_max = limpiarDatos(filter_var($_POST['peso_max']),FILTER_SANITIZE_NUMBER_FLOAT);
    $tipo = limpiarDatos(filter_var($_POST['tipo']),FILTER_SANITIZE_STRING);
    $capacidad = limpiarDatos(filter_var($_POST['capacidad']),FILTER_SANITIZE_STRING);
    $trabajos = limpiarDatos(filter_var($_POST['trabajos']),FILTER_SANITIZE_STRING);

    // TRABAJO LOS CHECK ===================================================================================
    if (isset($_POST['am'])) {$am = 1;} else {$am = 0;}
    if (isset($_POST['pm'])) {$pm = 1;} else {$pm = 0;}
    if (isset($_POST['dist_trabajo'])) {$dist_trabajo = 1;} else {$dist_trabajo = 0;}
    if (isset($_POST['encargos'])) {$encargos = 1;} else {$encargos = 0;}
    if (isset($_POST['carnet'])) {$carnet = 1;} else {$carnet = 0;}

    // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS ===================================================================================
    if (empty($dist_min)) {$errores .= '<li>Por favor rellena el campo DISTANCIA MÍNIMA</li>';}
    if (empty($dist_max)) {$errores .= '<li>Por favor rellena el campo DISTANCIA MÁXIMA</li>';}
    if (empty($peso_max)) {$errores .= '<li>Por favor rellena el campo PESO MÁXIMO</li>';}
    if (empty($tipo)) {$errores .= '<li>Por favor rellena el campo ACERCA DE SU VEHICULO</li>';}
    if (empty($capacidad)) {$errores .= '<li>Por favor rellena el campo ACERCA DE SU CAPACIDAD</li>';}
    if (empty($trabajos)) {$errores .= '<li>Por favor rellena el campo EJEMPLOS DE TRABAJOS...</li>';}


    						// CONEXION CON LA BASE DE DATOS. (PDO) ===================================================================================
    						$conexion = conexion_pdo($BaseDatos_config);
    						if (!$conexion) {
    							header('Location: ../error_conexion.php');
    						} else {

    						// CONSULTAS SQL EN LA BD. (PDO)
    						// DISTANCIAS ===================================================================================
    						if ($dist_min > $dist_max) {
    							$errores .= '<li>la distancia máxima ingresada es menor a la distancia mínima ingresada</li>';
    						}

    						// INSERTAMOS LOS DATOS EN LA BASE DE DATOS: (PDO) ===================================================================================
    						if ($errores == '') {
    								$statement2 = $conexion->prepare('INSERT INTO servicios (dni, dist_min, dist_max, dist_trabajo, peso_max, am, pm, encargos, tipo, capacidad, trabajos, carnet) VALUES ( :dni, :dist_min, :dist_max, :dist_trabajo, :peso_max, :am, :pm, :encargos, :tipo, :capacidad, :trabajos, :carnet)');
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
    										':capacidad' => $capacidad,
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



    	require 'views/registro.view.segundo.php';

      ?>

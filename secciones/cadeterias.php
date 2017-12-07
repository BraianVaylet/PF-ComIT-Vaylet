<?php session_start();
    $errores = '';
    $enviado = '';
    require '../funciones.php';

    // CONEXION CON LA BASE DE DATOS. (PDO)
    $conexion = conexion_pdo($BaseDatos_config);
    if (!$conexion) {
      header('Location: ../error_conexion.php');
    }
    else {
      //PAGINACION:
      $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
    	$postPorPagina = 8;

    	$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

      // TABLA USUARIOS:
      $res_usuarios = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM usuarios LIMIT $inicio, $postPorPagina");
      $res_usuarios->execute();

      // TABLA SERVICIOS:
      $res_servicios = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM servicios LIMIT $inicio, $postPorPagina");
      $res_servicios->execute();

      // TABLA MONTOS:
      $res_montos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM montos LIMIT $inicio, $postPorPagina");
      $res_montos->execute();

      // if (!$res_usuarios) {
    	// 	header('Location: CAD.php');
    	// }

    	$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
    	$totalArticulos = $totalArticulos->fetch()['total'];

    	$numeroPaginas = ceil($totalArticulos / $postPorPagina); // ceil: redondea para arriba.
     }

    require(RAIZ . '/secciones/views/cadeterias.view.php');

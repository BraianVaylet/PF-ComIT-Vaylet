  <?php session_start(); ?>
  <?php
    $errores = '';
    $enviado = '';
    require '../funciones.php';

    // CONEXION CON LA BASE DE DATOS. (PDO)
    $conexion = conexion_pdo($BaseDatos_config);
    if (!$conexion) {
      header('Location: error_conexion.php');
    }
    else {
      // TABLA USUARIOS:
      $res_usuarios = $conexion->prepare('SELECT * FROM usuarios');
      $res_usuarios->execute();

      // TABLA SERVICIOS:
      $res_servicios = $conexion->prepare('SELECT * FROM servicios');
      $res_servicios->execute();

      // TABLA MONTOS:
      $res_montos = $conexion->prepare('SELECT * FROM montos');
      $res_montos->execute();
   }
    require(RAIZ . '/secciones/views/fletes.view.php');

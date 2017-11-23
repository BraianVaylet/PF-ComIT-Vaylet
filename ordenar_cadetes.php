  <?php


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['calificacion'])) {
      $calificacion = 1;
    } else {
      $calificacion = 0;
    }

    if (isset($_POST['monto'])) {
      $monto = 1;
    } else {
      $monto = 0;
    }

      if ($calificacion == 1) {
        $res_usuarios = $conexion->prepare('SELECT * FROM usuarios ORDER BY calificacion DESC WHERE ciudad = :ciudad and soy_cadete = "1"');
        $res_usuarios->execute(array(':ciudad' => $ciudad_seleccionada));
      }

      // if ($monto == 1) {
      //   $res_usuarios = $conexion->prepare('SELECT * FROM usuarios ORDER BY monto');
      //   $res_usuarios->execute();
      // }

  }

  require 'views/ordenar.view.php';

  ?>

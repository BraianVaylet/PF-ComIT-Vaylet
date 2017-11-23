  <?php


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['ciudad'])) {
        $ciudad = $_POST['ciudad'];
        for ($i = 0; $i < count($ciudad); $i++) {
            $ciudad = $ciudad[$i];
        }
      }

      $res_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE ciudad = :ciudad and soy_cadete = "1"');
			$res_usuarios->execute(array(':ciudad' => $ciudad));

  }

  require 'views/buscar.view.php';

  ?>

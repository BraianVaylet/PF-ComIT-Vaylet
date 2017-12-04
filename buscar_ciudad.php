<?php // BUSCADOR POR CIUDAD:
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (isset($_POST['ciudad'])) {
            $ciudad_buscada = $_POST['ciudad'];
            for ($i = 0; $i < count($ciudad_buscada); $i++) {
              $ciudad_buscada = $ciudad_buscada[$i];
            }
            if ($ciudad_buscada == 'todos') {
              $ciudad_buscada = $ciudad;
            }
          }
      } else {
        $ciudad_buscada = $ciudad;
      }

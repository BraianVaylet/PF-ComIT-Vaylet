	<?php

			session_start();
			require '../funciones.php';

			// comprobamos q el usuario no tenga una sesion iniciada.
			if (session()) {
				header('Location: contenido.php');
			} else {
				header('Location: registro.primero.php');
			}

	 ?>

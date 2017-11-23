	<?php
	session_start();
	require 'funciones.php';

 	$correo = $_SESSION['correo'];
	// COMPROBAMOS QUE EL USUARIO TENGA UNA SESION INICIADA.
	if (session()) {

		// CONEXION CON LA BASE DE DATOS. (PDO)
		$conexion = conexion_pdo($BaseDatos_config);
		if (!$conexion) {
			header('Location: error_conexion.php');
		}
		else {

			// traigo todos los datos de usuarios.
			$resultados_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
			$resultados_usuarios->execute(array(':correo' => $correo));
			$filas_usuarios = $resultados_usuarios->rowCount();

			if ($filas_usuarios !== 0) {
				foreach ($resultados_usuarios as $row) {
						$usuario = $row[1];
						$correo = $row[2];
						$password = $row[3];
						$telefono = $row[4];
						$whatsapp = $row[5];
						$dni = $row[6];
						$fecha_nacimiento = $row[7];
						$foto_perfil = $row[8];
						$ciudad = $row[9];
						$calificacion = $row[10];
						$vidas = $row[11];
						$soy_cadete = $row[12];
						$soy_flete = $row[13];
						$fecha_ingreso = $row[14];
				}

				//devuelvo la fecha en otro formato
				$fecha_ingreso =fecha($fecha_ingreso);

					// traigo todos los datos de servicios.
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
							$capacidad = $row[9];
							$trabajos = $row[10];
							$carnet = $row[11];
					}

					// traigo todos los datos de montos.
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
					require 'views/contenido.view.php';
			}

			// traigo todos los datos de clientes.
			$resultados_clientes = $conexion->prepare('SELECT * FROM clientes WHERE correo = :correo');
			$resultados_clientes->execute(array(':correo' => $correo));
			$filas_clientes = $resultados_clientes->rowCount();

			if ($filas_clientes !== 0) {
				foreach ($resultados_clientes as $row) {
						$usuario_cliente = $row[1];
						$correo = $row[2];
						$password = $row[3];
						$telefono = $row[4];
				}

				require 'views/contenido_del_cliente.view.php';

			}


		}
	} else {
		header('Location: form/login.php');
	}

	?>

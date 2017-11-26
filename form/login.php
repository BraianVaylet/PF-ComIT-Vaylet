	<?php

			session_start();
			$errores = '';
			$enviado = '';
			$error_correo = '';
			$error_password = '';

			require '../funciones.php';

			// COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA.
			if (session()) {
				header('Location: ../contenido.php');
			} else {

				// LEVANTO VALORES DEL FORM.
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$correo = limpiarDatos(filter_var($_POST['correo']),FILTER_VALIDATE_EMAIL);
						$password = limpiarDatos(filter_var($_POST['password']),FILTER_SANITIZE_STRING);

						//SACO LA ENCRIPTACION DE LA CONTRASEÑA.
						//$password = campo_seguro($password);

						//VALIDO EL LOGIN.
						if (empty($correo)) { $error_correo .= 'Por favor rellena el campo CORREO';	}
						if (empty($password)) { $error_password .= 'Por favor rellena el campo PASSWORD';	}

						// COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS.
						if (!empty($correo) or !empty($password)) {

								// CONEXION CON LA BASE DE DATOS.
							  $conexion = conexion_pdo($BaseDatos_config);

								if (!$conexion) {
									header('Location: ../error_conexion.php');
								}

								// VERIFICO LA EXISTENCIA EN LA BD.
								// DEL USUARIO.
								$statement_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo AND password = :password');
								$statement_usuarios->execute(array(
									':correo' => $correo,
									':password' => $password
								));
								$resultado_usuarios = $statement_usuarios->fetch(); // fetch devuelve el resultado.

								if ($resultado_usuarios !== false) {
									$_SESSION['correo'] = $correo; // creamos una sesion.
									header('Location: ../contenido.php');
								} else {
									$errores .= '<li>No existe usuario registrado con este correo, <a class="modal-trigger link_reg_2" href="#modal_registro">REGISTRATE AQUI</a></li>';
								}


								// DEL CLIENTE.
								$statement_clientes = $conexion->prepare('SELECT * FROM clientes WHERE correo = :correo AND password = :password');
								$statement_clientes->execute(array(
									':correo' => $correo,
									':password' => $password
								));
								$resultado_clientes = $statement_clientes->fetch(); // fetch devuelve el resultado.

								if ($resultado_clientes !== false) {
									$_SESSION['correo'] = $correo; // creamos una sesion.
									header('Location: ../contenido.php');
								} else {
									$errores .= '<li>Contraseña Incorrecta</li>';
								}
						}
				 }
		 }

			require 'views/login.view.php';

	?>

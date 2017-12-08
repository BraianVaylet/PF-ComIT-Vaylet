<?php session_start();
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
						if (empty($correo)) { $error_correo .= 'Por favor complete el campo CORREO';	}
						if (empty($password)) { $error_password .= 'Por favor complete el campo PASSWORD';	}

								// CONEXION CON LA BASE DE DATOS.
							  $conexion = conexion_pdo($BaseDatos_config);

								if (!$conexion) {
									header('Location: ../error_conexion.php');
								}

                // VERIFICO LA EXISTENCIA EN LA BD.
								// DEL USUARIO.
								$statement_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
								$statement_usuarios->execute(array(
									':correo' => $correo
								));
								$resultado_usuarios = $statement_usuarios->fetch(); // fetch devuelve el resultado.

								if ($resultado_usuarios !== false) {
                    $statement = $conexion->prepare('UPDATE usuarios SET password = :password WHERE correo = :correo');
                    $statement->execute(array(
                        ':correo' => $correo,
                        ':password' => $password
                    ));
                    $filas = $statement->rowCount();
                    if ($filas == 0) {
                      header('Location: ../error_conexion.php');;
                    } else {
                      $_SESSION['correo'] = $correo; // creamos una sesion.
                      header('Location: ../contenido.php');
                    }
								}

								// DEL CLIENTE.
								$statement_clientes = $conexion->prepare('SELECT * FROM clientes WHERE correo = :correo');
								$statement_clientes->execute(array(
									':correo' => $correo
								));
								$resultado_clientes = $statement_clientes->fetch(); // fetch devuelve el resultado.

								if ($resultado_clientes !== false) {
                    $statement = $conexion->prepare('UPDATE clientes SET password = :password WHERE correo = :correo');
                    $statement->execute(array(
                        ':correo' => $correo,
                        ':password' => $password
                    ));
                    $filas = $statement->rowCount();
                    if ($filas == 0) {
                      header('Location: ../error_conexion.php');;
                    } else {
                      $_SESSION['correo'] = $correo; // creamos una sesion.
                      header('Location: ../contenido.php');
                    }
								}

                if ($resultado_clientes == false or $resultado_usuarios == false) {
									$errores .= '<li>No existe usuario registrado con este correo, <a class="modal-trigger link_reg_2" href="#modal_registro">REGISTRATE AQUI</a></li>';
									$errores .= '<li>Contraseña Incorrecta</li>';
								}
              }

		 require(RAIZ . '/form/views/nuevo_password.view.php');
}

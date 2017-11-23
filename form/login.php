	<?php

	session_start();
	$errores = '';
	$enviado = '';
	require '../funciones.php';

	// COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA.
	if (session()) {
		header('Location: ../contenido.php');
	} else {

	// LEVANTO VALORES DEL FORM.
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$correo = limpiarDatos(filter_var($_POST['correo']),FILTER_VALIDATE_EMAIL);
			$password = limpiarDatos(filter_var($_POST['password']),FILTER_SANITIZE_STRING);
			//$password = campo_seguro($password);


			// COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS.
			if (empty($correo) or empty($password)) {
					$errores .= '<li>Por favor rellena todos los campos correctamente</li>';
			} else {

					// CONEXION CON LA BASE DE DATOS.
				  $conexion = conexion_pdo($BaseDatos_config);

					if (!$conexion) {
						header('Location: ../error_conexion.php');
					}

					// VERIFICO LA EXISTENCIA DEL USUARIO EN LA BD.
					$statement_usuarios = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo AND password = :password');
					$statement_usuarios->execute(array(
						':correo' => $correo,
						':password' => $password
					));
					$resultado_usuarios = $statement_usuarios->fetch(); // fetch devuelve el resultado.

					$statement_clientes = $conexion->prepare('SELECT * FROM clientes WHERE correo = :correo AND password = :password');
					$statement_clientes->execute(array(
						':correo' => $correo,
						':password' => $password
					));
					$resultado_clientes = $statement_clientes->fetch(); // fetch devuelve el resultado.

					if ($resultado_usuarios !== false) {
						$_SESSION['correo'] = $correo; // creamos una sesion.
						header('Location: ../contenido.php');
					} else {
						$errores .= '<li>Corre Incorrecto</li>';
					}

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

  <?php

    session_start();
    $errores = '';
    $error_password = '';
    $error_usuario_cliente = '';
    $error_correo = '';
    $error_telefono = '';
    $error_password2 = '';
    $error_encontrado="";
    $enviado = '';

    require '../funciones.php';

    // COMPROBAMOS QUE EL USUARIO NO TENGA UNA SESION INICIADA. (USAR LA FUNCION).
    if (session()) {
      header('Location: ../index.php');
    }

    // LEVANTO VALORES DEL FORM.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario_cliente = limpiarDatos(filter_var($_POST['usuario_cliente']),FILTER_SANITIZE_STRING);
        $correo = limpiarDatos(filter_var($_POST['correo']),FILTER_VALIDATE_EMAIL);
        $password = limpiarDatos(filter_var($_POST['password']),FILTER_SANITIZE_STRING);
        $password2 = limpiarDatos(filter_var($_POST['password2']),FILTER_SANITIZE_STRING);
        $telefono = limpiarDatos(filter_var($_POST['telefono']),FILTER_SANITIZE_NUMBER_FLOAT);

        // ENCRIPTAMOS LA CONTRASEÑA
        // $password = campo_seguro($password);
        // $password2 = campo_seguro($password2);


        // VALIDACION DEL FORMULARIO.
        // Password:
        if (validar_clave($password, $error_encontrado)){
          $error_password = '';
        }else{
          $error_password = $error_encontrado;
          $errores = 'error';
        }

        // COMPROBAMOS SI LOS CAMPOS ESTAN VACIOS
        if (empty($usuario_cliente)) {
          $error_usuario_cliente .= 'Por favor rellena el campo USUARIO';
          $errores = 'error';
        }
        if (empty($correo)) {
          $error_correo .= 'Por favor rellena el campo CORREO';
          $errores = 'error';
        }
        if (empty($telefono)) {
          $error_telefono .= 'Por favor rellena el campo TELEFONO';
          $errores = 'error';
        }

        //Password2:
        if (empty($password2)) {
          $error_password2 .= 'Por favor rellena el campo  VERIFICACION DE CORREO';
          $errores = 'error';
        } elseif ($password2 != $password) {
          $error_password2 .= 'Las contraseñas no coinsiden';
          $errores = 'error';
        }


        // CONEXION CON LA BASE DE DATOS. (PDO)
        $conexion = conexion_pdo($BaseDatos_config);
        if (!$conexion) {
          header('Location: ../error_conexion.php');
        } else {

              // CONSULTAS SQL EN LA BD. (PDO)
              // #CASO EN Q EXISTA EL USUARIO ===================================================================================
              $statement = $conexion->prepare('SELECT * FROM clientes WHERE usuario_cliente = :usuario_cliente LIMIT 1');
              $statement->execute(array(':usuario_cliente' => $usuario_cliente));
              $resultado_usuario = $statement->fetch();
              if ($resultado_usuario != false) {
                $error_usuario_cliente .= 'El nombre de usuario ya existe';
                $errores = 'error';
              }

              // #CASO EN Q EXISTA EL CORREO
              $statement = $conexion->prepare('SELECT * FROM clientes WHERE correo = :correo LIMIT 1');
              $statement->execute(array(':correo' => $correo));
              $resultado_correo = $statement->fetch();
              if ($resultado_correo != false) {
                $error_correo .= 'ya existe una cuenta asociada a este correo';
                $errores = 'error';
              }

              // INSERTAMOS LOS DATOS EN LA BASE DE DATOS: (PDO)
              if ($errores == '') {
                  $statement = $conexion->prepare('INSERT INTO clientes (id, usuario_cliente, correo, password, telefono) VALUES (null, :usuario_cliente, :correo, :password, :telefono)');
                  $statement->execute(array(
                      ':usuario_cliente' => $usuario_cliente,
                      ':correo' => $correo,
                      ':password' => $password,
                      ':telefono' => $telefono
                  ));
                  $filas = $statement->rowCount();
                  if ($filas == 0) {
                    header('Location: ../error_conexion.php');;
                  }
                  $_SESSION['correo'] = $correo; // creamos una sesion.
                  header('Location: ../index.php');

                }
              }
        }
    require 'views/registro_clientes.view.php';
  ?>

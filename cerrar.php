  <?php session_start(); ?>
  <?php
    session_destroy(); //destruimos la sesion para cerrarla
    $_SESSION = array(); //dejamos la sesion en cero, la limpiamos.
    header('Location: form/login.php');
  ?>

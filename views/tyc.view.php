<?php session_start();
      require '../funciones.php';
      require(RAIZ . '/views/head.php');
      require(RAIZ . '/views/barra_nav.php');?>
  <main>
    <div class="terminos">
      <?php require(RAIZ . '/tyc.php'); ?>
    </div>
  </main>
<?php require(RAIZ . '/views/footer.php');
      require(RAIZ . '/views/script.php');
      if (session()): ?>
        <script src="<?php echo RUTA; ?>/js/misArchivos/principal.js" charset="utf-8"></script>
<?php endif ?>
</body>
</html>

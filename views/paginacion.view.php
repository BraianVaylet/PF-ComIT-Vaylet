<section class="paginacion">
  <ul>
    <!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
    <?php if ($pagina == 1): ?>
      <li class="disabled">&laquo;</li>
    <?php else: ?>
      <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
    <?php endif; ?>

    <!-- Ejecutamos un ciclo para mostrar las paginas -->
    <?php
    for ($i=1; $i <= $numeroPaginas ; $i++) {
      if ($pagina == $i) {
        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
      } else {
        echo "<li><a href='?pagina=$i'>$i</a></li>";
      }
    }
    ?>

    <!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
    <?php if ($pagina == $numeroPaginas): ?>
      <li class="disabled">&raquo;</li>
    <?php else: ?>
      <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
    <?php endif; ?>
  </ul>
</section>

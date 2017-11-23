  <!-- ORDENADORES =============================================================================== -->
  <div class="row">
    <div class="col s12 m12 l6 z-depth-3 sec_buscar">
      <h4>Ordenar por:  </h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="ordenar" enctype="multipart/form-data">
          <div class="registro_check">
            <div class="row check tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione el/los servicios que usted realiza">
                <div class="col s4 offset-s5">
                    <input type="checkbox" class="checkbox" name="calificacion" id="calificacion" />
                    <label for="calificacion">Calificación</label>
                    <br>
                    <input type="checkbox" class="checkbox" name="monto" id="monto" />
                    <label for="monto">$ Monto</label>
                </div>
            </div>
          </div>
          <div class="col s4 boton_buscar">
            <button type="submit" name="submit" class="waves-effect waves-light btn-large">ORDENAR</button>
          </div>
        </form>

    </div>
  </div>


  <!-- BUSCADORES =============================================================================== -->
  <div class="row">
    <div class="col s12 m12 l6 z-depth-3 sec_buscar">
      <h4>Buscar por ciudad: </h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="buscar" enctype="multipart/form-data">
          <div class="col s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione su ciudad">
            <select class="icons" id="ciudad" name="ciudad[]">
                <option value="Bahia Blanca">Bahía Blanca</option>
                <option value="Punta Alta">Punta Alta</option>
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="La Plata">La Plata</option>
                <option value="Sierra de la Ventana">Sierra de la Ventana</option>
                <option value="Villa Ventana">Villa Ventana</option>
                <option value="Monte Hermosos">Monte Hermosos</option>
            </select>
            </div>
            <div class="col s4 boton_buscar">
              <button type="submit" name="submit" class="waves-effect waves-light btn-large">BUSCAR</button>
            </div>
        </form>

    </div>
  </div>

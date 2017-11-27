
  <!-- BUSCADORES =============================================================================== -->
  <div class="row">
    <div class="col s12 m12 l6 z-depth-3 sec_buscar">
        <div class="buscador">
          <span class="mostrar_ciudad_texto">¿Buscar en la ciudad de </span>
          <span id="mostrar_ciudad">Buscar por ciudad:</span>
          <span class="mostrar_ciudad_texto">?</span>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="buscar" enctype="multipart/form-data">
          <div class="col s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Seleccione su ciudad">
            <select class="icons" id="ciudad" name="ciudad[]">
                <option id="opc_0" value="todos"></option>
                <option id="opc_1" value="Bahia Blanca">Bahía Blanca</option>
                <option id="opc_2" value="Punta Alta">Punta Alta</option>
                <option id="opc_3" value="Buenos Aires">Buenos Aires</option>
                <option id="opc_4" value="La Plata">La Plata</option>
                <option id="opc_5" value="Sierra de la Ventana">Sierra de la Ventana</option>
                <option id="opc_6" value="Villa Ventana">Villa Ventana</option>
                <option id="opc_7" value="Monte Hermosos">Monte Hermosos</option>
            </select>
            </div>
            <p class="texto_error" id="error_ciudad"></p>

            <div class="col s4 boton_buscar">
              <button type="submit" name="submit" class="waves-effect waves-light btn-large">BUSCAR</button>
            </div>

        </form>
    </div>
  </div>

  <script src="<?php echo RUTA; ?>/js/misArchivos/buscador.js" charset="utf-8"></script>

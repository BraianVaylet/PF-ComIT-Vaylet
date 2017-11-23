  $(document).ready(function() {

    /* VALIDACION DEL FORMULARIO: */

    var formulario = document.getElementById('formulario'),
        dist_min = formulario.dist_min,
        dist_max = formulario.dist_max,
        peso_max = formulario.peso_max,
        am = formulario.am,
        pm = formulario.pm,
        tipo = formulario.tipo,
        capacidad = formulario.capacidad,
        trabajos = formulario.trabajos,
        error_dist_min = document.getElementById('error_dist_min'),
        error_dist_max = document.getElementById('error_dist_max'),
        error_peso_max = document.getElementById('error_peso_max'),
        error_checkbox_horario = document.getElementById('error_checkbox_horario'),
        error_tipo = document.getElementById('error_tipo'),
        error_capacidad = document.getElementById('error_capacidad'),
        error_trabajos = document.getElementById('error_trabajos');

        function validar_dist_min(e){
          if(dist_min.value == '' || dist_min.value == null){
            error_dist_min.style.display = 'block';
            error_dist_min.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo distancia mínima'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_dist_min.style.display = 'none';
          }
        }

        function validar_dist_max(e){
          if(dist_max.value == '' || dist_max.value == null){
            error_dist_max.style.display = 'block';
            error_dist_max.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo distancia máxima'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_dist_max.style.display = 'none';
          }
        }

        function validar_peso_max(e){
          if(peso_max.value == '' || peso_max.value == null){
            error_peso_max.style.display = 'block';
            error_peso_max.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo peso máximo'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_peso_max.style.display = 'none';
          }
        }

        function validar_tipo(e){
          if(tipo.value == '' || tipo.value == null){
            error_tipo.style.display = 'block';
            error_tipo.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo Vehículo'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_tipo.style.display = 'none';
          }
        }

        function validar_capacidad(e){
          if(capacidad.value == '' || capacidad.value == null){
            error_capacidad.style.display = 'block';
            error_capacidad.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo capacidad'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_capacidad.style.display = 'none';
          }
        }

        function validar_trabajos(e){
          if(trabajos.value == '' || trabajos.value == null){
            error_trabajos.style.display = 'block';
            error_trabajos.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo trabajos'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_trabajos.style.display = 'none';
          }
        }

        function validar_checkbox_horario(e){
          if (am.checked == false && pm.checked == false){
            error_checkbox_horario.style.display = 'block';
            error_checkbox_horario.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor seleccione al menos uno de los dos horarios';
            e.preventDefault();
          } else {
            error_checkbox_horario.style.display = 'none';
          }
        }

        function validarFormulario(e){
          error_dist_min.innerHTML = "";
          error_dist_max.innerHTML = "";
          error_peso_max.innerHTML = "";
          error_checkbox_horario.innerHTML = "";
          error_tipo.innerHTML = "";
          error_capacidad.innerHTML = "";
          error_trabajos.innerHTML = "";
          validar_dist_min(e);
          validar_dist_max(e);
          validar_peso_max(e);
          validar_checkbox_horario(e);
          validar_tipo(e);
          validar_capacidad(e);
          validar_trabajos(e);
        }

    formulario.addEventListener('submit', validarFormulario);

  });

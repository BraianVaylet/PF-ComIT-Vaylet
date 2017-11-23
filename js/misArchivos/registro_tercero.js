  $(document).ready(function() {

    /* VALIDACION DEL FORMULARIO: */

    var formulario = document.getElementById('formulario'),
        monto_cadeterias = formulario.monto_cadeterias,
        monto_fletes = formulario.monto_fletes,
        extracto = formulario.extracto,
        tyc_uso = formulario.tyc_uso,
        modo_monto_cadete = document.getElementById('modo_monto_cadete'),
        modo_monto_flete = document.getElementById('modo_monto_flete'),
        error_monto_cadeterias = document.getElementById('error_monto_cadeterias'),
        error_monto_fletes = document.getElementById('error_monto_fletes'),
        error_modo_monto_cadete = document.getElementById('error_modo_monto_cadete'),
        error_modo_monto_flete = document.getElementById('error_modo_monto_flete'),
        error_extracto = document.getElementById('error_extracto'),
        error_checkbox_tyc_uso = document.getElementById('error_checkbox_tyc_uso');

        function validar_monto_cadeterias(e){
          if(monto_cadeterias.value == '' || monto_cadeterias.value == null){
            error_monto_cadeterias.style.display = 'block';
            error_monto_cadeterias.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo monto cadeterias'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_monto_cadeterias.style.display = 'none';
          }
        }

        function validar_monto_fletes(e){
          if(monto_fletes.value == '' || monto_fletes.value == null){
            error_monto_fletes.style.display = 'block';
            error_monto_fletes.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo monto fletes'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_monto_fletes.style.display = 'none';
          }
        }

        function validar_extracto(e){
          if(extracto.value == '' || extracto.value == null){
            error_extracto.style.display = 'block';
            error_extracto.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo extracto'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_extracto.style.display = 'none';
          }
        }

        function validar_modo_monto_cadete(e){
          if(modo_monto_cadete.value == '' || modo_monto_cadete.value == null){
            error_modo_monto_cadete.style.display = 'block';
            error_modo_monto_cadete.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo modalidad'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_modo_monto_cadete.style.display = 'none';
          }
        }

        function validar_modo_monto_flete(e){
          if(modo_monto_flete.value == '' || modo_monto_flete.value == null){
            error_modo_monto_flete.style.display = 'block';
            error_modo_monto_flete.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo modalidad'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_modo_monto_flete.style.display = 'none';
          }
        }

        function validar_checkbox_tyc_uso(e){
          if (tyc_uso.checked == false){
            error_checkbox_tyc_uso.style.display = 'block';
            error_checkbox_tyc_uso.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor acepte los términos y condiciones de uso de la página';
            e.preventDefault();
          } else {
            error_checkbox_tyc_uso.style.display = 'none';
          }
        }

        function validarFormulario(e){
          // error_monto_cadeterias.innerHTML = "";
          // error_monto_fletes.innerHTML = "";
          // error_modo_monto_cadete.innerHTML = "";
          // error_modo_monto_flete.innerHTML = "";
          error_extracto.innerHTML = "";
          error_checkbox_tyc_uso.innerHTML = "";
          // validar_monto_cadeterias(e);
          // validar_monto_fletes(e);
          validar_extracto(e);
          // validar_modo_monto_cadete(e);
          // validar_modo_monto_flete(e);
          validar_checkbox_tyc_uso(e);
        }

    formulario.addEventListener('submit', validarFormulario);

  });

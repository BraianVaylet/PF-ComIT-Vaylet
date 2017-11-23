  $(document).ready(function() {

    /* VALIDACION DEL FORMULARIO: */

    var formulario = document.getElementById('formulario'),
        correo = formulario.correo,
        password = formulario.password,
        error_correo = document.getElementById('error_correo'),
        error_password = document.getElementById('error_password');

        function validar_correo(e){
          if(correo.value == '' || correo.value == null){
            error_correo.style.display = 'block';
            error_correo.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo correo'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_correo.style.display = 'none';
          }
        }

        function validar_password(e){
          if(password.value == '' || password.value == null){
            error_password.style.display = 'block';
            error_password.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo password'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_password.style.display = 'none';
          }
        }

        function validarFormulario(e){
          error_correo.innerHTML = "";
          error_password.innerHTML = "";
          validar_correo(e);
          validar_password(e);
        }

    formulario.addEventListener('submit', validarFormulario);

  });

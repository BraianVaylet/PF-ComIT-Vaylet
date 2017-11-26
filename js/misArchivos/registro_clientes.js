  $(document).ready(function() {

    /* VALIDACION DEL FORMULARIO: */
    // LAS VALIDACIONES DE PASSWORD Y PASSWORD2 ESTAN HECHAS CON PHP.

    var formulario = document.getElementById('formulario'),
        usuario_cliente = formulario.usuario_cliente,
        correo = formulario.correo,
        telefono = formulario.telefono,
        password = formulario.password,
        password2 = formulario.password2,
        error_usuario_cliente = document.getElementById('error_usuario_cliente'),
        error_correo = document.getElementById('error_correo'),
        error_telefono = document.getElementById('error_telefono'),
        error_password = document.getElementById('error_password'),
        error_password2 = document.getElementById('error_password2');

        function validar_usuario_cliente(e){
          if(usuario_cliente.value == '' || usuario_cliente.value == null){
            error_usuario_cliente.style.display = 'block';
            error_usuario_cliente.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo nombre'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_usuario_cliente.style.display = 'none';
          }
        }

        function validar_correo(e){
          if(correo.value == '' || correo.value == null){
            error_correo.style.display = 'block';
            error_correo.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo correo'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_correo.style.display = 'none';
          }
        }

        function validar_telefono(e){
          if(telefono.value == '' || telefono.value == null){
            error_telefono.style.display = 'block';
            error_telefono.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo telefono'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_telefono.style.display = 'none';
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

        function validar_password2(e){
          if(password2.value == '' || password2.value == null){
            error_password2.style.display = 'block';
            error_password2.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo password'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_password2.style.display = 'none';
          }
        }

        function validarFormulario(e){
          error_usuario_cliente.innerHTML = "";
          error_correo.innerHTML = "";
          error_telefono.innerHTML = "";
          error_password.innerHTML = "";
          error_password2.innerHTML = "";
          validar_usuario_cliente(e);
          validar_correo(e);
          validar_telefono(e);
          validar_password(e);
          validar_password2(e);
        }

    formulario.addEventListener('submit', validarFormulario);

  });

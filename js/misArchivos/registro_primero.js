  $(document).ready(function() {

    /* VALIDACION DEL FORMULARIO: */

    var formulario = document.getElementById('formulario'),
        usuario = formulario.usuario,
        correo = formulario.correo,
        telefono = formulario.telefono,
        password = formulario.password,
        password2 = formulario.password2,
        dni = formulario.dni,
        fecha_nacimiento = formulario.fecha_nacimiento,
        ciudad = document.getElementById('ciudad'),
        soy_cadete = formulario.soy_cadete,
        soy_flete = formulario.soy_flete,
        error_usuario = document.getElementById('error_usuario'),
        error_correo = document.getElementById('error_correo'),
        error_telefono = document.getElementById('error_telefono'),
        error_password = document.getElementById('error_password'),
        error_password2 = document.getElementById('error_password2'),
        error_dni = document.getElementById('error_dni'),
        error_fecha_nacimiento = document.getElementById('error_fecha_nacimiento'),
        error_ciudad = document.getElementById('error_ciudad'),
        error_checkbox = document.getElementById('error_checkbox');

        function validar_usuario(e){
          if(usuario.value == '' || usuario.value == null){
            error_usuario.style.display = 'block';
            error_usuario.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo nombre'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_usuario.style.display = 'none';
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

        function validar_telefono(e){
          if(telefono.value == '' || telefono.value == null){
            error_telefono.style.display = 'block';
            error_telefono.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo telefono'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_telefono.style.display = 'none';
          }
        }

        function validar_dni(e){
          if(dni.value == '' || dni.value == null){
            error_dni.style.display = 'block';
            error_dni.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo dni'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_dni.style.display = 'none';
          }
        }

        function validar_fecha_nacimiento(e){
          if(fecha_nacimiento.value == '' || fecha_nacimiento.value == null){
            error_fecha_nacimiento.style.display = 'block';
            error_fecha_nacimiento.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo fecha nacimiento'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_fecha_nacimiento.style.display = 'none';
          }
        }

        function validar_ciudad(e){
          if(ciudad.value == '' || ciudad.value == null){
            error_ciudad.style.display = 'block';
            error_ciudad.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor completa el campo ciudad'; // el += es para sumarle un elemento sin borrar el anterior

            e.preventDefault(); // para no enviar los datos del formulario.
          } else {
            error_ciudad.style.display = 'none';
          }
        }

        function validar_checkbox(e){
      		if (soy_cadete.checked == false && soy_flete.checked == false){
      			error_checkbox.style.display = 'block';
      			error_checkbox.innerHTML += '<i class="tiny material-icons">arrow_upward</i> Por favor seleccione al menos uno de los servicios';
      			e.preventDefault();
      		} else {
      			error_checkbox.style.display = 'none';
      		}
      	}

        function validarFormulario(e){
          error_ciudad.innerHTML = "";
          error_usuario.innerHTML = "";
          error_correo.innerHTML = "";
          error_telefono.innerHTML = "";
          error_password.innerHTML = "";
          error_password2.innerHTML = "";
          error_dni.innerHTML = "";
          error_fecha_nacimiento.innerHTML = "";
          error_checkbox.innerHTML = "";
          validar_usuario(e);
          validar_correo(e);
          validar_telefono(e);
          validar_password(e);
          validar_password2(e);
          validar_dni(e);
          validar_fecha_nacimiento(e);
          validar_ciudad(e);
          validar_checkbox(e);
        }

    formulario.addEventListener('submit', validarFormulario);

  });

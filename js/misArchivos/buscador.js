  $(document).ready(function(){

    var formulario = document.getElementById('formulario');

    $('.mostrar_ciudad_texto').hide();
    $('#texto_ciudad').hide();

    $('select#ciudad').on('change',function(){
      var valor = $(this).val();
      $('.mostrar_ciudad_texto').show();
      $("#mostrar_ciudad").text(valor);
    });

  });

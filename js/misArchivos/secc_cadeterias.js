$(function(){

    // CAROUSEL:
    //----------------------------------------------------------------------------
    $('.carousel.carousel-slider').carousel({fullWidth: true});

    //btn:
    //----------------------------------------------------------------------------
    function realizaProceso(id){
        var parametros = { "id" : id };
        $.ajax({
                data:  parametros,
                url:   'contenido_cliente.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}

});

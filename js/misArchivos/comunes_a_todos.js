  $(function(){
        // MENU:
        //---------------------------------------------------------------------------------------------
        $(".dropdown-button").dropdown();

        //REGISTRO:
        //---------------------------------------------------------------------------------------------
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 90, // Creates a dropdown of 15 years to control year,
          today: 'Today',
          clear: 'Clear',
          close: 'Ok',
          closeOnSelect: false // Close upon selecting a date,
        });

        $('.tooltipped').tooltip({delay: 50});

        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        //$('.modal').modal();
        $('#modal_registro').modal();
        $('#modal_pregunta').modal();
        $('#modal_contacto_index').modal();
        $('#modal_contacto_vistas').modal();
        $('#modal_contacto').modal('open');


        //NUEVO:
        //---------------------------------------------------------------------------------------------
        $('select').material_select();






 });

      $(document).ready(function() {

        /* Ocultar Elementos */
            $('#mas_informacion').hide();
            $('#list_insertar').hide();
            $('#list_borrar').hide();
            $('#list_actualizar').hide();
            $('#list_consultar').hide();

            $('#btn_mas_informacion').click(
              function(){
                $('#mas_informacion').show('slow');
              }
            );

            $('#btn_insertar').click(
              function(){
              	$('#list_insertar').hide();
	            $('#list_borrar').hide();
	            $('#list_actualizar').hide();
	            $('#list_consultar').hide();
                $('#list_insertar').show('slow');
              }
            );
            $('#btn_actualizar').click(
              function(){
              	$('#list_insertar').hide();
	            $('#list_borrar').hide();
	            $('#list_actualizar').hide();
	            $('#list_consultar').hide();
                $('#list_actualizar').show('slow');
              }
            );
            $('#btn_borrar').click(
              function(){
              	$('#list_insertar').hide();
	            $('#list_borrar').hide();
	            $('#list_actualizar').hide();
	            $('#list_consultar').hide();
                $('#list_borrar').show('slow');
              }
            );
            $('#btn_consultar').click(
              function(){
              	$('#list_insertar').hide();
	            $('#list_borrar').hide();
	            $('#list_actualizar').hide();
	            $('#list_consultar').hide();
                $('#list_consultar').show('slow');
              }
            );

      });

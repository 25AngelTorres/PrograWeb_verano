 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Clase programación web. <br><span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>

 </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    


        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox -->
        
        <script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>


 <!-- Fancybox -->
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox -->
        <script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <script type="text/javascript" src="../js/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="../js/jquery.fancybox-media.js?v=1.0.6"></script>
        <script type="text/javascript" src="../js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Fancybox -->
    <script type='text/javascript'>
      $(document).ready(function() {
        $('.various').fancybox({
          maxWidth  : 800,
          maxHeight : 600,
          fitToView : false,
          width   : '70%',
          height    : '70%',
          autoSize  : false,
          closeClick  : false,
          openEffect  : 'none',
          closeEffect : 'none'
        })
      });
    </script>



    <!-- Bootstrap Validator -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>


  <!-- Script de Validator -->
  <script>
    $(document).ready(function() {
      $('#registerForm').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          titulo: {
            message: 'El titulo no es valido',
            validators: {
              notEmpty: {
                message: 'El titulo es requerido y no puede ser nulo'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'Debe ser mayor a 6 caracteres y menor a 30'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9 -]+$/,
                message: 'El titulo solo acepta caracteres alfanumericos y guiones cortos'
              }
            }
          },
          subtitulo: {
            message: 'El subtitulo no es valido',
            validators: {
              stringLength: {
                min: 6,
                max: 30,
                message: 'Debe ser mayor a 6 caracteres y menor a 30'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9 -]+$/,
                message: 'El subtitulo solo acepta caracteres alfanumericos y guiones cortos'
              }
            }
          },
          portada: {
            message: 'Es necesario una portada',
            validators:{
              notEmpty:{
                message:'Portada necesaria para continuar'
              }
            }
          },
          fecha: {
            message: 'La fecha no es valida',
            validators:{
              notEmpty:{
                message:'Campo requerido para continuar'
              }
            }
          },
          numero: {
            message: 'El formato de numero no es valido',
            validators:{
              notEmpty:{
                message:'Campo requerido para continuar'
              },
              regexp:{
                regexp: /^[0-9]+$/,
                message: 'Formato de numero no valido'
              }
            }
          },
          volumen: {
            message: 'El formato de volumen no es valido',
            validators:{
              notEmpty:{
                message:'Campo requerido para continuar'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9-_]+$/,
                message: 'Formato de volumen no valido'
              }
            }
          },
          clave: {
            message: 'La clave no es valida',
            validators: {
              notEmpty: {
                message: 'Campo requerido para continuar'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'Debe ser mayor a 6 caracteres y menor a 30'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9. -_]+$/,
                message: 'Formato de clave no valido'
              }
            }
          },
          nombre: {
            message: 'El nombre no es valido',
            validators: {
              notEmpty: {
                message: 'Campo requerido para continuar'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'Debe ser mayor a 6 caracteres y menor a 30'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9_ -]+$/,
                message: 'Formato de nombre no valido'
              }
            }
          },
          editorial: {
            message: 'La editorial no es valida',
            validators: {
              notEmpty: {
                message: 'Campo requerido para continuar'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'Debe ser mayor a 6 caracteres y menor a 30'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9 -]+$/,
                message: 'Formato de editorial no valido'
              }
            }
          },
          directorio: {
            message: 'El directorio no es valido',
            validators: {
              notEmpty: {
                message: 'Campo requerido para continuar'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'Debe ser mayor a 6 caracteres y menor a 30'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9 -]+$/,
                message: 'Formato de directorio no valido'
              }
            }
          },
          
        }
    });
  });
  </script> 

  <!-- Ejemplo 6 de Bootstrap datetimepicker -->
    <script type="text/javascript">
      $(function () {
          $('#datetimepicker6').datetimepicker();
      });
    </script>                    
                    
                    
  <script type="text/javascript" src="../js/moment.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
     


  </body>
</html>
$(document).ready(function() {

        /* Ocultar Elementos */
            $('#mas_informacion').hide();
            $('#list_insertar').hide();
            $('#list_borrar').hide();
            $('#list_actualizar').hide();
            $('#list_consultar').hide();
            $('#btn_menos_informacion').hide();

            $('#btn_mas_informacion').click(
              function(){
                $('#btn_mas_informacion').hide();
                $('#mas_informacion').show('slow');
                $('#btn_menos_informacion').show('slow');
              }
            );
            $('#btn_menos_informacion').click(
              function(){
                $('#btn_menos_informacion').hide();
                $('#mas_informacion').hide('slow');
                $('#btn_mas_informacion').show('slow');
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




            /* Fancybox */
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
            });

        /* Bootstrapvalidator */
            $('#registerForm').bootstrapValidator({
              message: 'Este valor no es valido',
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                nombre: {
                  message: 'El nombre no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 30,
                      message: 'Debe ser mayor a 1 caracteres y menor a 30'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -ñÑ]+$/,
                      message: 'Formato de nombre no valido'
                    }
                  }
                },
                abreviatura: {
                  message: 'La abreviatura no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 5,
                      message: 'Debe ser mayor a 1 caracteres y menor a 5'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de abreviatura no valido'
                    }
                  }
                },
                apellido: {
                  message: 'El apellido no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 50,
                      message: 'Debe ser mayor a 1 caracteres y menor a 50'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -ñÑ]+$/,
                      message: 'Formato de apellido no valido'
                    }
                  }
                },
                fecha_creacion: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -ñÑ:\/]+$/,
                      message: 'Formato no valido'
                    }
                  }
                },
                archivo_pdf: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -ñÑ.:]+$/,
                      message: 'Formato de apellido no valido'
                    }
                  }
                },
                resumen: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                abstract: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                introduccion: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                metodologia: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                contenido: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                conclusiones: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                agradecimientos: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                status: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                referencias: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                  }
                },
                email: {
                  message: 'El email no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9-_@-ñÑ.]+$/,
                      message: 'Formato de email no valido'
                    }
                  }
                },
                id_status: {
                  message: 'Estatus no válido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    regexp: {
                      regexp: /^[0-9]+$/,
                      message: 'Elige un Estatus. Campo necesario para continuar'
                    }
                  }
                },
                idcontinente: {
                  message: 'Continente no válido',
                  validators: {
                    notEmpty: {
                      message: 'Seleccione un continente, campo necesario'
                    }
                  }
                },
                idciudad: {
                  message: 'Campo necesario para continuar',
                  validators:{
                    notEmpty:{
                      message: 'Campo necesario para continuar'
                    }
                  }
                },
                idpais:{
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    }
                  }
                },
                idequipo: {
                  message: 'Campo requerido para continuar',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    }
                  }
                },
                bandera: {
                  message: 'Compo necesario para continuar',
                  validators:{
                    notEmpty:{
                      message: 'Campo necesario para continuar'
                    }
                  }
                },
                escudo: {
                  message: 'Compo necesario para continuar',
                  validators:{
                    notEmpty:{
                      message: 'Campo necesario para continuar'
                    }
                  }
                },
                titulo: {
                  message: 'El titulo no es valido',
                  validators: {
                    notEmpty: {
                      message: 'El titulo es requerido y no puede ser nulo'
                    },
                    stringLength: {
                      min: 1,
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
                      min: 1,
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
                foto: {
                  message: 'Campo requerido para continuar',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
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
                Edad: {
                  message: 'El formato de edad no es valido',
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
                peso: {
                  message: 'El formato de peso no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9.]+$/,
                      message: 'Formato de peso no valido'
                    }
                  }
                },
                estatura: {
                  message: 'El formato de peso no es valido',
                  validators:{
                    notEmpty:{
                      message:'Campo requerido para continuar'
                    },
                    regexp:{
                      regexp: /^[0-9.]+$/,
                      message: 'Formato de peso no valido'
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
                }
              }
            });

        /* Datetimepicker */
            $(function () {
                $('#datetimepicker6').datetimepicker();
            });



});

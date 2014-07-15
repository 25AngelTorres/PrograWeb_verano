<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="jumbotron" id="jumbotron">
        <h1>Mundial, Brasil 2014</h1>
        <p>P&aacute;gina no oficial de la copa mundial de Brasil 2014, aqui podas ingresar equipos y otros datos a la base de datos, as&iacute; como consultar estadisticas, marcadores y resultados de los partidos.</p>

        <div>
          <center>
            <img src="../image/brasil001.jpg" />
          </center>
        </div>
        <br />
        <p><h3 class="btn btn-primary btn-lg" role="button" id="btn_mas_informacion">Mas informacion &raquo;</h3></p>
        <div id="div_mas_informacion">
          <p>La Copa Mundial de la FIFA Brasil 2014 es la XX edición de la Copa Mundial de Fútbol. 
            Este torneo se realiza en Brasil entre el 12 de junio y el 13 de julio de 2014, siendo 
            la segunda vez que este certamen deportivo se realiza en dicho país, tras el campeonato de 1950.
            <br/>
            Luego de que el presidente de la FIFA, Joseph Blatter, estableciera en 2001 el criterio de rotación continental de la sede del torneo, América del Sur fue seleccionada en 2004 para celebrar en 2014 su primera copa desde Argentina 1978. Pese al entusiasmo inicial de algunos países, solo Brasil y Colombia presentaron sus candidaturas oficiales antes del cierre del plazo, en diciembre de 2006. Algunos meses después, Colombia retiró su candidatura, dejando como único postulante a Brasil. El 30 de octubre de 2007, la FIFA lo designó, de manera oficial, como el país sede de la Copa Mundial de Fútbol de 2014.
            <br/>
            202 federaciones afiliadas a FIFA participaron, a través de sus equipos representativos, del proceso clasificatorio para determinar las 32 selecciones participantes en el torneo. El campeonato fue organizado en dos fases: en la primera, se conformaron ocho grupos de cuatro equipos cada uno, avanzando a la siguiente ronda los dos mejores de cada grupo. Los dieciséis clasificados se enfrentarían posteriormente en partidos eliminatorios, hasta llegar a los dos equipos que disputarán la final, el 13 de julio en el histórico Estadio Maracaná de Río de Janeiro.
            <br />
            Brasil realizó una millonaria inversión para renovar su infraestructura deportiva y de transportes con el fin de organizar el torneo. En total, 12 estadios fueron definidos para ser sedes de los partidos. Sin embargo, el alto costo incurrido en las obras y sus retrasos, motivaron una serie de protestas por parte de la población brasileña, antes y durante la Copa Mundial.
            <br />
            En el desarrollo del certamen se dio una serie de sorpresas durante la fase de grupos, destacando la eliminación de España, la selección defensora del título mundial. También quedaron eliminados en la primera fase los campeones Inglaterra e Italia. Además, hubo un importante avance de los equipos americanos, ocho de los cuales clasificaron a octavos de final. También por primera vez en una Copa del Mundo, dos equipos africanos avanzaron a la segunda fase, en este caso, Argelia y Nigeria.
            <br />
            Durante los octavos y cuartos de final se dieron los resultados más esperados, destacándose la paridad de los enfrentamientos, que se decidieron por mínimas diferencias en el marcador, en el tiempo suplementario o en la tanda de penales.
            <br />
            Las semifinales pusieron frente a frente, en cada una de ellas, a un equipo europeo con uno sudamericano, reafirmando la hegemonía histórica de las asociaciones respectivas.
            <br />
            Desde lo tecnológico, se produjo en el torneo el debut, dentro de una Copa Mundial de Fútbol, del sistema de transmisión en ultra alta definición (resolución 4K), así como el estreno de sensores para evitar goles fantasmas con el sistema de detección automática de goles (DAG), usado para determinar, en jugadas dudosas, si el balón cruzó o no la línea de gol.</p>
        </div>
      </div>




      <div class="page-header">
        <h1>Ingresar datos a la Base de Datos</h1>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="list-group">
            <a href="../estadio/form_estadio.php" class="list-group-item">
              <h4 class="list-group-item-heading">Ingresar un estadio</h4>
              <p class="list-group-item-text">Ingresar un estadio de f&uacute;tbol en el cual se jugara un partido dentro de la Base de 
                Datos.</p>
            <a href="../posision/form_posision.php" class="list-group-item">
              <h4 class="list-group-item-heading">Ingresar una posisi&oacute;n</h4>
              <p class="list-group-item-text">Ingresar una posisi&oacute;n de un jugador en la Base de Datos.</p>
            </a>
          </div>
        </div><!-- /.col-sm-6 -->
        
        <div class="col-sm-6">
          <div class="list-group">
            <a href="../continente/form_continente.php" class="list-group-item">Ingresar un continente</a>
            <a href="../pais/form_pais.php" class="list-group-item">Ingresar un pa&iacute;s</a>
            <a href="../equipo/form_equipo.php" class="list-group-item">Ingresar equipo</a>
            <a href="../integrante/form_integrante.php" class="list-group-item">Ingresar integrante</a>
          </div>


          <div class="btn btn-lg btn-success" role="button">
          <a class="various fancybox.iframe" href="formRevista.html">Fancybox</a>
        </div>


        </div><!-- /.col-sm-4 -->
        
      </div>



      

       



      <div class="page-header">
        <h1>Wells</h1>
      </div>
      <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <center><h2>Bootstrap Validator</h2></center>
              </div>
            </div>

      <div class="row">
        <form id="registerForm" class="form-horizontal" role="form">
        <!-- Validador -->
          <div class="col-md-9">
          <!-- Titulo -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Titulo</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="titulo" />
              </div>
            </div>
          <!-- Subtitulo -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Subtitulo</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="subtitulo" />
              </div>
            </div>
          <!-- Portada -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Portada</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="portada" />
              </div>
            </div>
          <!-- Fecha -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Fecha</label>
            <!-- Ejemplo 6 de Boostrap datetimepicker -->
              <div class='col-sm-9'>
                <input type='text' class="form-control" id='datetimepicker6'/>
              </div>
            </div>
          <!-- Numero -->
            <div class="form-group">
              <label class="col-sm-3 control-label">N&uacute;mero</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="numero" />
              </div>
            </div>
          <!-- Volumen -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Volumen</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="volumen" />
              </div>
            </div>
          <!-- Clave -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Clave</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="clave" />
              </div>
            </div>
          <!-- Nombre -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nombre" />
              </div>
            </div>
          <!-- Editorial -->    
            <div class="form-group">
              <label class="col-sm-3 control-label">Editorial</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="editorial" />
              </div>
            </div>
          <!-- Directorio -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Directorio</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="directorio" />
              </div>
            </div>
          </div>
          
          <div class="col-md-2">
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
          </div>

        </form>
      </div>

    <!--Fin del container-->
    </div>

        </p>
      </div>
<?php include ('../layouts/footer.php'); ?>

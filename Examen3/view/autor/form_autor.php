<?php 

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

  if(isset($_POST['nombre']))  {
    //Inicializar el controlador
    $AutorC = new AutorController();
    $AutorC->inserta_Autor($_POST);
  }

?>
<!-- header 

  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
-->


        </div> <!-- class="cover-container" -->

          <div class="container" id ="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h1>Autor <small>Insertar</small></h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal" role="form" id="registerForm" method="post">
<!-- Nombre -->
                  <div class="form-group">
                    <label for="autor_nombre" class="col-sm-4 control-label"> Nombre del autor: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="autor_nombre" placeholder="Nombre del autor" name="nombre">
                    </div>
                  </div>
<!-- Apellido -->
                  <div class="form-group">
                    <label for="autor_apellido" class="col-sm-4 control-label"> Apellido del autor: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="autor_apellido" placeholder="Apellido del autor" name="apellido">
                    </div>
                  </div>
<!-- Email -->
                  <div class="form-group">
                    <label for="autor_email" class="col-sm-4 control-label"> Email del autor: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="autor_Email" placeholder="Email del autor" name="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" value="Enviar"  />
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
        </div><!-- Conteiner -->
      </div> <!-- class="site-wrapper-inner" -->
    </div> <!-- class="site-wrapper" -->

   

<?php include ('../layouts/footer.php'); ?>

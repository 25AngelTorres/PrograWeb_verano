
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap validator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Bootstrap Validator  
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/> -->
        
  </head>
  <body>
    
    <div class="container"    >
    	<div class="row ">
        <div class="col-md-12">
    	
        <!-- Ejemplo 1 -->
            <form>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="registerForm" name="username" />
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="text" class="registerForm" name="email" />
                </div>
            </form>
	
    		<hr />

		<!-- Ejmplo 2 -->
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="registerForm" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <input type="text" class="registerForm" name="email" placeholder="Email address" />
                </div>
            </form>

			<hr />
            
         <!-- Ejemplo 3 -->
            <form id="maskForm" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-3 control-label">IP address</label>
                    <div class="col-lg-5">
                        <input type="text" class="registerForm" name="ipAddress" />
                    </div>
                </div>
            </form>
            
            

		</div>
        </div>
    </div> <!-----------------Fin de Container -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Bootstrap validator 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    -->
    
        <script>
		
		$(document).ready(function() {
			$('.registerForm').bootstrapValidator({
				message: 'Este valor no es valido jajajajajajajaja :D ',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					username: {
						message: 'The username is not valid',
						validators: {
							notEmpty: {
								message: 'The username is required and cannot be empty'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'The username must be more than 6 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'The username can only consist of alphabetical, number and underscore'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'The email is required and cannot be empty'
							},
							emailAddress: {
								message: 'The input is not a valid email address'
							}
						}
					}
				}
			});
			});
	</script>
    
  </body>
</html>
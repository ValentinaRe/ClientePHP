<?php
    session_start();
    
    if( $_SESSION["session"] == 'verdadero'){
        $name = $_SESSION["username"];
    }else{
    	session_unset();
        session_destroy();
        header('Location: /ClientePHP/Login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"rel="stylesheet"></link>
	<link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>

	<script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
	<title>Menú</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapse"
                data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li role="presentation">
                        <form action="Logout.php" id="Logout" method="get"
                            class="form-horizontal mitad" action="#">
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-success left">Logout</button>
                                </div>
                            </div>
                        </form>
                </ul>
               </div>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="page-header">
		<h2>Buscadores</h2>
		</div>

		<div class="panel">
			<table class="table table-striped">	
				
				<tr>		  				
					<td>
						<a href="busquedaSimple.php" class="btn btn-primary">Busqueda Simple</a>
					</td>
	  				<td>
						<a href="busquedaAvanzada.php" class="btn btn-primary">Busqueda Avanzada</a>
	  				</td>	  			
	  			</tr>
		  	</table>
		</div>	
	</div>
</body>
</html>


<!DOCTYPE HTML>
<HTML>
<HEAD>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"rel="stylesheet"></link>
    <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>

    <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <title>Perfil</title>
    
</HEAD>
<BODY>
<?php
$run = $_POST['run'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$region = $_POST['region'];
$ciudad = $_POST['ciudad'];
$fotoCont = $_POST['fotoCont'];
?>
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
<div class="junbotron">
<div class="container">
<table class="table">
    <tr>
        <td><h1>Perfil de Contacto</h1></td>
        <td><a href="busquedaSimple.php" class="btn btn-default">busqueda simple</a>
        <td><a href="busquedaAvanzada.php" class="btn btn-default">busqueda avanzada</a>
    </tr>
</table>

<div >
<table class="table table-responsive">
   <tr class="success">
        <td><p> <?php echo $fotoCont?></p></td>
    </tr>
     <tr >
        <td><p>Run: <?php echo $run?></p></td>
    </tr>
    <tr>
        <td><p>Nombre: <?php echo $nombre?></p></td>
    </tr>
    <tr >
        <td><p>Apellido: <?php echo $apellido?></p></td>
    </tr>
    <tr >
        <td><p>Mail: <?php echo $mail?></p></td>
    </tr>

    <tr >
        <td><p>Teléfono: <?php echo $telefono?></p></td>
    </tr>
     <tr >
        <td><p>País: <?php echo $pais?></p></td>
    </tr>
     <tr >
        <td><p>Región: <?php echo $region?></p></td>
    </tr>
    <tr >
        <td><p>Ciudad: <?php echo $ciudad?></p></td>
    </tr>

    


</table>
</div>
</div>
</div>
</BODY>
</HTML>
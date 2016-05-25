



<!DOCTYPE HTML>
<HTML>
<HEAD>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    
</HEAD>
<BODY>
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$run = $_POST['run'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$region = $_POST['region'];
$ciudad = $_POST['ciudad'];
$fotoCont = $_POST['fotoCont'];
?>
<table class="table">
    <tr>
        <td><h1>Perfil de Contacto</h1></td>
        <td><a href="busquedaSimple.php" class="btn btn-default">
</table>

<div >
<table class="table table-responsive">
   <tr >
        <td><p> <?php echo $fotoCont?></p></td>
    </tr>
    <tr>
        <td><p>Nombre: <?php echo $nombre?></p></td>
    </tr>
    <tr >
        <td><p>Apellido: <?php echo $apellido?></p></td>
    </tr>
    <tr >
        <td><p>RUN: <?php echo $run?></p></td>
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
</BODY>
</HTML>
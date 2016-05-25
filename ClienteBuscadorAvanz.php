<?php
session_start();
    
    if( $_SESSION["session"] == 's'){
        $name = $_SESSION["username"];
    }else{
        session_unset();
        session_destroy();
        header('Location: /PDS-CRM/formLogin.php');
    }

set_include_path(get_include_path() .
    PATH_SEPARATOR .
    realpath(dirname(__FILE__) . "/../service/application/"));
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Cliente de Ejemplo Servicio Web</title>
</head>
<body>
<?php
$run="";
$nombre="";
$apellido="";
$mail="";
$telefono="";
$pais="";
$region="";
$ciudad="";
if((isset($_GET['run'] ))){
    $run=$_GET['run'] ;
}
if((isset($_GET['nombre']))){
       $nombre=$_GET['nombre'];
}
if((isset($_GET['apellido']))){
    $apellido=$_GET['apellido'];
}
if((isset($_GET['mail'] ))){
    $mail=$_GET['mail'] ;
}
if((isset($_GET['telefono'] ))){
    $telefono=$_GET['telefono'] ;
}
if((isset($_GET['pais'] ))){
    $pais=$_GET['pais'] ;
}
if((isset($_GET['region'] ))){
    $region=$_GET['region'] ;
}
if((isset($_GET['ciudad'] ))){
    $ciudad=$_GET['ciudad'] ;
}

//if ( (isset($_GET['run'] )) or (isset($_GET['nombre'])) 
 //   or (isset($_GET['apellido'])) or (isset($_GET['mail'])) 
  //  or (isset($_GET['telefono'])) or (isset($_GET['pais'])) or (isset($_GET['region'])) or (isset($_GET['ciudad']))){
 // $_GET['nombre'] = str_replace(" ", "", $_GET['nombre']);
// Creamos un cliente SOAP
$busquedaAvanzada="";
    require_once("Zend/Soap/Client.php");
    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?wsdl";
    $cliente = new Zend_Soap_Client($wsdl_url);
    if ( ($run != "") or ($nombre != "") or ($apellido != "") or ($mail != "") or ($telefono != "") or ($pais!= "") or ($region != "")or ($ciudad != "")) {

        $run = strtolower($run);
        $nombre = strtolower($nombre);
        $apellido = strtolower($apellido);
        $mail = strtolower($mail);
        $telefono = strtolower($telefono);
        $pais = strtolower($pais);
        $ciudad = strtolower($ciudad);
        $region = strtolower($region);

       // $empresa= array('empresauid'=>1);
        $contacto=array('run'=>$run, 'nombre'=>$nombre,'apellido'=>$apellido,'mail'=>$mail,'telefono'=>
            $telefono,'pais'=>$pais,'region'=>$region,'ciudad'=>$ciudad);
       // echo json_encode($contacto);
        //$busquedaAvanzada=json_encode($contacto);
        $respuesta=new stdClass();
        $respuesta=$cliente->busquedaAvanzada($contacto);
        $decoCon= json_decode($respuesta->busquedaAvanzadaReturn);
        ?>
        <h1>Resultado Busqueda</h1>



<h1>Busqueda Avanzada</h1>

        <table >
            <tr >
                <th>Run</th>

                <th>Nombre</th>

                <th>Apellido</th>
                <th>Mail</th>
                <th>Teléfono</th>
                <th>País</th>
                <th>Región</th>
                <th>Ciudad</th>
                <th>Fotografía</th>
              
            </tr>

            <?php foreach($decoCon as $obj) {
                $run = $obj->run;

                $nombre = $obj->nombre;
                $apellido = $obj->apellido;

                $mail = $obj->mail;
                $telefono = $obj->telefono;
                $pais = $obj->pais;

                $region = $obj->region;
                $ciudad = $obj->ciudad;
                $fotoCont=$obj->fotoCont;
               
                ?>

                <tr>

                    <td><?php echo $run ?></td>

                    <td><?php echo $nombre ?></td>

                    <td><?php echo $apellido ?></td>
                    <td><?php echo $mail ?></td>
                    <td><?php echo $telefono ?></td>
                    <td><?php echo $pais ?></td>
                    <td><?php echo $region ?></td>
                    <td><?php echo $ciudad ?></td>
                   

                    
                    <?php
                    $fotoCont;
                    if ($fotoCont!= null){
                            $fotoCont= '<td><img src='.$fotoCont.'></td>';
                    }
                    else{
                        $fotoCont= '<td><img src='.$fotoCont.'></td>';
                    }

                    echo $fotoCont;
                   
                   

                    ?>
                          <td>
                          <form action="perfil.php" method="get" >
                               
                                <?php echo "<input type='hidden' name='nombre' value='$nombre'>"?>
                                <?php echo "<input type='hidden' name='apellido' value='$apellido'>"?>
                                <?php echo "<input type='hidden' name='run' value='$run'>"?>
                                <?php echo "<input type='hidden' name='mail' value='$mail'>"?>
                                <?php echo "<input type='hidden' name='telefono' value='$telefono'>"?>
                                <?php echo "<input type='hidden' name='pais' value='$pais'>"?>
                                <?php echo "<input type='hidden' name='region' value='$region'>"?>
                                <?php echo "<input type='hidden' name='ciudad' value='$ciudad'>"?>
                               
                                
                                <input type="submit" value="Ver Perfil" />
                            </form >
                            </td>
               
                </tr>
            <?php } ?>
        </table>
    <?php
}
?>
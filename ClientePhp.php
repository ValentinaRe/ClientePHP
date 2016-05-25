<?php


echo '  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>';
    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
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
if ( isset($_GET['nombre'])) {
    $_GET['nombre'] = str_replace(" ", "", $_GET['nombre']);
// Creamos un cliente SOAP
    require_once("Zend/Soap/Client.php");
    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?wsdl";
    $cliente = new Zend_Soap_Client($wsdl_url);
     $array = array("busqueda"=>strtolower($_GET['nombre']));
    if (($_GET['nombre'] != "")) {

       $respuesta=$cliente->busquedaSimple(array("busqueda" => $_GET['nombre']));
        $decoCon= json_decode($respuesta->busquedaSimpleReturn);

        ?>

        <h1>Resultado Busqueda</h1>
       

 
            <h1>Búsqueda Simple </h1>
       <table class="table table-striped">
        <thead>
        <th>run </th>
        <th>nombre </th>
        <th>apellido </th>
        <th>fotografía </th>
       
        </thead>
           
            <?php foreach($decoCon as $obj) {
                $run = $obj->run;
                $nombre = $obj->nombre;
                $apellido = $obj->apellido;

                $mail = $obj->mail;
                
                $telefono = $obj->telefono;

                $pais = $obj->pais;
                $region = $obj->region;
                $ciudad = $obj->ciudad;

               
                $fotoCont = $obj->fotoCont;
                $uid=$obj->uid;
                

            ?>
                <tr>
                    <td><?php echo $run ?></td>

                    <td><?php echo $nombre ?></td>
                    <td><?php echo $apellido ?></td>
                    
                  
                    
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
                          <form action="perfil.php" method="POST" >
                               
                                <?php echo "<input type='hidden' name='nombre' value='$nombre'>"?>
                                <?php echo "<input type='hidden' name='apellido' value='$apellido'>"?>
                                <?php echo "<input type='hidden' name='run' value='$run'>"?>
                                <?php echo "<input type='hidden' name='mail' value='$mail'>"?>
                                <?php echo "<input type='hidden' name='telefono' value='$telefono'>"?>
                                <?php echo "<input type='hidden' name='pais' value='$pais'>"?>
                                <?php echo "<input type='hidden' name='region' value='$region'>"?>
                                <?php echo "<input type='hidden' name='ciudad' value='$ciudad'>"?>
                               <?php echo "<input type='hidden' name='fotoCont' value='$fotoCont'>"?>
                                
                                <input type="submit" value="Ver Perfil" />
                            </form >
                            </td>
                </tr>

            <?php } ?>
        </table>
        <?php
    }
}
?>
 


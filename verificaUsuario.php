<?php
    session_start();
    set_include_path(get_include_path() .
        PATH_SEPARATOR .
        realpath(dirname(__FILE__) . "/../service/application/"));

    $usuario="";
    $pass="";

    if(isset($_GET['usuario'] )){
        $usuario=$_GET['usuario'] ;
    }
    if(isset($_GET['pass'])){
           $pass=$_GET['pass'];
    }
        
    
    require_once("Zend/Soap/Client.php");
    $wsdl_url = "http://localhost:8080/TallerJSP/services/WebServiceProveedor?wsdl";
    $cliente = new Zend_Soap_Client($wsdl_url);
    
    if ( ($usuario != "") or ($pass!= "") ) {

        $usua=array('usser'=>$usuario,'pass'=>$pass);

        $respuesta=new stdClass();
        $respuesta=$cliente->validacionUsuario($usua);



        $response=$respuesta->validacionUsuarioReturn;
        if ($response=="verdadero") {
            $_SESSION['username']=$usser;
            $_SESSION['session']=$response;

            header('Location: /ClientePHP/menu.php');

        }else{
            session_unset();
            session_destroy();
             $_SESSION['status']='error';
            header('Location: /ClientePHP/Login.php');

        }
    }else{
        session_unset();
        session_destroy();
        header('Location: /ClientePHP/Login.php');
    }
?>
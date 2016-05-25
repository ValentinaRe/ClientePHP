<?php
// Esto nos sirve para incluir Zend de forma directa
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
$usuario="";
$pass="";

if((isset($_POST['usuario'] ))){
    $usuario=$_POST['usuario'] ;
}
if((isset($_POST'password']))){
       $password=$_POST['password'];
?>
 <tr>

<td>     
<div class="container">

      <form class="form-signin" role="form" action="verificaUsuario.php" method="get" id="verificaUsuario">
      
        <h2 class="form-signin-heading">Iniciar Sesión</h2>
        
        <div class="form-group">
        <label class="col-lg-3 control-label">Usuario</label>
         <input type="text" class="form-control" name="user" placeholder="Nombre de usuario" required>
        </div>
        
        <div class="form-group">
        <label class="col-lg-3 control-label">Password</label>
         <input type="password" class="form-control" name="password" placeholder="Password" required >
        </div>
        
        <div class="form-group">
         <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </div>
         </td>
               
      </form> 
    </body>
</html>  

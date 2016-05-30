
<?php
    session_start();
        $status = $_SESSION["status"];

?>
<head>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>
    <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  
    <link href="./css/signin.css" rel="stylesheet"></link>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <td> 
            <form class="form-signin" role="form" action="verificaUsuario.php" method="get" id="verificaUsuario">
                          
                 <h2 class="form-signin-heading">Iniciar Sesión</h2>
                            
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required>
                    </div>
                            
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Password" required >
                    </div>
                            
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                    </div>
        
                   
         </form> 
       </td>
    </div>  
    </div>  
    </body>
</html>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>

    <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

    <script type="text/javascript" src="./js/validator.js"></script>
    <title>Búsqueda Simple</title>
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
<div class="jumbotron">
<div class="container">
    <div class="page-header">
        <h3>Búsqueda Simple </h3>
    </div>
        <form action="ClientePhp.php" id="ClientePhp" name="ClientePhp" method="get"
              class="form-horizontal mitad">
            <div class="form-group">
                <label class="col-lg-3 control-label">Buscar</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" name="nombre">
                    <br>
                </div>
            </div>
            <div class="form-group">
            <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-success left"  value="busqueda" >Enviar</button>
                </div>
            </div>
        </form>
</div>  
</div>     
</body>
</html>
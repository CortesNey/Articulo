<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<link href="jquery-flexdatalist-2.2.4/Articulojquery.flexdatalist.min.css" rel="stylesheet" type="text/css">
  

  </head>

  <body>
    

    <div class="container">

      <div class="col-xs-9">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <span class="glyphicon glyphicon-log-in" style="font-size:50px;color:white"></span>  <a class="navbar-brand"  href="#">Login</a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="RegistroUsuario.php">Registro</a>
            </ul>
          </div>  
    </nav>
<br>
        <div class="mb-3">
          <h1 class="text-primary" style="font-size:50px;color:black" align="center"> Login </h1 >
          <span    style="font-size:50px;color:black" align="center" ></span>
          
          <span class="input-group-addon">Registre datos Login</span>
          <br>
          <br>
          <form action="conex.php" method="POST">

            <div class="form-group">
              <label for="email">usuario:</label>
              <br>
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="flexdatalist" class="form-control" id="usuario" placeholder="Ingrese usuario" name="usuario" required>
              </div>    
             </div>
            <br>
            <br>
            <div class="form-group">
              <label for="pwd">contraseña:</label>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese contraseña" name="contrasena" required>
              </div>
            </div>  
          <button type="submit" class="btn btn-outline-info btn-lg" >INGRESAR</button>
          <button type="reset" class="btn btn-outline-danger btn-lg" >BORRAR</button>

          </form>
        </div>
      </div>
    </div>
  </body>
</html>

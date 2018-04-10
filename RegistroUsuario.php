<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<link href="/C/xampp/htdocs/Articulojquery.flexdatalist.min.css" rel="stylesheet" type="text/css">
 
<script>
    $(document).ready(function(){
        var date_input=$('input[name="f_creacion"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


  </head>
  <!--C:\xampp\htdocs\Articulo\jquery-flexdatalist-2.2.4-->

  <body>
    

    <div class="container">

      <div class="col-xs-9">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <span class="glyphicon glyphicon-log-in" style="font-size:50px;color:white"></span>  <a class="navbar-brand"  href="#">Registro</a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="Login (2).php">Login</a>
            </ul>
          </div>  
        </nav>
        <br>
        <div class="mb-3">
          <h1 class="text-primary" style="font-size:50px;color:black" align="center"> Registro Usuario </h1 >
          <span    style="font-size:50px;color:black" align="center" ></span>
          <span class="input-group-addon">Registre datos usuario</span>
          <br>
          <br>
          <form action="InsertUsuario.php" method="POST">

            <div class="form-group">
              <label for="email">usuario:</label>
              <br>
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="form-control" class="flexdatalist" id="usuario" placeholder="Ingrese usuario" name="usuario" required>
              </div>    
            </div>
            <br>
            <div class="form-group">
              <label for="pwd">contraseña:</label>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese contraseña" name="contrasena" required>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="estado"> Estado Usuario:</label>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
                <select class="form-control " id="estado" name ="estado"  >
                  <option>-</option>
                  <option>Activo</option>
                  <option>Inactivo</option>
                  <option>Retirado</option>
                  <option>otro</option>
                  <option>otro</option>
                </select>
              </div> 
              <br>
            <div class="form-group">  
              <label class="control-label" for="date">Fecha</label>
              <div class="input-group"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-calendar"></i></span>
                  <input class="form-control" id="f_creacion" name="f_creacion" placeholder="MM/DD/YYY" type="text"/>
                </div>    
              </div>   
            </div>  
            <br>
            <div class="form-group">
              <label for="direccion">Direccion:</label>
              <br>
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" class="flexdatalist" id="direccion" placeholder="Ingrese usuario" name="direccion" required>
              </div>    
            </div>   

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

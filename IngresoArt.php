
<!DOCTYPE html>
<html>
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso Artculo</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
 <span class="glyphicon glyphicon-hand-right" style="font-size:50px;color:white"></span>  <a class="navbar-brand"  href="#">Articulo</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

    <div class="container">
      <img src="sanguijuela.jpg" alt="..." class="img-rounded"> <h1 class="text-primary" style="font-size:50px;color:black" > Ingreso de Televisores </h1>

    <div class="signup-form-container">
    
         <!-- Inicio del formulario -->
<form role="form" action="insert.php" method="POST">

  <div class="form-group">
    <div class="col-xs-9">
      <div class="mb-3">
          <span class="input-group-addon">Registre todos los campos de este formulario</span>
          <br>
          <label for="seltiptv">Seleccione Marca:</label>
          <select class="form-control " id="marca" name ="marca"  placeholder="SEleccione la marca">
            <option>-</option>
            <option>Samsumg</option>
            <option>Lg</option>
            <option>Sony</option>
            <option>Challenger</option>
            <option>SDF</option>
          </select>
      <div class="invalid-feedback">
    </div>
  </div>
  <br>

  <div class="form-group">
    <div class="mb-3">
        <label for="Ref">Referencia </label>
        <input type="text" class="form-control" name="referencia" id="referencia" placeholder=" Ingrese aqui  Referencia" required>
        <div class="invalid-feedback">
      </div>
  </div>
  <br>

  <div class="form-group">
    <div class="mb-3">
      
        <label for="Model">Modelo </label>
        <input type="text" class="form-control" name="modelo" id="modelo" placeholder=" Ingrese aqui  Modelo" required>
        <div class="invalid-feedback">
      </div>
  </div>
  <br>



  <div class="form-group">
      <label for="tecnologia">Seleccione Tecnologia:</label>
      <select class="form-control" name="tecnologia" id="tecnologia">
        <option>-</option>
        <option>LCD</option>
        <option>LED</option>
        <option>PLASMA</option>
        <option>OLED</option>
        <option>QLED</option>
      </select>
    </div>
    <br>

   <div class="form-group">
    <div class="mb-3">
        <label for="address">Cantidad </label>
        <input type="text" class="form-control" name="cant" id="cant" placeholder=" Ingrese la Cantidad" required>
        <div class="invalid-feedback">
      </div>
  </div>
  <br>

<div class="form-group">
  <label for="ejemplo_archivo_1"> Linea </label>
  <br>
  <label class="radio-inline"><input type="radio" name="linea" id="linea">Smart TV</label>
  <label class="radio-inline"><input type="radio" name="linea" id="linea">Tradicional</label>
</div> 
<br>
<div class="form-group">
    <div class="mb-3">
        <label for="address">Precio </label>
        <input type="text" class="form-control" name="precio" id="precio" placeholder=" Ingrese el valor de venta" required>
        <div class="invalid-feedback">
      </div>
  </div>
<br>


  <div class="form-group">
    
    <label for="ejemplo_archivo_1">Adjuntar imagen</label>
    <input type="file" name="ruta_img" id="ruta_img">
    <p class="help-block">Ejemplo de texto de ayuda.</p>

 
  </div>
  

 
  <!--<div class="checkbox">
    <label>
      <input type="checkbox"> Activa esta casilla
    </label>
  </div>-->


 
  
   <button type="submit" class="btn btn-outline-info btn-lg" >INGRESAR</button>
  <button type="reset" class="btn btn-outline-danger btn-lg" >BORRAR</button>
</form>
            
           </div>

 </div>
    

</body>
</html>



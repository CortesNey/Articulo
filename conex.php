<?php 

include "config.php";

$query = "SELECT * FROM usuario WHERE usuario = '".$_POST['usuario']."' AND contrasena = '".($_POST['contrasena'])."'";

$res = $mysqli->query($query);

if ($res->num_rows == 1) {
	header ("Location: IngresoArt.php");
} else {
	header ("Location: Y.php");
}

 ?>
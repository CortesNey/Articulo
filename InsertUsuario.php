<?php 

include "config.php";

$query = "INSERT INTO `usuario` (`usuario`, `contrasena`, `estado`, `f_creacion`, `direccion`) VALUES ('".$_POST['usuario']."','".$_POST['contrasena']."','".$_POST['estado']."','".$_POST['f_creacion']."','".$_POST['direccion']."')";

																											 
$res = $mysqli->query($query);

if ($res) {
	header ("Location: index.php");
} else {
	header ("Location: Y.php");
}

 ?>

 ?>


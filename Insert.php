<?php 

include "config.php";

$query = "INSERT INTO `televisores` (`referencia`, `marca`, `modelo`, `tecnologia`, `cant`, `linea`,`precio`, `ruta_img`) VALUES ('".$_POST['referencia']."','".$_POST['marca']."','".$_POST['modelo']."','".$_POST['tecnologia']."','".$_POST['cant']."','".$_POST['linea']."','".$_POST['precio']."','".$_POST['ruta_img']."')";

																											 
$res = $mysqli->query($query);

if ($res) {
	header ("Location: index.php");
} else {
	header ("Location: Y.php");
}

 ?>

 ?>


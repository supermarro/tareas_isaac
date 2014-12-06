<?php 
include_once ("../../variables.php");
$titulo_pagina = "Belleza";
	$nombre_de_producto = $_POST ['nombre_de_producto'];
	$tipo = $_POST ['tipo_de_procuto'];
	$precio = $_POST ['precio'];
	$id = $_POST ['id'];
	
	mysql_query("UPDATE med_nat SET nombre_de_producto ='$nombre_de_producto', tipo_de_producto ='$tipo', precio ='$precio' WHERE id ='$id'");
	header('Location:index.php');
?>
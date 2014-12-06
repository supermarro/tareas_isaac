<?php
include_once('../../conexion.php');
$URL_id = $_GET['id'];
mysql_query("DELETE FROM med_nat WHERE id= $URL_id");
header('Location:index.php');
?>

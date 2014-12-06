<?php
include_once ("../../variables.php");
$titulo_pagina = "Belleza";
	
$belleza = mysql_query("SELECT * FROM med_nat");
while($fila = mysql_fetch_array($belleza)){
	$nombre_de_producto = $fila ['nombre_de_producto'];
	$tipo = $fila ['tipo_de_procuto'];
	$precio = $fila ['precio'];
	$id = $fila ['id'];
}
?>
<!doctype html>
<html>
<head>
	<?php include_once ("../head.php"); ?>
</head>
<body>
	
		<form action="actualizar.php" method="POST">
		<table>
			<tr>
				<th>nombre del producto</th>
			</tr>
			<tr>
				<td>   <textarea id="nombre_de_producto_txt" name="nombre_de_producto_txt"><?php echo $nombre_de_producto ?></textarea>      </td>
			</tr>
			<tr>
				<th>tipo de producto</th>
			</tr>
			<tr>
				<td><textarea  id="tipo_txt" name="tipo_txt"><?php echo $tipo ?></textarea></td>
			</tr>
			<tr>
				<th>precio</th>
			</tr>
			<tr>
				<td><textarea  id="precio_txt" name="precio_txt"><?php echo $precio ?></textarea></td>
			</tr>
			<tr>
				<th>OPCIONES</th>
			</tr>
			<tr>
				<td class="link"><a href="index.php">Volver</a> | <input type="submit" value="Guardar"></td>
			</tr>
		</table>
		<input type="hidden" value="<?php echo $id ?>" id="id_txt" name="id_txt">
		</form>
	</div>
</body>
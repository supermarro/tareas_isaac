<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<!--dentro del while dendtro del admin.php-->

echo "<td> <a href='editar.php?id=".$fila[id]. "'>Editar</a>
<!--dentro de actualiza.php para hacer el actualizar y es necesario hacer una varialbe $id= $POST()-->
mysql_query("UPDATE peliculas SET titulo='$titulo', duracion='$duracion', sinopsis="$sinopsis" WHERE id='$id'");
header("Location:index.php");
</body>
</html>
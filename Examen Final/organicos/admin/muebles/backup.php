<!doctype html>
<html>
<?php include_once("../variables.php"); 
$titulo_pagina = "Administración";

?>

<head>
<?php include_once("head.php");?>
<meta charset="UTF-8">
<style>
	
</style>
</head>

<body>
	<title>BUSQUEDA</title>
        <p>BELLEZA| MUEBLES | PRODUCTOS BIODEGRADALBES | MEDICAMENTOS NATURISTAS</p>
        <p>
        <form name="form1" method="post" action="index.php" id="cdr">
        <h4>Buscar Producto</h4>
        <input name="busca" type="text" id="busqueda">
        
        <input type="submit" name="submit" value="Buscar">
        </p>
        
        <h3>
        <input type="submit" name="submit" value="Crear">
        </h3>
        </form>
        
        <?php
			$busca="";
			$busca=$_POST['busca'];
			mysql_connect('localhost','root','root');
			mysql_select_db('organicos',$conexion);
			if($busca!=""){
				$busqueda=mysql_query("SELECT * FROM muebles WHERE nombre_de_producto LIKE '%".$busca."%'");
			}
		?>
        <div class="scroll">
            <table width="960" border="1">
                <tr>
                    <th>TITULO</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            <?php
                while($muestra=mysql_fetch_array($busqueda)){
                    echo "<tr>";
                    echo "<td>".$muestra['titulo']."</td>";
					echo "<td>"."<a href='editar.php'>"."EDITAR"."</a>"."</td>";
                    echo "<td>"."<a href='eliminar.php'>"."ELIMINAR"."</a>"."</td>";
                }
            ?>
            </table>
</body>
</html>
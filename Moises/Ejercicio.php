<?php
$link = mysql_connect('localhost', 'root', 'root')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
$bd= mysql_select_db ('pruebaG', $link);
mysql_set_charset('utf8',$link);
?>
<!doctype html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title> <?php echo $titulo; ?> </title>
      
    </head>
    
    <body>
    
<?php
echo "Nombre:".$_GET['nombre'];     
echo "<br />";
echo "Apellido:"
?>
       
    </body>
  </html>

<!doctype html>
<html>
<?php include_once("variables.php"); 
$titulo_pagina = "Belleza";
$belleza= mysql_query("SELECT * FROM belleza");
?>
<head>
<?php include_once("head.php");?>


</head>

<body>

<style type="text/css">
 	@charset "UTF-8";

/* Main */
#menu {
    width: 100%;
	height:50px;
    margin: 0;
    padding: 10px 0 0 0;
    list-style: none;  
    background-color: #0e3142;
    background-image: linear-gradient(#444, #111);
    box-shadow: 0 2px 1px #9c9c9c;
}

#menu li {
 /*   float:right;*/
   /* padding: 0 0 10px 0;
	margin:0 auto;
    position: relative;
	text-align:center;*/
	margin: 0 auto;
/*position: relative;*/
text-align: center;
margin-left: 500px;
top: 5px;
}

#menu a {
    float: left;
    height: 25px;
    padding: 0 25px;
    color: #999;
    text-transform: uppercase;
    font: bold 18px/25px Arial, Helvetica;
    text-decoration: none;
    text-shadow: 0 1px 0 #000;
	margin-top:5px;
}

#menu li:hover > a {
    color: #fafafa;
}

*html #menu li a:hover { /* IE6 */
    color: #fafafa;
}

#menu li:hover > ul {
    display: block;
}

/* Sub-menu */
#menu ul {
    list-style: none;
    margin: 0;
    padding: 0;    
    display: none;
    position: absolute;
    top: 55px;
    left: 560px;
    z-index: 99999;    
    background-color: #114454;   
    background-image: linear-gradient(#444, #111);    
    -moz-border-radius: 5px;
    border-radius: 5px;
}

#menu ul li {
/*    float: none;
    margin: 0;
    padding: 0;
    display: block;  
    box-shadow: 0 1px 0 #111111, 
                0 2px 0 #777777;*/
				
				
margin: 0;
padding: 0;
display: block;
box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
left: 0px;
}

#menu ul li:last-child { 
    box-shadow: none;    
}

#menu ul a {    
    padding: 10px;
    height: auto;
    line-height: 1;
    display: block;
    white-space: nowrap;
    float: none;
    text-transform: none;
}

*html #menu ul a { /* IE6 */   
    height: 10px;
    width: 150px;
}

*:first-child+html #menu ul a { /* IE7 */    
    height: 10px;
    width: 150px;
}

#menu ul a:hover {
    background-color: #0186ba;
    background-image: linear-gradient(#04acec, #0186ba);
}

#menu ul li:first-child a {
    border-radius: 5px 5px 0 0;
}

#menu ul li:first-child a:after {
    content: '';
position: absolute;
left: 65px;
top: -100px;
width: 100px;
height: 100px;
border-left: 5px solid transparent;
border-right: 5px solid transparent;
border-bottom: 8px solid #444;
}

#menu ul li:first-child a:hover:after {
    border-bottom-color: #04acec; 
}

#menu ul li:last-child a {
    border-radius: 0 0 5px 5px;
}

/* Clear floated elements */
#menu:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}
#menu ul li:first-child a:after {
    content: '';
position: absolute;
left: 65px;
top: -100px;
width: 100px;
height: 100px;
border-left: 5px solid transparent;
border-right: 5px solid transparent;
border-bottom: 8px solid #444;
}

#menu ul li:first-child a:hover:after {
    border-bottom-color: #04acec; 
}

* html #menu             { zoom: 1; } /* IE6 */
*:first-child+html #menu { zoom: 1; } /* IE7 *//* CSS Document */


*{
	font-family: 'Roboto Condensed', sans-serif;
	margin:0;
	}
/*#encabezado{
	
	width:100%;
	height:80px;
	background-color:#CCC;
	}*/*/
h2{
	text-align:center;
	font-size:16px;
	font-weight:300;
	margin-right:5px;
	margin-top:50px;
	margin-left:10px;
	}
h1{
	font-size:80px;
	text-align:center;
	margin-top:40px;
	margin-bottom:20px;
	
	}
#titulo{
	/*<!--margin-left:40px;-->*/
	margin-top:5px;
	}
	
#our{
	margin-left:40px;
	margin-top:5px;
	font-size:20px;
	margin-left:30px;
	}
#top{
	margin-left:40px;
	margin-top:5px;
	font-size:23px;
	margin-left:30px;
	}



.clear{
	claer:both;
	
}

#banner{
	width:100%;
	height:530px;
	/*background-color:#FC3;*/
	margin-top:5px;
	background-image:url(img/uno.jpg);
	background-repeat:no-repeat;
	}
	
#boton{
	height: 40px;
	width: 250px;
	background-color:#165751;
	display: inline;
	float: left;
	margin: 490px 580px;
	text-align:center;
	color:#FFF;
	
}
#seccion{
	
	
height: 650px;
width: 1160px;
position: absolute;
margin-top: 208px;
display: inline;
margin-left: inherit;
left: 130px;
top: 310px;
overflow:scroll;
}
	
	.cuadro{
	height: 200px;
	width: 280px;
	background-color: #09F;
	/* margin: 10px; */
	display: inline;
	float: left;
	margin-top: 85px;
	/* margin-left: 5px; */
	/* margin-right: 5px; */
	text-align: center;
	/* left: 253px; */
	}
	.cuadro:frist-child{
		margin-top:-4px;
		}
	#footer{
	height: 80px;
width: 100%;
position: absolute;
background-color: #595d68;
margin-top: 660px;
display: inline;

right: 0px;
padding: 5px;
	}
.redes
{
	height: 50px;
	width: 50px;
	background-color: #547980;
	/*margin:10px;*/
	display:inline;
	float:right;
	margin-top:15px;
	left:100px;
	margin-right:10px;
	
	
	}


  </style>
		
        <div id="encabezado">
        
        
            
          <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li>
                <a href="#">Productos</a>
                <ul>
                   <li><a href="belleza.php">Belleza</a></li>
                    <li><a href="muebles.php">Muebles</a></li>
                    <li><a href="prod_bio.php">Prod. Biodegradables</a></li>
                    <li><a href="med_nat.php">Medicamentos naturales</a></li>
                </ul>
            </li>
         
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
          <div class="clear"></div><!--CIERRE CLEAR -->
        
        </div> <!--CIERRE ENCABEZADO -->
         
        <div id="banner">
<div id="boton"><h2 id="titulo">BELLEZA</h2></div>
        </div><!--CIERRE BANNER -->
        
        
        
<div id="seccion">
			<?php
            while($fila = mysql_fetch_array($belleza)){
				echo "<div class='cuadro'>". "<img src='img/belleza/".$fila[imagen]."'/>";
				 echo  $fila['tipo_de_producto']."<br>";
				echo $fila['nombre_de_producto']."<br>";
				echo $fila['precio'];
				echo "</div>";
			};
        ?>
        	<!--<div class="cuadro"><img src="img/rec_1.jpg"/></div>
            <div class="cuadro"><img src="img/rec_2.jpg"/></div>
            <div class="cuadro"><img src="img/rec_3.jpg"/></div>
            <div class="cuadro"><img src="img/rec_4.jpg"/></div>
            <div class="cuadro"><img src="img/rec_5.jpg"/></div>
            <div class="cuadro"><img src="img/rec_6.jpg"/></div>
            <div class="cuadro"><img src="img/rec_7.jpg"/></div>
            <div class="cuadro"><img src="img/rec_8.jpg"/></div>
            <div class="cuadro"><img src="img/rec_9.jpg"/></div>
            <div class="cuadro"><img src="img/rec_10.jpg"/></div>
            <div class="cuadro"><img src="img/rec_11.jpg"/></div>
            <div class="cuadro"><img src="img/rec_12.jpg"/></div>-->
        </div><!--CIERRE cierre sección	-->
        
        <?php
            while($fila = mysql_fetch_array($belleza)){
                echo "<p>".$fila['tipo_de_producto']."</p>";
				
			}
        ?>
           
           <div id="footer"><a href =""class="redes"><img src="img/fb.jpg"/></a><a href =""class="redes"><img src="img/tw.jpg"/></a>
               <a href =""class="redes"><img src="img/inst.jpg"/></a>
               <a href =""class="redes"><img src="img/pint.jpg"/></a>
           </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(function() {
      if ($.browser && $.browser.version.substr(0,1)<7)
      {
        $('li').has('ul').mouseover(function(){
            $(this).children('ul').show();
            }).mouseout(function(){
            $(this).children('ul').hide();
            })
      }
    });    
	
	
	
</script>    
</body>
</html>

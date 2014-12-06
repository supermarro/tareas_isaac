<!doctype html>
<html>
<head>
<?php include_once("variables.php"); 
$titulo_pagina = "Home";

?>
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
	color:#FFF;
	}
h1{
	font-size:80px;
	text-align:center;
	margin-top:40px;
	margin-bottom:20px;
	color:#414552;
	
	}
#titulo{
	margin-left:40px;
	margin-top:5px;
	color:#FFF;
	}
	
#our{
	margin-left:40px;
	margin-top:5px;
	font-size:20px;
	margin-left:30px;
	color:#FFF;
	}
#top{
	margin-left:40px;
	margin-top:5px;
	font-size:23px;
	margin-left:30px;
	color:#fff;
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
	background-size:cover;
	}
#uno {
	height: 81px;
	width: 100%;
	
	position: absolute;
	margin-top: 5px;
	display: inline;
	left: 1px;
	top: 618px;
}
#boton{
	height: 40px;
	width: 250px;
	background-color:#165751;
	display: inline;
	float: left;
	margin: 490px 580px;
	
}
#recomendados {
	
	height: 650px;
	width: 93%;
	/*background-color: #F93;*/
	position: absolute;
	margin-top: 90px;
	display: inline;
	margin-left: inherit;
	left: 130px;
	
}
.cuadro{
	height:200px;
	width:280px;
	background-color:#09F;
	/*margin:10px;*/
	display:inline;
	float:left;
	margin-top:10px;
	margin-left:5px;
	margin-right:5px;
	
}
#texto {
	height: 500px;
	width: 100%;
	background-color: #FFF;
	position: absolute;
	margin-top: 90px;
	display: inline;
	top: 1275px;
	left: 5px;
}
p{
	text-align:center;
	font-size:18px;
	color:#414552;
	display:inline;
	float:left;
	
	margin-left:40px;
	margin-right:40px;
	
	
}

#dos {
	height: 71px;
	width: 100%;
	
	position: absolute;
	margin-top: 10px;
	display: inline;
	bottom: -1210px;
	left: -4px;
}
#botondos{
	height: 40px;
	width: 250px;
	background-color: #165751;
	display: inline;
	float: left;
	margin: 19px 580px;
	
}
#prod{
	height: 250px;
	width: 90%;
	/*background-color:green;*/
	position: absolute;
	top: 1900px;
	display: inline;
	margin:0 auto;
	left: 200px;
	
	}

.iconos{
	height:150px;
	width:200px;
	background-color:#09F;
	/*margin:10px;*/
	display:inline;
	float:left;
	margin-top:40px;
	margin-left:20px;
	margin-right:20px;
	
	}
#tres {
	height: 81px;
	width: 100%;

	position: absolute;
	margin-top: 5px;
	display: inline;
	bottom: -1553px;
	left: -4px;
}
#botontres{
	height: 40px;
	width: 250px;
	background-color: #165751;
	display: inline;
	float: left;
	margin: 19px 580px;
	
}

#footer{
	height: 80px;
	width: 100%;
	position: absolute;
	background-color:#595d68;
	top: 2300px;
	display: inline;
	bottom: -100px;
	right: 0px;
	padding:5px;
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
        <div class="clear"></div><!--CIERRE CLEAR -->
        <div id="banner">
        <div id="boton"><h2 id="titulo">RECOMENDADOS</h2>
        </div><!--CIERRE BOTON -->
        

        </div><!--CIERRE Banner -->
        <div class="clear"></div><!--CIERRE CLEAR -->
         <div id="recomendados">
        	<div class="cuadro"><img src="img/rec_1.jpg"/></div>
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
            <div class="cuadro"><img src="img/rec_12.jpg"/></div>
        </div><!--CIERRE RECOMENDADOS	-->
        <div class="clear"></div><!--CIERRE CLEAR -->
            <div id="texto">
              <h1>¿QUIENES SOMOS?</h1>
               <p align="justify"><br>Somos una empresa mexicana especializada en la distribución, comercialización y exportación de productos orgánicos, naturales y biodegradables.
Un grupo de jóvenes comprometidos con nuestro planeta, país y sociedad.
Una empresa que apoya a los campesinos mexicanos para mejorar su calidad de vida.
Mexicanos que trabajamos por el desarrollo de la agricultura orgánica nacional.</br>
					
                <br> Nuestra Misión:Brindar a nuestros clientes y socios nacionales e internacionales asesoría y servicio de comercialización de calidad que permita un sano y fuerte crecimiento en el mercado, comercializando productos ecológicos que apoyen a la conservación y mejora del ser humano y del planeta.</br>   

				<br>Distribuimos y comercializamos productos orgánicos, naturales y biodegradables a nivel nacional (Mayoreo y menudeo)
Atendemos a tiendas, cafeterías, hoteles, restaurantes, tiendas especializadas gourmet y orgánicas, tiendas departamentales, gimnasios, spas, centros de nutrición entre otros
Exportamos productos orgánicos, naturales y biodegradables a diferentes países del mundo (Comercio Internacional)
Contamos con venta directa en nuestras oficinas siempre a precios de mayoreo para cualquier cliente.</br>
               </p>
              </div><!--CIERRE texto	-->
              <div class="clear"></div><!--CIERRE CLEAR -->
              <div id="dos">
        	<div id="botondos"><h2 id="our">NUESTROS PRODUCTOS</h2>
            </div><!--CIERRE botondos -->
        </div><!--CIERRE dos -->
        <div class="clear"></div><!--CIERRE CLEAR -->
        <div id="prod">
        	<a href="belleza.php"class="iconos"><img src="img/bell_icon.jpg"/> </a> 
            <a href="muebles.php"class="iconos"><img src="img/mueb_icon.jpg"/> </a> 
            <a href="prod_bio.php"class="iconos"><img src="img/rop_icon.jpg"/> </a> 
            <a href="med_nat.php"class="iconos"><img src="img/med_icon.jpg"/> </a> 
           
        </div>
        <div class="clear"></div><!--CIERRE CLEAR -->
        <div id="tres">
        	<a href="" id="botontres"><h2 id="top"> REGRESO AL MENU</h2>
            </a><!--CIERRE boton3 -->
            </div>
            <div class="clear"></div><!--CIERRE CLEAR -->
           <div id="footer">
           		<a href =""class="redes"><img src="img/fb.jpg"/></a>
               <a href =""class="redes"><img src="img/tw.jpg"/></a>
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

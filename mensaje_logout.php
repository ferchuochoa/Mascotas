<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Logout</title>
<meta http-equiv="Content-Type" content="text/html;/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />


</head>
<body>

<div id="wrap">

<?php 
	require_once("encabezado.php");
?>

<div id="top"> </div>
<div id="contentt">

<?php 
	require_once("categorias.php");
?>


<div class="middle">

<?php
	 echo "<h2>Sesión finalizada</h2>";
	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La sesión se ha cerrado exitosamente.</br></div>";
 	 echo "</br>&#160;</br>";
	 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/vuelve_pronto.jpg' border='0'/></div>";
?>




</div><!--Cierra middle-->

<div style="clear: both;"> </div>

</div><!--Cierra contentt-->

<div id="bottom"> </div>

<div id="footer">
Desarrollado por <a href="#">aloha!&#160;|&#160;</a>Acerca de <a href="#">Buscador de Mascotas</a>&#160;|&#160;<a href="contacto.php">Contacto</a>&#160;|&#160;<a href="#top">Ir arriba</a>
</div>


</div><!--Cierra wrap-->





</body>
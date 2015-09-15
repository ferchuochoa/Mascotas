<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BUSCADOR DE MASCOTAS ZONAL</title>
<meta http-equiv="Content-Type" content="text/html;"/>
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
if (!isset($_SESSION)) 
	{
	 session_start();
	}

if(isset($_SESSION["usu_logeado"]))
	$usuario = ($_SESSION["usu_logeado"]);
else
	{$usuario = ""; }


if ($usuario =="")
	{
	 echo "<h2>Oops!</h2>";

	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Lo sentimos, pero debes acceder a tu cuenta de usuario registrado para utilizar este servicio.</br></div>";
	 echo "<div class = 'texto_centrado' align = 'center'></br><img src= 'images/error.png' border='0'/></br></div>";
	 echo "<div class = 'texto_centrado' align = 'center'><a href='login.php'>Acceder</a>|<a href='formulario.php'>¿Aún no tienes una cuenta?</a></div>";

	}
else 
	{echo "<h2>¿Qué quieres hacer?</h2>";
	 echo "<div class='texto_medio'> 
	 <ul>
	 <li class='first'><a href='actualizar_datos.php'>Actualizar mis datos</a></li> 
	 <li><a href='listado_mascotas.php'>Consultar mis mascotas</a></li> 
	 <li><a href='#'>Eliminar mi cuenta</a></li> 
	 </ul>
	 </div>";
	 

	}


?>





</div><!--Cierra middle-->

<div style="clear: both;"> </div>

</div><!--Cierra contentt-->
<div id="bottom"> </div>

</div>
</body>
</html>
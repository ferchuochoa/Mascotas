<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Tu cuenta</title>
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

/*session_start();unset para logout*/

#ASIGNACIÓN DE VARIABLES.
$usuario =  $_POST["usuario"];
$contrasenia =  $_POST["contrasenia"];

$error = "";
$no_permitido = 0;

/*validación usuario*/
if ($usuario == "") 
	{echo "<h2>Error</h2>";
	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;El nombre de usuario es un campo obligatorio.</div>";
	 $error = "1";		
	}
else
	{

  	 if (!preg_match("/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789])*$/",$usuario))
		{
		 $no_permitido = 1;
		}

	 if ($no_permitido == 1) 
  		{
		 echo "<h2>Error</h2>";
		 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Usuario inválido.</div>";
		 $error = "1";			 	
		}
	 $no_permitido = 0;/*reseteo el valor a cero*/
	}
/*FIN validación usuario*/


/*--------------------------------------------------------------------*/

/*Validación contraseña*/
if ($contrasenia == "" || strlen($contrasenia) < 8 || strlen($contrasenia) > 16) 
	{if ($error == "")
		{echo "<h2>Error</h2>";
		 $error = "1";
		}
	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Longitud de contraseña inválida.</div>"; 
 
	}

if (!preg_match("/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789])*$/",$contrasenia))
		{
		 $no_permitido = 1;
		}

if ($no_permitido == 1) 
  		{if ($error == "")
			{echo "<h2>Error</h2>";
		 	 $error = "1";
			}
		 echo "<p><div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Caracteres no permitidos en la contraseña.</div></p>"; 
		}
/*FIN validación contraseña*/


/*--------------------------------------------------------------------*/

if ($error != "") 
	{echo "</br>&#160;</br>";
	 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/oops.jpg' border='0'/></div>";	
	}

if ($error == "")
{

	$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");


	$sentencia="SELECT * FROM usuario WHERE (usuario = '$usuario')";


	$resultado=$conexion->query($sentencia);

	
	$registro = mysqli_fetch_array($resultado);
	
	if(!$registro) 
		{echo "<h2>Error</h2>";
	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La información de nombre de usuario o contraseña introducida no es correcta.</br></div>";
		 echo "<div align='center'><a href='#'></br>¿Olvidaste tu contraseña?</br></a></div></br>";
		}
	else {

		$sentencia="SELECT * FROM usuario WHERE (usuario = '$usuario' AND contrasenia = '$contrasenia')";


		$resultado_c=$conexion->query($sentencia);

	
		$registro_c = mysqli_fetch_array($resultado_c);
	
		if(!$registro_c) 
			{echo "<h2>Error</h2>";
	 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La información de nombre de usuario o contraseña introducida no es correcta.</br></div>";
		 	 echo "<div align='center'><a href='#'></br>¿Olvidaste tu contraseña?</br></a></div></br>";
			}
		else
			{
			if (!isset($_SESSION)) 
				{
				 session_start();
				}
			
			$_SESSION["usu_logeado"]=$_POST["usuario"];
			$usu = $_POST["usuario"];
			echo "<h2>Hola $usu !</h2>";
			echo "<div class='texto_medio'></br>Gracias por visitarnos nuevamente.</br></div>";					
			echo "<div align = 'center'></br><img src= 'images/elperro.gif' border='0'/></div>";
			echo "<div align='center'><a href='#'></br>¿Qué puedo hacer como usuario registrado?</br></a></div></br>";
			}	
	     } 

	#CERRAR CONEXIÓN
	mysqli_close($conexion);
}
	
?>

</div><!--Cierra middle-->

<div style="clear: both;"> </div>

</div><!--Cierra contentt-->
<div id="bottom"> </div>

</div>
</body>
</html>
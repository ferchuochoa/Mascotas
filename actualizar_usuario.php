<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualizaci�n datos</title>
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
#ASIGNACI�N DE VARIABLES.
$contrasenia =  $_POST["contrasenia"];
$contrasenia2 =  $_POST["contrasenia2"];
$apellido =  $_POST["apellido"];
$nombre =  $_POST["nombre"];
$tipo_dni =  $_POST["doc"];
$nro_dni =  $_POST["nrodoc"];
$localidad =  $_POST["localidad"];
#Datos domicilio
$calle =  $_POST["calle"];
$numero =  $_POST["nro"];
$piso =  $_POST["piso"];
$departamento =  $_POST["dpto"];
$telefono =  $_POST["tel"];
$celular =  $_POST["cel"];
$mail =  $_POST["email"];
$dominiomail =  $_POST["dominiomail"];

$error = "";
$no_permitido = 0;


/*-----------------------------------------------------*/
/*Validaci�n contrase�a*/
/*-----------------------------------------------------*/
if ($contrasenia != $contrasenia2)
	{echo "<h2>Oops!</h2>";
	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Las contrase�as no coinciden.</div>";	
   	 $error = "1";
	}


if ($contrasenia == "" || strlen($contrasenia) < 8 || strlen($contrasenia) > 16) 
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
	 	 $error = "1";
		}
	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La contrase�a debe tener entre 8 y 16 caracteres.</div>";	
	}
else
	{
	 if
(!preg_match("/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ-_!�0123456789])*$/",$contrasenia))
		{
	 	 $no_permitido = 1;
		}

 	 if ($no_permitido == 1) 
  		{
	  	 if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
		 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Caracteres inv�lidos en el campo 'Contrase�a:'.</div>";
		}
	}

/*-----------------------------------------------------*/
/*validaci�n apellido*/
/*-----------------------------------------------------*/
if
(!preg_match("/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ����������'\s])*$/",$apellido))
	{
	 $no_permitido = 1;
	}

if ($apellido == "" || $no_permitido == 1) 
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
		 $error = "1";
		}
	 $no_permitido = 0;
 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Apellido:'.</div>";
	}


/*-----------------------------------------------------*/
/*validaci�n nombre*/
/*-----------------------------------------------------*/
if
(!preg_match("/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ����������\s])*$/",$nombre))
	{
	 $no_permitido = 1;
	}

if ($nombre == "" || $no_permitido == 1) 
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
		 $error = "1";
		}
	 $no_permitido = 0;
 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Nombre:'.</div>";
	}


/*-----------------------------------------------------*/
/*validaci�n dni*/
/*-----------------------------------------------------*/
if
(!preg_match("/^([0123456789])*$/",$nro_dni))
	{
	 $no_permitido = 1;
	}

if ($nro_dni == "" || strlen($nro_dni) < 7 || strlen($nro_dni) > 8)
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
		 $error = "1";
		}
	 $no_permitido = 0;
 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;El n�mero de documento es un campo obligatorio. No utilice puntos (.).</div>";
	}


/*-----------------------------------------------------*/
/*validaci�n calle*/
/*-----------------------------------------------------*/

if ($calle!="" ) 
	{if
(!preg_match("/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ����������\s])*$/",$calle))
		{
	 	 $no_permitido = 1;
		}

	 if ($calle == "" || $no_permitido == 1) 
		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Calle:'.</div>";
		}
	}

/*-----------------------------------------------------*/
/*validaci�n n�mero de casa*/
/*-----------------------------------------------------*/
if ($numero!="" )
	{
	 if(!preg_match("/^([0123456789])*$/",$numero))
		{
	 	 $no_permitido = 1;
		}

	 if ($no_permitido == 1 || strlen($numero) > 4) 
  		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Nro:'.</div>";
		}
    
	}

/*-----------------------------------------------------*/
/*validaci�n n�mero de piso*/
/*-----------------------------------------------------*/
if ($piso!="" )
	{
	 if(!preg_match("/^([0123456789])*$/",$piso))
		{
	 	 $no_permitido = 1;
		}

	 if ($no_permitido == 1 || strlen($piso) > 2) 
  		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Piso:'.</div>";
		}
	}


/*-----------------------------------------------------*/
/*validaci�n departamento*/
/*-----------------------------------------------------*/
if ($departamento!="" )
	{if
(!preg_match("/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ0123456789])*$/",$departamento))
		{
	 	 $no_permitido = 1;
		}
	 if ($no_permitido == 1 || strlen($piso) > 3) 
  		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Departamento:'.</div>";
		}

	}

/*-----------------------------------------------------*/
/*validaci�n n�mero de TELEFONO*/
/*-----------------------------------------------------*/

if ($telefono == "" )
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
		 $error = "1";
		}
 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;El n�mero de tel�fono es un campo obligatorio.</div>";
	}
else
	{
	 if(!preg_match("/^([0123456789])*$/",$telefono))
		{
	 	 $no_permitido = 1;
		}
	 
	 if ($no_permitido == 1 || strlen($telefono) > 10) 
  		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Error en el campo Tel�fono. No utilice guiones. Incluya el c�digo de �rea sin cero. Ej: 2262424444, donde 2262 es el c�digo de �rea de Necochea.</div>";
		}

	 else
		{$codigo = substr($telefono,0,4);

		if (($localidad == "Cl�raz" || $localidad == "Defferrari" || $localidad == "Juan N. Fern�ndez" || $localidad == "La Negra" || $localidad == "Nicanor Olivera" || $localidad == "Ram�n Santamarina") && ($codigo != "2264"))
			{$no_permitido = 1;$error = "1";}

		if (($localidad == "Energ�a" || $localidad == "San Cayetano") && ($codigo != "2983"))
			{$no_permitido = 1;$error = "1";}


		if (($localidad == "Lober�a" || $localidad == "San Manuel" || $localidad == "Tamanguey�") && ($codigo != "2261"))
			{$no_permitido = 1;$error = "1";}

		if (($localidad == "Necochea" || $localidad == "Pieres" || $localidad == "Quequ�n") && ($codigo != "2262"))
			{$no_permitido = 1;$error = "1";}

		if ($no_permitido == 1 || strlen($telefono) > 10) 
  			{if ($error != 1) 
				{echo "<h2>Oops!</h2>";
		 		 $error = "1";
				}
	 		 $no_permitido = 0;
 	 		 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Error en el campo Tel�fono.C�digo de �rea inv�lido</div>";
			}
		}	
	}


/*-----------------------------------------------------*/
/*validaci�n n�mero de CELULAR*/
/*-----------------------------------------------------*/
if ($celular != "")
	{if(!preg_match("/^([0123456789])*$/",$celular))
		{
 	  	 $no_permitido = 1;
		}
	 
	if ($no_permitido == 1 || strlen($celular) > 12) 
		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
	 	 	$error = "1";
			}
 	 	$no_permitido = 0;
 	 	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Error en el campo Tel�fono. No utilice guiones. Incluya el c�digo de �rea sin cero. Ej: 226215424444, donde 2262 es el c�digo de �rea de Necochea.</div>";
		}
	}


/*-----------------------------------------------------*/
/*validaci�n EMAIL*/
/*-----------------------------------------------------*/
if ($mail == "" )
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
		 $error = "1";
		}
 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La direcci�n de email es un campo obligatorio.</div>";
	}
else
	{

	 $chars_permitidos = "abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ0123456789-_."; 
	 for ($i=0; $i<strlen($mail); $i++)
	 {
      	 	if (strpos($chars_permitidos, substr($mail,$i,1))=== false)
	 		{$no_permitido = 1;
	  		}	
      	 }


/*.....................................................*/
	 /*if(!preg_match("/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ0123456789_.])*$/",$mail))
		{
	 	 $no_permitido = 1;
		} LA FUNCION PREG_MATCH NO ACEPTA EL GUI�N DEL MEDIO
	*/
/*.....................................................*/

	 
	 if ($no_permitido == 1) 
  		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Error en el campo 'e-mail:'.</div>";
		}
	}


/*-----------------------------------------------------*/
/*validaci�n DOMINIOMAIL*/
/*-----------------------------------------------------*/
if ($dominiomail == "") 
	{if ($error != 1) 
		{echo "<h2>Oops!</h2>";
		 $error = "1";
		}
 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Verificar direcci�n de e-mail.</div>";
	}
else
	{
	 if(!preg_match("/^([abcdefghijklmn�opqrstuvwxyz.])*$/",$dominiomail))
		{
	 	 $no_permitido = 1;
		}
	 
	 if ($no_permitido == 1) 
  		{if ($error != 1) 
			{echo "<h2>Oops!</h2>";
		 	 $error = "1";
			}
	 	 $no_permitido = 0;
 	 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'e-mail:'.</div>";
		}
	}

/*-----------------------------------------------------*/
/*FIN VALIDACIONES*/
/*-----------------------------------------------------*/

if ($error != "") 
	{
	echo "<div class = 'texto_centrado' align = 'center'><a href='actualizar_datos.php'></br><h1>Atr�s</h1></a></div>";
	}


if ($error == "")
{
	if (!isset($_SESSION)) 
	{
	 session_start();
	}

	if(isset($_SESSION["usu_logeado"]))
		$usuario = ($_SESSION["usu_logeado"]);
	else
		{$usuario = ""; }

	$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");
	
	$sentencia = "UPDATE usuario SET contrasenia='$contrasenia',nombre='$nombre',apellido='$apellido',tipo_dni='$tipo_dni',nro_dni=$nro_dni,localidad='$localidad',calle='$calle',numero='$numero',piso='$piso',dpto='$departamento',telefono=$telefono,celular='$celular',mail_cuenta='$mail',mail_dominio='$dominiomail' WHERE (usuario = '$usuario')";

	$resultado=$conexion->query($sentencia);
	
	if(!$resultado)
		{echo "<h2>Ha ocurrido el siguiente error</h2>";
  	 	 echo "<div>$conexion->error</div>";
		}
	else
		{echo "<h2>Resultado:</h2>";
		 echo "<div class='texto_medio'>La actualizaci�n de tus datos se ha realizado con �xito!&#160;<img src='images/huella.gif' alt='huella icono' border='0'/></div>";
	 	 echo "<div class = 'texto_centrado' align = 'center'><a href='cuenta_usuario.php'></br><h1>Volver al men�</h1></a></div>";
		}
	
	#CERRAR CONEXI�N
	mysqli_close($conexion);	
}
	
?>
</div><!--Cierra middle-->

<div style="clear: both;"> </div>

</div><!--Cierra contentt-->

<div id="bottom"> </div>

<div id="footer">
Desarrollado por <a href="#">aloha!&#160;|&#160;</a>Acerca de <a href="#">Buscador de Mascotas</a>&#160;|&#160;<a href="contacto.php">Contacto</a>&#160;|&#160;<a href="#top">Ir arriba</a>
</div>

</div><!--Cierra wrap-->
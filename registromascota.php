<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Alta mascota</title>
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

	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Lo sentimos, pero debes acceder a tu cuenta de usuario registrado para utilizar este servicio.</div>";
	echo "<div class = 'texto_centrado' align = 'center'><a href='login.php'></br><h1>Acceder</h1></a></div></br>";
	echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/error.png' border='0'/></br></div>";
	echo "<div class = 'texto_centrado' align = 'center'><a href='formulario.php'></br><h1>¿Aún no tienes una cuenta?</h1></br></a></div></br>";
	}
else
	{

	#ASIGNACIÓN DE VARIABLES.
	$nombre =  $_POST["nombre"];
	$estado =  $_POST["estado"];
	$tipo =  $_POST["tipomascota"];
	$raza =  $_POST["razas"];
	$otra =  $_POST["otra_raza"];
	$sexo =  $_POST["sexo"];
	$edad =  $_POST["edad"];
	$tamanio =  $_POST["tamanio"];
	$color =  $_POST["color"];
	$castrado =  $_POST["castrado"];
	$localidad =  $_POST["localidad"];
	$datos =  $_POST["comentario"];
	$fecha_actual = date('d/m/Y');
	
	$error = "";
	$chars_permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú";
	$no_permitido = 0;


	if ($nombre=="" ) 
		{$nombre="Sin especificar";
		}
	else
	{
	   	 for ($j=0; $j<strlen($nombre); $j++)
		 {
      	 		if (strpos($chars_permitidos, substr($nombre,$j,1)) === false)
	  			{$no_permitido = 1;
				}
	 	 } 
	 
	 	if ($no_permitido == 1) 
  			{echo "<h2>Error</h2>";
		 	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Nombre:'.</div>";	
   		 	 $error = "1";
			}
    
	}



	if ($raza=="" ) 
		{$raza = "Sin especificar";
		} 

	if ($otra !="" && $raza != "Sin especificar") 
		{ if ($error != 1) 
			{echo "<h2>Error</h2>";
			 $error = "1";
			}
 		  echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Raza:'.</div>";
		}

	if ($otra !="" && $raza == "Sin especificar")
		{$raza = $otra;
		 $no_permitido = 0;
   		 for ($j=0; $j<strlen($raza); $j++)
		 {
      	 		if (strpos($chars_permitidos, substr($raza,$j,1)) === false)
	  			{$no_permitido = 1;}
	   	 } 
	 
		 if ($no_permitido == 1) 
  			{if ($error != 1) 
				{echo "<h2>Error</h2>";
			 	$error = "1";
				}
 		 	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Problemas en el campo 'Raza:'.</div>";
   			}
		}


	if ($edad=="" ) 
		{$edad="Sin especificar";}
	if ($tamanio=="" ) 
		{$tamanio="Sin especificar";}
	if ($color=="" ) 
		{$color="Sin especificar";}

/*validación comentario ------------------------------------------- */
	if ($datos=="" ) 
		{$datos="No hay información adicional disponible.";
		}
	else
		{
		 if
(!preg_match("/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú.,;:¿?!¡0123456789\s])*$/",$datos))
			{
		 	 $no_permitido = 1;
			}

		if ($no_permitido == 1) 
  			{
		 	 if ($error != 1) 
				{echo "<h2>Error</h2>";
			 	 $error = "1";
				}
 		 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Ha utilizado caracteres inválidos en su comentario.</div>";
			}

		if (strlen($datos)>500)
  			{
		 	 if ($error != 1) 
				{echo "<h2>Error</h2>";
			 	 $error = "1";
				}
 		 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La longitud del comentario excede el valor preestablecido.</div>";
			}
		
		}
/*FIN validación comentario ------------------------------------------- */




	if ($localidad == "") 
		{if ($error != 1) 
			{echo "<h2>Error</h2>";
		 	 $error = "1";
			}
 		 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Por favor, especifíca tu localidad.</div>";
		}


	$foto = 'imagenes/'.$_FILES['archivo']['name'];
	if ($foto == "imagenes/")
		$foto="imagenes/imagen_no_disponible_724.jpg";
	else
		{ $arch = $_FILES['archivo']['type'];
		  $barra = "/";
		  $long = strlen($arch)-6;
		 
		  $type = substr($_FILES['archivo']['type'],6,$long);
	 	  if ($type != "jpg" && $type != "jpeg" && $type != "png" && $type != "pjpeg") 
			{if ($error != 1) 
				{echo "<h2>Error</h2>";
		 	 	 $error = "1";
				}
 		 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Formato de archivo inválido.</div>";
			}
		}

	if ($error != "") {
		echo "<div class = 'texto_centrado' align = 'center'><a href='formulariomascota.php'></br><h1>Volver al formulario</h1></br></a></div></br>";
		echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/oops.jpg' border='0'/></div>";		
		}

	else /*TODO OK*/
	{

		move_uploaded_file($_FILES['archivo']['tmp_name'],'imagenes/'.$_FILES['archivo']['name']);
		$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");
		$sentencia="SELECT * FROM usuario WHERE (usuario = '$usuario')";
		$resultado_c=$conexion->query($sentencia);	
		$registro_c = mysqli_fetch_array($resultado_c);
		if(!$registro_c) 
		{	
			echo "<h2>Oops!</h2>";
			echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Ha ocurrido un problema.</div>";
			echo "<div class = 'texto_centrado' align = 'center'><a href='formulario.php'></br><h1>Atrás</h1></a></div></br>";

		}
		else{
			$id = $registro_c['id_usuario'];
		}

		$sentencia = "INSERT INTO mascota (id_user,nombre,tipo,estado,raza,sexo,edad,tamanio,color,castrado,localidad,f_ingreso,foto,mensaje)VALUES('$id','$nombre','$tipo','$estado','$raza','$sexo','$edad','$tamanio','$color','$castrado','$localidad','$fecha_actual','$foto','$datos')";
		$resultado=$conexion->query($sentencia);
		if(!$resultado)
			echo $conexion->error;
		else{
			echo "<h2></h2>";
			echo "<div class='texto_medio'>El registro se ha realizado con éxito!&#160;&#160;<img src='images/huella2.gif' alt='huella icono' border='0'/></div>";
			
	  	   }
	
		#CERRAR CONEXIÓN
		mysqli_close($conexion);
	
	}
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





</body>

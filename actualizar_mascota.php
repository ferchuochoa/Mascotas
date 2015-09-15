<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualización datos</title>
<meta http-equiv="Content-Type" content="text/html;/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<script type="text/javascript" src="textarea.js"> </script>


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


	$id_mascota =  $_GET["id_pet"];
	$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");
	$sentencia="SELECT * FROM mascota WHERE (id_mascota = '$id_mascota')";
	$resultado_c=$conexion->query($sentencia);
	if(!$resultado_c)
		{echo "<h2>Se ha producido el siguiente error:</h2>";
		 echo $conexion->error;
		}
	
	$registro_c = mysqli_fetch_array($resultado_c);
	if(!$registro_c) 
		{	
		 echo "<h2>Oops!</h2>";

		 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Ha ocurrido un error.</div>";
		
		 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/error.png' border='0'/></br></div>";
		}
	else
		{
		 $tipo = $registro_c['tipo'];
		
		 $nombre = $registro_c['nombre'];
		 
		 $estado = $registro_c['estado'];

		 if ($estado == 'En adopción')
			{$estado2 = 'Encontrado';
			 $estado3 = 'Perdido';
			}
		 else
			{if ($estado == 'Encontrado')
				{$estado2 = 'En adopción';
			 	 $estado3 = 'Perdido';
				}
			 else
				{$estado2 = 'En adopción';
			 	 $estado3 = 'Encontrado';
				}
			}

		 $raza = $registro_c['raza'];

		 $sexo = $registro_c['sexo'];

		 if ($sexo == 'Macho')
			$sexo2 = 'Hembra';
		 else
			$sexo2 = 'Macho';

		 $edad = $registro_c['edad'];

		 $tamanio = $registro_c['tamanio'];

		 $color = $registro_c['color'];

		 $castrado = $registro_c['castrado'];

		 if ($castrado == 'Desconocido')
			{$castrado2 = 'Si';
			 $castrado3 = 'No';
			}
		 else
			{if ($castrado == 'Si')
				{$castrado2 = 'Desconocido';
			 	 $castrado3 = 'No';
				}
			 else
				{$castrado2 = 'Desconocido';
			 	 $castrado3 = 'Si';
				}
			}

		 $foto = $registro_c['foto'];

		 $comentario = $registro_c['mensaje'];

		}
	
	echo "<h2><a href='#'>Actualiza los Datos de tu $tipo</a></h2>

	<form name='formulario' ENCTYPE='multipart/form-data'  method='post' action='actualizar_datos_mascota.php' >

	<fieldset>
	<legend><b>Datos mascota</b></legend>

	<div align = 'right'><img src='images/cancelar.png'/>&#160;&#160;<a href='listado_mascotas.php'>Atrás</a>&#160;&#160;</div>

	<div align = 'center'><img src='".$foto."' width = '150'/></div>

	<div class='espacio'>
	<div class='flabeldcha' align='right'>Nombre:</div><div><input name='nombre' type='text' maxlength='15' size='15' value = '$nombre'/>
   	</div>
 	</div>


	<div class='espacio'>
   	<div class='flabeldcha'>Raza:</div><div><input name='razas' type='text' value = '$raza'/></div>
 	</div>


	<div class='espacio'>
   	<div class='flabeldcha'>Edad:
   	</div>
   	<div>
      	<select name='edad'>
      	<option value=$edad>$edad
      	<option value='Cachorro'>Cachorro
      	<option value='Joven'>Joven
      	<option value='Adulto'>Adulto
      	<option value='Abuelo'>Abuelo
      	</select>
    	</div>
 	</div> 


	<div class='espacio'>
   	<div class='flabeldcha'>Sexo:</div><div><h5><input name='sexo' type=radio value=$sexo2>$sexo2
      	<input name='sexo' type=radio value=$sexo checked>$sexo</h5></div>
 	</div>
	

 	<div class='espacio'>
   	<div class='flabeldcha'>Tamaño:
   	</div>
      	<div>
      	<select name='tamanio'>
      	<option value=$tamanio>$tamanio
      	<option value='Pequeño'>Pequeño
      	<option value='Mediano'>Mediano
      	<option value='Grande'>Grande
      	<option value='Gigante'>Gigante
      	</select>
      	</div>
 	</div>
 

	<div class='espacio'>
   	<div class='flabeldcha'>Color:</div>
   	<div>
      	<select name='color'>
      	<option value=$color>$color
      	<option value='Blanco'>Blanco
      	<option value='Negro'>Negro
      	<option value='Gris'>Gris
      	<option value='Marrón'>Marrón
      	<option value='Bicolor'>Bicolor
      	<option value='Tricolor'>Tricolor
      	</select>
   	</div>
	</div>


 	<div class='espacio'>
  	<div class='flabeldcha'>Castrad@:</div>
	<div><h5><input name='castrado' type=radio value=$castrado2>$castrado2
     	<input name='castrado' type=radio value=$castrado3>$castrado3
	<input name='castrado' type=radio value=$castrado checked>$castrado</h5></div>
 	</div>

	<div class='espacio'>
    	<div class='flabeldcha'>Cambiar imagen:</div><div><input name='archivo' type='file'/></div>     
 	</div>


	<div class='espacio_doble'>
 	<div class='flabeldcha'>Estado:</div><div ><h5><input name='estado' type=radio value=$estado checked>$estado
      	<input name='estado' type=radio value=$estado2>$estado2
	<input name='estado' type=radio value=$estado3>$estado3</h5></div>
	</div>


</fieldset><!--Fin datos mascotas-->


<fieldset>
<legend><b>Otros datos que pueden ayudar</b></legend>

 	<!--<div class='espacio'><div align='center'>
    	<textarea  name='texto' rows='8' cols='50' onKeyDown='cuenta()' onKeyUp='cuenta()'>$comentario</textarea>
 	</div></div>-->

<!--<span id='contador'></span> 
<textarea  
    id='texto'  
    name='texto'  
    onkeypress='return limita(this,event,100)'  
    onkeyup='cuenta(this,event,100,contador)' >  
</textarea>-->  


<textarea onkeyup='contar(this)' cols='50' rows='10' name='texto' id='texto'></textarea>
<input type='text' name='palabras' id='palabras' size='3' maxlength='3' readonly>


	<!--<div class='espacio_doble' style = 'margin-left:40px;'>
	<input name='caracteres' size='3' value = '500'>&#160;caracteres.
	</div>-->


</fieldset>

 <div class='espacio_doble' align='center'>
    <input type = 'submit' value='&#160;Guardar cambios&#160;'/>   
 </div>


</form>";





#CERRAR CONEXIÓN
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
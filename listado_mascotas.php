<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Resultados de búsqueda</title>
<meta http-equiv="Content-Type" content="text/html;/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />


</head>
<body>

<!--BOTÓM TOP
<a href='#' title='Ir arriba'><img alt='Subir a Inicio' border='0' src='http://holamundo21.hostzi.com/Archivos/up.png' style='position:fixed; bottom:0; right:0;'/></a><br /> -->


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

/*----------------------------------------------------------*/
/*VERIFICO SI EL USUARIO ESTA REGISTRADO*/
/*LOS DATOS QUE PUEDA VER DEPENDERÁ DE SI ESTA LOGEADO O NO*/
/*----------------------------------------------------------*/


if (!isset($_SESSION)) 
	{
	 session_start();
	}

if(isset($_SESSION["usu_logeado"]))
	$usuario_conectado = ($_SESSION["usu_logeado"]);
else
	{echo "<h2>Error</h2>";
	 echo "<div class='texto_medio'>Ha ocurrido un problema.&#160;&#160;<img src='images/huella2.gif' alt='huella icono' border='0'/></div>";	
	 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/oops.jpg' border='0'/></div>";
	}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


	$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");

	$sentencia_user="SELECT * FROM usuario WHERE (usuario = '$usuario_conectado')";

	$resultado_user=$conexion->query($sentencia_user);

	$registro_user = mysqli_fetch_array($resultado_user);

	if(!$registro_user) 
		{echo "<h2>Error</h2>";
	 	 echo "<div class='texto_medio'>Ha ocurrido un problema.&#160;&#160;<img src='images/huella2.gif' alt='huella icono' border='0'/></div>";	
	 	 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/oops.jpg' border='0'/></div>";
		}
	else
		{$id_user=$registro_user['id_usuario'];

		 $sentencia_pet="SELECT * FROM mascota WHERE (id_user = '$id_user')";

	 	 $resultado_pet=$conexion->query($sentencia_pet);

		 $registro_pet = mysqli_fetch_array($resultado_pet);

		 echo "<h2>Tus mascotas</h2>";
	
		 if(!$registro_pet) 
			{
			 echo "<div class='texto_medio'>Lo sentimos, la búsqueda no produjo ningún resultado.&#160;&#160;<img src='images/huella2.gif' alt='huella icono' border='0'/></div>";
			 echo "<div class = 'texto_centrado' align = 'center'><a href='cuenta_usuario.php'> </br><h1>Volver al menú</h1></br></a></div></br>";
			 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/error.png' border='0'/></div>";
			}
		 else 
			{
			 $var_color = 1; /*1: amarillo; 0: gris*/
			
			 echo "<div align='center'>";	
			
			 echo "<table border='0' width='95%' >";	

			 echo "<tr  align ='center'>";

			 echo "<td>"."<b>ID</b>"."</td>";
	
			 echo "<td>"."<b>NOMBRE</b>"."</td>";

			 echo "<td>"."<b>TIPO"."</b></td>";

		 	 echo "<td>"."<b>ESTADO"."</b></td>";

			 echo "<td>"."<b>RAZA"."</b></td>";

			 echo "<td>"."<b>VER MÁS"."</b></td>";
	
			 echo "</tr>";

			 echo "<tr><td colspan='6'><img src='images/linea_solida.JPG' border='0' />"."</td></tr>";


			 do { 
				 echo "<tr align = 'center'>";
				/*if ($var_color == 0)
					{
					 echo "<tr align = 'center' style = 'background-color : rgb(242, 242, 242);'>";
					 
					 $var_color = 1;
					}
				else
					{
					 echo "<tr align = 'center' style = 'background-color : rgb(219, 244, 140);'>";
					 
					 $var_color = 0;
					}*/

				echo "<td>"."".$registro_pet['id_mascota'].""."</td>";	
	
				echo "<td>"."".$registro_pet['nombre'].""."</td>";

				echo "<td>"."".$registro_pet['tipo'].""."</td>";

				echo "<td>"."".$registro_pet['estado'].""."</td>";

				echo "<td>"."".$registro_pet['raza'].""."</td>";

				$id_mascota = $registro_pet['id_mascota'];

				echo "<td>"."<a href='actualizar_mascota.php?id_pet=$id_mascota'>"."Más..."."</a>"."</td>";
	
				echo "</tr>";
				
			 	echo "<tr><td colspan='6'><img src='images/linea_punteada.JPG' border='0' />"."</td></tr>";

			 } while ($registro_pet = mysqli_fetch_array($resultado_pet));

			 echo "</table> \n";

			 echo "</div>";


			 mysqli_free_result($resultado_user); // libera los registros de la tabla
		
			 mysqli_free_result($resultado_pet); // libera los registros de la tabla
	
			}/*Cierra else*/


	  } 




if(!$resultado_user)
	{ echo "<div class='f1'><h2>Oops!</h2></div>";
	  echo "<div class='texto_medio'>&#160;&#160;Ha ocurrido el siguiente error:</div><br />";
     	  echo $conexion->error;
	}

	
if(!$resultado_pet)
	{ echo "<div class='f1'><h2>Oops!</h2></div>";
	  echo "<div class='texto_medio'>&#160;&#160;Ha ocurrido el siguiente error:</div><br />";
     	  echo $conexion->error;
	}


#CERRAR CONEXIÓN
mysqli_close($conexion);


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













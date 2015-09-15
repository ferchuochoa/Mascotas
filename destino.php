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

$id_usuario =  $_GET["id_user"];
$id_mascota =  $_GET["id_pet"];

if (!isset($_SESSION)) 
	{
	 session_start();
	}

if(isset($_SESSION["usu_logeado"]))
	$usuario = ($_SESSION["usu_logeado"]);
else
	{$usuario = ""; }



	 $conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");
	 $sentencia_pet="SELECT * FROM mascota WHERE (id_mascota = '$id_mascota')";
	 $resultado_pet=$conexion->query($sentencia_pet);	
	 $registro_pet = mysqli_fetch_array($resultado_pet);

	 if(!$registro_pet) 
		{	
 		 echo "<h2>Oops!</h2>";
		 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Ha ocurrido un problema PET.</div>";

		}
	else
		{
		 $sentencia_user="SELECT * FROM usuario WHERE (id_usuario = '$id_usuario')";
	 	 $resultado_user=$conexion->query($sentencia_user);	
		 $registro_user = mysqli_fetch_array($resultado_user);

		 if(!$registro_user) 
			{	
 		 	 echo "<h2>Oops!</h2>"; echo $id_usuario;
		 	 echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Ha ocurrido un problema USER.</div>";
			}
		else
			{
			 echo "<h2>Ficha extendida</h2>";

			 echo "<table class = 'tabla' align='center' >";

			 $mail = $registro_user['mail_cuenta'].'@'.$registro_user['mail_dominio'];

			 $telefono = $registro_user['telefono'];
 
			 $cod_area = substr($telefono,0,4);

			 $tel_area = substr($telefono,4,2);

			 $dig_tel = substr($telefono,6,4);

			 $telefono = '('.$cod_area.')'.$tel_area.'-'.$dig_tel;	

			 $image = $registro_pet['foto'];		

			 echo "<tr><td colspan='3'> "."&#160;"."</td></tr>";
			
			 echo "<tr>";		
			 echo "<td align = 'center' valign = 'top'><img src='".$image."' border='0' width = '300'/>"."<br/>"."<h4>" . "Publicado el " .$registro_pet['f_ingreso']."</h4>"."<br/>"."<br/>"."<div style = 'width: 290px'><b class='spiffy' ><b class='spiffy1'><b></b></b>
<b class='spiffy2'><b></b></b>
<b class='spiffy3'></b>
<b class='spiffy4'></b>
<b class='spiffy5'></b>
</b> <div class='spiffy_content'>
<div><span style='color: rgb(163, 206, 28); font:bold 14px Arial;'><h8>Importante</h8>
</span><br/>Este sitio no aprueba ningún tipo de pago o recompensa por la adopción o recuperación de mascotas. Además, recomendamos que se acuerde un lugar público para el encuentro de usuarios.
<br/></div>
</div>
<b class='spiffy'>
<b class='spiffy5'></b>
<b class='spiffy4'></b>
<b class='spiffy3'></b>
<b class='spiffy2'><b></b></b>
<b class='spiffy1'><b></b></b>
</b>
</div></td>";

if ($usuario != "")
			 {echo "<td valign = 'top'><div class='texto_left'>". "<h6>" . "Datos mascota" ."</h6>"."<h5>"."<b>Tipo: </b>".$registro_pet['tipo']."<br/>"."<b>Nombre: </b>".$registro_pet['nombre']."<br/>"."<b>Raza: </b>".$registro_pet['raza']."<br/>"."<b>Sexo: </b>".$registro_pet['sexo']."<br/>"."<b>Castrado: </b>".$registro_pet['castrado']."<br/>"."<b>Edad: </b>".$registro_pet['edad']."<br/>"."<b>Tamaño: </b>".$registro_pet['tamanio']."<br/>"."<b>Color: </b>".$registro_pet['color']."<br/>"."<b>Estado: </b>".$registro_pet['estado']."<br/>"."</h5>"."<br/>"."</div><div class='texto_left' style = 'width: 200px'>". "<h2>" . "Mensaje" ."</h2>"."<h5>".$registro_pet['mensaje']."<br/>"."</div><div class='texto_left'>". "<h2>" . "Datos ususario" ."</h2>"."<h5>"."Contactar con"."&#160;"."<b>".$registro_user['nombre']."</b>"."<br/>"."<b>e-mail: </b>".$mail."<br/>"."<b>Tel.: </b>".$telefono."<br/>"."<br/>"."<h4>".$registro_user['nombre']."&#160;se hace responsable por esta publicación"."</h4>"."<br/>"."</div>
</td>";}

else

			{echo "<td valign = 'top'><div class='texto_left'>". "<h6>" . "Datos mascota" ."</h6>"."<h5>"."<b>Tipo: </b>".$registro_pet['tipo']."<br/>"."<b>Nombre: </b>".$registro_pet['nombre']."<br/>"."<b>Raza: </b>".$registro_pet['raza']."<br/>"."<b>Sexo: </b>".$registro_pet['sexo']."<br/>"."<b>Castrado: </b>".$registro_pet['castrado']."<br/>"."<b>Edad: </b>".$registro_pet['edad']."<br/>"."<b>Tamaño: </b>".$registro_pet['tamanio']."<br/>"."<b>Color: </b>".$registro_pet['color']."<br/>"."<b>Estado: </b>".$registro_pet['estado']."<br/>"."</h5>"."<br/>"."</div><div class='texto_left' style = 'width: 200px'>". "<h2>" . "Mensaje" ."</h2>"."<h5>".$registro_pet['mensaje']."<br/>"."</div><div class='texto_left'>". "<h2>" . "Datos ususario" ."</h2>"."<h5>"."Registrate como usuario haciendo" ."<a href='formulario.php'>&#160;click acá&#160;</a>".". Si ya estás registrado identíficate con tus datos de USUARIO y CONTRASEÑA y podrás contactarte con el responsable del anuncio. "."</div>
</td>";}


			 echo "</tr >";

			 echo "<tr><td colspan='3'><img src='images/linea_punteada.JPG' border='0' />"."</td></tr>";


		echo "</table> \n";


		mysqli_free_result($resultado_user); // libera los registros de la tabla
		mysqli_free_result($resultado_pet); // libera los registros de la tabla
			}
		
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
</div><!--Cierra footer-->


</div><!--Cierra wrap-->

</body>
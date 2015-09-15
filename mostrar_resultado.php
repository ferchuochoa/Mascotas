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
	{$usuario_conectado = ""; }



/*
EN CHROME NO PUEDO IR PARA ATRAS

$hosts_permitidos = array('www.misitio.com.ar', 'misitio.com.ar');
$referer = $_SERVER['HTTP_REFERER'];
$temp_referer = explode('/', $referer);
if (!in_array($temp_referer[2], $hosts_permitidos) && $referer!="") {
     
     echo $referer;
}else echo "REFERER: $referer";*/







/*PARA PAGINADOR*/
/*----------------------------------------------------------INICIO*/

$cantidad=5; // cantidad de resultados por página
$no_permitido = 0; // lo uso para validar el nombre

if (!isset($_GET["pg"])) { 
		 
    	$pg = 1; 

/*----------------------------------------------------------*/

	if (!isset($_POST["nombre"]))
		$nombre = "";
	else
		$nombre =  trim($_POST["nombre"]); // quita espacios en blanco adelante y atrás de la cadena

/*----------------------------------------------------------*/

	if (!isset($_POST["estado"]))
		$estado = "";
	else
		$estado =  $_POST["estado"];

/*----------------------------------------------------------*/

	if (!isset($_POST["tipomascota"]))
		$tipo = "";
	else
		$tipo =  $_POST["tipomascota"];

/*----------------------------------------------------------*/

	if (!isset($_POST["razas"]))
		$raza = "";
	else
		$raza =  $_POST["razas"];

/*----------------------------------------------------------*/

	if (!isset($_POST["sexo"]))
		$sexo = "";
	else
		$sexo =  $_POST["sexo"];

/*----------------------------------------------------------*/

	if (!isset($_POST["edad"]))
		$edad = "";
	else
		$edad =  $_POST["edad"];

/*----------------------------------------------------------*/

	if (!isset($_POST["tamanio"]))
		$tamanio = "";
	else
		$tamanio =  $_POST["tamanio"];

/*----------------------------------------------------------*/

	if (!isset($_POST["color"]))
		$color = "";
	else
		$color =  $_POST["color"];

/*----------------------------------------------------------*/

	if (!isset($_POST["castrado"]))
		$castrado = "";
	else
		$castrado =  $_POST["castrado"];

/*----------------------------------------------------------*/

	if (!isset($_POST["localidad"]))
		$localidad = "";
	else
		$localidad =  $_POST["localidad"];

/*----------------------------------------------------------*/

	/*validación nombre mascota*/
	if (!preg_match("/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú\s])*$/",$nombre))
		{
		 $no_permitido = 1;
		}

	if ($no_permitido == 1) 
  		{
		 echo "<h2>Error</h2>";
		 echo "<div class='texto_medio'>Problemas en el campo 'Nombre:'.&#160;&#160;<img src='images/huella2.gif' alt='huella icono' border='0'/></div>";	
		 echo "<div class = 'texto_centrado' align = 'center'><a href='buscador.php'></br><h1>Redefinir la búsqueda</h1></br></a></div></br>";	

		 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/oops.jpg' border='0'/></div>";				
		}
	/*FIN validación nombre mascota*/

  	$inicial = 0; 
} 

else { 
	$pg = $_GET["pg"]; /*pagina*/
	$nombre =  $_GET["nombre"];
	$estado =  $_GET["estado"];
	$tipo =  $_GET["tipomascota"];
	$raza =  $_GET["razas"];
	$sexo =  $_GET["sexo"];
	$edad =  $_GET["edad"];
	$tamanio =  $_GET["tamanio"];
	$color =  $_GET["color"];
	$castrado =  $_GET["castrado"];
	$localidad =  $_GET["localidad"];

   	$inicial = ($pg - 1) * $cantidad;
} 



if ($no_permitido == 0){ /*si el nombre es válido*/

	$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");

	$contar = "SELECT * FROM mascota WHERE (nombre LIKE '%$nombre%'AND tipo LIKE '%$tipo%'AND estado LIKE '%$estado%' AND raza LIKE '%$raza%'AND sexo LIKE '%$sexo%' AND edad LIKE '%$edad%'AND tamanio LIKE '%$tamanio%' AND color LIKE 		'%$color%'AND castrado LIKE '%$castrado%' AND localidad LIKE '%$localidad%')";

	$stmt = $conexion->stmt_init();

	$stmt->prepare($contar);

	if(!$stmt->execute()){

		throw new Exception('No se pudo realizar la consulta:' . $stmt->error);
	}

	else{
		$stmt->store_result(); //Sin esta línea no podemos obtener el total de resultados anticipadamente

		$cuantos_registros = $stmt->num_rows;
	}

	$pages = intval($cuantos_registros/ $cantidad);

	$valor = $pages * $cantidad;

	if ($valor != $cuantos_registros) {

		$pages = $pages + 1; 
	}


/*----------------------------------------------------------FIN */



	$sentencia="SELECT * FROM mascota WHERE (nombre LIKE '%$nombre%'AND tipo LIKE '%$tipo%'AND estado LIKE '%$estado%' 		AND raza LIKE '%$raza%'AND sexo LIKE '%$sexo%' AND edad LIKE '%$edad%'AND tamanio LIKE '%$tamanio%' AND color LIKE 		'%$color%'AND castrado LIKE '%$castrado%' AND localidad LIKE '%$localidad%') LIMIT $inicial,$cantidad";

	$resultado=$conexion->query($sentencia);

	$registro = mysqli_fetch_array($resultado);

	echo "<h2>Resultado de la búsqueda</h2>";
	
	if(!$registro) 
		{
		echo "<div class='texto_medio'>Lo sentimos, la búsqueda no produjo ningún resultado.&#160;&#160;<img src='images/huella2.gif' alt='huella icono' border='0'/></div>";
		echo "<div class = 'texto_centrado' align = 'center'><a href='buscador.php'></br><h1>Redefinir la búsqueda</h1></br></a></div></br>";
		echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/error.png' border='0'/></div>";
		}
	else {
		echo "<table width='100%' align='center' cellpadding='5'>";

		do { 
			$usuario=$registro['id_user'];
			
			$id_mascota = $registro['id_mascota'];	

			$sentencia_user="SELECT * FROM usuario WHERE (id_usuario LIKE '$usuario')";

			$resultado_user=$conexion->query($sentencia_user);

			if(!$resultado_user) echo $conexion->error;

			$registro_user = mysqli_fetch_array($resultado_user);
			
			$image=$registro['foto'];			

			echo "<tr><td colspan='3'> "."&#160;"."</td></tr>";
			
			echo "<tr>";		
			echo "<td align = 'center'><img src='".$image."' border='0' width = '150'/><br/>"."</td>";

			echo "<td valign = 'top'><div class='texto_left'>". "<h3>" . "Datos mascota" ."</h3>"."<h4>" . "Publicado el " .$registro['f_ingreso']."</h4>"."<h5>"."<b>Tipo: </b>".$registro['tipo']."<br/>"."<b>Nombre: </b>".$registro['nombre']."<br/>"."<b>Raza: </b>".$registro['raza']."<br/>"."<b>Sexo: </b>".$registro['sexo']."<br/>"."<b>Edad: </b>".$registro['edad']."<br/>"."<b>Estado: </b>".$registro['estado']."<br/>"."</h5>"."</div></td>";

			echo "<td valign = 'top'><div class='texto_left'>". "<h3>" . "Datos usuario" ."<h5>"."<b>Nombre: </b>".$registro_user['nombre']."<br/>"."<b>Localidad: </b>".$registro_user['localidad']."<br/>"."</h5>"."<a href='destino.php?id_user=$usuario&id_pet=$id_mascota'>"."<br/>"."<br/>"."<h5>"."Ver ficha completa"."</h5>"."</a>"."</div></td>";

			echo "</tr >";

			/*echo "<tr><td colspan='3' class = 'espacio_tbl'> ".""."</td></tr>";*/

			echo "<tr><td colspan='3'><img src='images/linea_punteada.JPG' border='0' />"."</td></tr>";
			
		} while ($registro = mysqli_fetch_array($resultado));

		echo "</table> \n";


		mysqli_free_result($resultado_user); // libera los registros de la tabla

		/*PARA PAGINADOR*/
		/*----------------------------------------------------------INICIO*/

		echo "<center>";

		if (($pg - 1) > 0) { 

			$i = $pg-1;

		echo "<a href='mostrar_resultado.php?pg=" . $i . '&nombre=' . $nombre . '&estado=' . $estado . '&tipomascota=' . $tipo . '&razas=' . $raza . '&sexo=' . $sexo . '&edad=' . $edad . '&tamanio=' . $tamanio . '&color=' . $color . '&castrado=' . $castrado . '&localidad=' . $localidad."'>< Anterior&#160;</a>";
		
		} else { 
			echo "<b>&laquo;</b> ";
		
		} 


		for ($i=1; $i<=$pages; $i++){
		
			if ($pg == $i) {

				echo "<b>"."&#160;".$pg."</b> ";

			} else {
			
				echo "<a href='mostrar_resultado.php?pg=".$i . '&nombre=' . $nombre  . '&estado=' . $estado . '&tipomascota=' . $tipo . '&razas=' . $raza . '&sexo=' . $sexo . '&edad=' . $edad . '&tamanio=' . $tamanio . '&color=' . $color . '&castrado=' . $castrado . '&localidad=' . $localidad."'>$i</a>";
			} 
		} /*cierra for*/

		if(($pg + 1)<=$pages) {
		
			$i = $pg+1;
		
			echo "<a href='mostrar_resultado.php?pg=" .$i. '&nombre=' .  $nombre . '&estado=' . $estado . '&tipomascota=' . $tipo . '&razas=' . $raza . '&sexo=' . $sexo . '&edad=' . $edad . '&tamanio=' . $tamanio . '&color=' . $color . '&castrado=' . $castrado . '&localidad=' . $localidad."'>&#160;Siguiente ></a>";

		} /*cierra if*/
	
		echo "</center>";

		echo "</p>"; 

		/*----------------------------------------------------------FIN */


	  } /*cierra else ($registro)*/
	
	mysqli_free_result($resultado); // libera los registros de la tabla



	if(!$resultado)
		{ echo "<div class='f1'><h2>Ups!</h2></div>";
  		  echo "<div class='texto_medio'>&#160;&#160;Ha ocurrido el siguiente error:</div><br />";
	     	  echo $conexion->error;
		}


	#CERRAR CONEXIÓN
	mysqli_close($conexion);


} /*FIN  if ($no_permitido == 0)*/



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













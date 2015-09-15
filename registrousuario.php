<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Alta usuario</title>
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
#ASIGNACIÓN DE VARIABLES.
$usuario =  $_POST["usuario"];
$contrasenia =  $_POST["contrasenia"];
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



/*validación usuario*/
if ($usuario == "") 
  {echo "<div class='f1'><h3 class='fuente2'> - Por favor complete el campo usuario.</h3></div>";
   $error="1";}



/*Validación contraseña*/
if ($contrasenia == "" || strlen($contrasenia) < 8 || strlen($contrasenia) > 16) 
  {echo "<div class='f1'><h3 class='fuente2'> - Por favor, ingresa una contraseña, Debe tener una longitud entre 8 y 16    caracteres.</h3></div>";
   $error="1";}


/*validación apellido*/
$no_permitido = 0;
$chars_permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóú"; 
for ($i=0; $i<strlen($apellido); $i++){
      if (strpos($chars_permitidos, substr($apellido,$i,1))=== false)
	  {$no_permitido = 1;
	  }	
      }
if ($apellido == "" || $no_permitido == 1) 
  {echo "<div class='f1'><h3 class='fuente2'> - Por favor ingrese su apellido verdadero, y ayudará a construir un servicio confiable para todos los visitantes. No  incluya espacios.</h3></div>";
   $error="1";}


/*validación nombre*/
$no_permitido = 0;
for ($i=0; $i<strlen($nombre); $i++){
      if (strpos($chars_permitidos, substr($nombre,$i,1))=== false)
	  {$no_permitido = 1;
	  }	
      }
if ($nombre == "" || $no_permitido == 1) 
  {echo "<div class='f1'><h3 class='fuente2'> - Por favor ingrese su nombre verdadero, y ayudará a construir un servicio confiable para todos los visitantes. No  incluya espacios.</h3></div>";
   $error="1";}


/*validación dni*/
$nums_no_permitido = 0;
$nums_permitidos = "0123456789";
   for ($j=0; $j<strlen($nro_dni); $j++){
      if (strpos($nums_permitidos, substr($nro_dni,$j,1)) === false)
	  {$nums_no_permitido = 1;}
      } 

if ($nro_dni == "" || $nums_no_permitido == 1 || strlen($nro_dni) < 7 || strlen($nro_dni) > 8)
  {echo "<div class='f1'><h3 class='fuente2'> - El número de documento es un campo obligatorio. No utilice puntos.</h3></div>";
   $error="1";}




if ($calle=="" ) $calle="NULL";

/*validación número de casa*/
if ($numero=="" ) $numero=0;
else
	{
	 $nums_no_permitido = 0;
   	 for ($j=0; $j<strlen($numero); $j++){
      	 if (strpos($nums_permitidos, substr($numero,$j,1)) === false)
	  	{$nums_no_permitido = 1;}
	   } 
	 
	 if ($nums_no_permitido == 1 || strlen($piso) > 4) 
  		{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Nro.</h3></div>";
   		 $error="1";}
    
	}

/*validación número de PISO*/
if ($piso=="" ) $piso = 0;
else
	{
	 $nums_no_permitido = 0;
   	 for ($j=0; $j<strlen($piso); $j++){
      	 if (strpos($nums_permitidos, substr($piso,$j,1)) === false)
	  	{$nums_no_permitido = 1;}
	   } 
	 
	 if ($nums_no_permitido == 1 || strlen($piso) > 2) 
  		{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Piso. No utilice caracteres especiales.</h3></div>";
   		 $error="1";}
    
	}


if ($departamento=="" ) $departamento="NULL";


/*validación número de TELEFONO*/


if ($telefono == "" )
	{echo "<div class='f1'><h3 class='fuente2'> - El número de teléfono es un campo obligatorio. </h3></div>";
   	$error="1";}
else
	{
	 $nums_no_permitido = 0;
   	 for ($j=0; $j<strlen($telefono); $j++){
      	 if (strpos($nums_permitidos, substr($telefono,$j,1)) === false)
	  	{$nums_no_permitido = 1;}
	   } 
	 
	 if ($nums_no_permitido == 1 || strlen($telefono) > 10) 
  		{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Teléfono. No utilice guiones. Incluya el código de área sin cero. Ej: 2262450321, donde 2262 es el código de área de Necochea.</h3></div>";
   		 $error="1";}
	 else
		{
		 $codigo = substr($telefono,0,4);
		 

		if (($localidad == "Cláraz" || $localidad == "Defferrari" || $localidad == "Juan N. Fernández" || $localidad == "La Negra" || $localidad == "Nicanor Olivera" || $localidad == "Ramón Santamarina") && ($codigo != "2264"))
			{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Teléfono. Código de área inválido. No utilice 0 en el código de área.</h3></div>";
   		 $error="1";}

		if (($localidad == "Energía" || $localidad == "San Cayetano") && ($codigo != "2983"))
			{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Teléfono. Código de área inválido. No utilice 0 en el código de área.</h3></div>";
   		 $error="1";}


		if (($localidad == "Lobería" || $localidad == "San Manuel" || $localidad == "Tamangueyú") && ($codigo != "2261"))
			{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Teléfono. Código de área inválido. No utilice 0 en el código de área.</h3></div>";
   		 $error="1";}

		if (($localidad == "Necochea" || $localidad == "Pieres" || $localidad == "Quequén") && ($codigo != "2262"))
			{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Teléfono. Código de área inválido. No utilice 0 en el código de área.</h3></div>";
   		 $error="1";}


		}	
    
	}



/*validación número de CELULAR*/
if ($celular=="" ) $celular = 0;
else
	{
	 $nums_no_permitido = 0;
   	 for ($j=0; $j<strlen($celular); $j++){
      	 if (strpos($nums_permitidos, substr($celular,$j,1)) === false)
	  	{$nums_no_permitido = 1;}
	   } 
	 
	 if ($nums_no_permitido == 1 || strlen($celular) > 10) 
  		{echo "<div class='f1'><h3 class='fuente2'> - Error en el campo Celular. No utilice guiones.Incluya el código de área sin cero. Ej: 2262590798, donde 2262 es el código de área de Necochea.</h3></div>";
   		 $error="1";}
    
	}



/*validación EMAIL*/
if ($mail == "") 
  {echo "<div class='f1'><h3 class='fuente2'> - La dirección de correo electrónico es obligatoria. Por favor,  asegúrese de    escribirla correctamente.</h3></div>";
   $error="1";}


/*validación DOMINIOMAIL*/
if ($dominiomail == "") 
  {echo "<div class='f1'><h3 class='fuente2'> - La dirección de correo electrónico es obligatoria. Por favor,  asegúrese de    escribirla correctamente.</h3></div>";
   $error="1";}


if ($error != "") {
echo "<div class='f1' align='center'><h4 class='fuente2'>Regresa al formulario</h4></div>";
echo "<div align='center'><a href='Formulario.php'><img src= 'flecha3.gif' border='0'alt='Volver'/></a></div></br>";
echo "<div align = 'center'><img src= 'perro1.gif' border='0'/></div>";
}

if ($error == "")
{
$conexion = mysqli_connect("localhost","root","","mascotas");


	
	$sentecia_u="SELECT COUNT(*) as nu FROM usuario WHERE (usuario='$usuario')";


	$cantidad = $conexion->query($sentecia_u);

	$registro = mysqli_fetch_array($cantidad );
	
	
	if(!$registro || $registro["nu"] > 0)
	{
		echo "<div class='f1' align='center'><h2 class='fuente2' >Lo sentimos, el nombre de usuario no está disponible</h2></div>";
		echo "<div class='f1' align='center'><h4 class='fuente2'>Regresa al formulario</h4></div>";
		echo "<div align='center'><a href='Formulario.php'><img src= 'flecha3.gif' border='0'alt='Volver'/></a></div></br>";
		echo "<div align = 'center'><img src= 'perro1.gif' border='0'/></div>";
	}
	else
	{
		$sentencia = "INSERT INTO usuario (contrasenia,nombre,apellido,tipo_dni,nro_dni,localidad,calle,numero,piso,dpto,telefono,celular,mail_cuenta,mail_dominio,usuario) VALUES('$contrasenia','$nombre','$apellido','$tipo_dni',$nro_dni,'$localidad','$calle',$numero,$piso,'$departamento',$telefono,$celular,'$mail','$dominiomail','$usuario')";

		$resultado=$conexion->query($sentencia);
	
		if(!$resultado)
			echo $conexion->error;
		else{
			echo "<div class='f1' align='center'><h2 class='fuente2' >El registro se ha realizado con éxito. Gracias por elegirnos!!</h2></div>";
			echo "<div align = 'center'><img src= '3gatitos.jpg' border='0'/></div>";
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

<div id="footer">
Desarrollado por <a href="#">aloha!&#160;|&#160;</a>Acerca de <a href="#">Buscador de Mascotas</a>&#160;|&#160;<a href="contacto.php">Contacto</a>&#160;|&#160;<a href="#top">Ir arriba</a>
</div>


</div><!--Cierra wrap-->
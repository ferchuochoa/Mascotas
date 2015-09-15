<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualización datos</title>
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



	$conexion = mysqli_connect("localhost","mastermascotero","vndf87sdf98dfvkj546","mascotas");
	$sentencia="SELECT * FROM usuario WHERE (usuario = '$usuario')";
	$resultado_c=$conexion->query($sentencia);
	if(!$resultado_c)
		{echo "<h2>Se ha producido el siguiente error:</h2>";
		 echo $conexion->error;
		}
	
	$registro_c = mysqli_fetch_array($resultado_c);
	if(!$registro_c) 
		{	
		 echo "<h2>Oops!</h2>";
		 echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/error.png' border='0'/></br></div>";
		}
	else
		{$user = $registro_c['usuario'];
		 $contrasenia = $registro_c['contrasenia'];
		 $nombre = $registro_c['nombre'];
		 $apellido = $registro_c['apellido'];
		 $tipo_dni = $registro_c['tipo_dni'];
		 $nro_dni = $registro_c['nro_dni'];
		 $localidad = $registro_c['localidad'];
		 $calle = $registro_c['calle'];
		 $nro = $registro_c['numero'];
		 $piso = $registro_c['piso'];
		 $dpto = $registro_c['dpto'];
		 $telefono = $registro_c['telefono'];
		 $celular = $registro_c['celular'];
		 $mail_cuenta = $registro_c['mail_cuenta'];
		 $mail_dominio = $registro_c['mail_dominio'];
		}
	
	echo "
<h2><a href='#'>Actualiza tus datos</a></h2>

 <form method='post' action='actualizar_usuario.php' >

<fieldset>
<legend><b>Datos de usuario</b></legend>


 <div class='espacio'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Contraseña:</div><div><input name='contrasenia' type='password' maxlength='16' size='21' value = '$contrasenia'/></div></div>


<div class='espacio_doble'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Repetir contraseña:</div><div><input name='contrasenia2' type='password' maxlength='16' size='21' value = '$contrasenia'/></div></div>

</fieldset>


<fieldset>
<legend><b>Información personal</b></legend>


 <div class='espacio'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Apellido:</div><div><input name='apellido' maxlength = '35' size='21' type='text'value = '$apellido'/></div></div>

 <div class='espacio'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Nombre:</div><div><input name='nombre' maxlength = '35' size='21' type='text' value = '$nombre'/></div></div>

 <div class='espacio'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Documento:</div><div>
      <select name='doc'>
      <option doc=$tipo_dni>$tipo_dni	
      <option doc='DNI'>DNI
      <option doc='LE'>LE
      <option doc='LC'>LC
      <option doc='CI'>CI
      <option doc='LEG'>LEG
      </select><input name='nrodoc' maxlength = '9' type='text' size='12' value = '$nro_dni'/></div></div>


  <div  class='espacio'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Localidad:</div><div>
      <select name='localidad'>
      <option localidad=$localidad>$localidad
      <option localidad='CLARAZ'>Cláraz
      <option localidad='DEFFERRARI'>Defferrari
      <option localidad='ENERGIA'>Energía
      <option localidad='JNFERNANDEZ'>Juan N. Fernández
      <option localidad='LANEGRA'>La Negra
      <option localidad='LOBERIA'>Lobería
      <option localidad='NECOCHEA'>Necochea
      <option localidad='NOLIVERA'>Nicanor Olivera
      <option localidad='PIERES'>Pieres
      <option localidad='QQN'>Quequén
      <option localidad='SANTAMARINA'>Ramón Santamarina
      <option localidad='SANCAYETANO'>San Cayetano
      <option localidad='SANMANUEL'>San Manuel
      <option localidad='TAMANGUEYU'>Tamangueyú
      </select></div></div>

  <div  class='espacio'><div class='flabeldcha' align='right'>Domicilio:</div><div><p>&#160;&#160;Calle: <input name='calle' size='17' type='text' value = '$calle'/> Nro: <input name='nro' maxlength = '4' size='4' type='text' value = '$nro'/></p></div></div>

  <div  class='espacio'><div class='flabeldcha' align='right'>&#160;&#160;&#160;</div><div><p>&#160;&#160;Piso: <input name='piso' maxlength = '2' size='4' type='text' value = '$piso'/> Departamento: <input name='dpto' maxlength = '4' size='5' type='text' value = '$dpto'/></p></div></div>

 <div class='espacio'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Teléfono:</div><div class='flabelizda'><input name='tel'  type='text' maxlength = '12' size='10' value = '$telefono'/></div></div>

 <div class='espacio'><div class='flabeldcha' align='right'>Celular:</div><div><input name='cel'  type='text' maxlength = '12' size='10' value = '$celular'/></div></div>

  <div  class='espacio_doble'><div class='flabeldcha' align='right'><FONT COLOR=FF8000>&#160;*&#160;</FONT>e-mail:</div> <div><input name='email' maxlength = '35' type='text' value = '$mail_cuenta'/> @ <input name='dominiomail' maxlength = '15' size='15' type='text' value = '$mail_dominio'/></div></div>
  
 

</fieldset><!--Fin datos mascotas-->

<div class='espacio'><FONT COLOR=FF8000>&#160;*&#160;</FONT>Campos obligatorios.</div>


 <div align='center'>
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
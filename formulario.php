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

<h2><a href="#">Complete el formulario con sus datos</a></h2>

 <form method="post" action="registrousuario.php" onsubmit="return validar(this)">

<fieldset>
<legend><b>Datos de usuario</b></legend>

 
 <div class="espacio"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Usuario:</div><div><input name="usuario"  type="text" maxlength="20" size="15" /></div></div>

 <div class="espacio_doble"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Contraseña:</div><div><input name="contrasenia" type="password" maxlength="35" size="15" /></div></div>

</fieldset>


<fieldset>
<legend><b>Información personal</b></legend>


 <div class="espacio"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Apellido:</div><div><input name="apellido" maxlength = "35" type="text"/></div></div>

 <div class="espacio"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Nombre:</div><div><input name="nombre" maxlength = "35" type="text" /></div></div>

 <div class="espacio"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Documento:</div><div>
      <select name="doc">
      <option doc="DNI">DNI
      <option doc="LE">LE
      <option doc="LC">LC
      <option doc="CI">CI
      <option doc="LEG">LEG
      </select><input name="nrodoc" maxlength = "9" type="text" /></div></div>


  <div  class="espacio"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Localidad:</div><div>
      <select name="localidad">
      <option localidad="CLARAZ">Cláraz
      <option localidad="DEFFERRARI">Defferrari
      <option localidad="ENERGIA">Energía
      <option localidad="JNFERNANDEZ">Juan N. Fernández
      <option localidad="LANEGRA">La Negra
      <option localidad="LOBERIA">Lobería
      <option localidad="NECOCHEA">Necochea
      <option localidad="NOLIVERA">Nicanor Olivera
      <option localidad="PIERES">Pieres
      <option localidad="QQN">Quequén
      <option localidad="SANTAMARINA">Ramón Santamarina
      <option localidad="SANCAYETANO">San Cayetano
      <option localidad="SANMANUEL">San Manuel
      <option localidad="TAMANGUEYU">Tamangueyú
      </select></div></div>

  <div  class="espacio"><div class="flabeldcha" align="right">Domicilio:</div><div><p>&#160;&#160;Calle: <input name="calle" size="17" type="text"/> Nro: <input name="nro" maxlength = "4" size="4" type="text"/></p></div></div>

  <div  class="espacio"><div class="flabeldcha" align="right">&#160;&#160;&#160;</div><div><p>&#160;&#160;Piso: <input name="piso" maxlength = "2" size="4" type="text"/> Departamento: <input name="dpto" maxlength = "4" size="5" type="text"/></p></div></div>



 <div class="espacio"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Teléfono:</div><div class="flabelizda"><input name="tel"  type="text" maxlength = "12" size="10" /></div></div>

 <div class="espacio"><div class="flabeldcha" align="right">Celular:</div><div><input name="cel"  type="text" maxlength = "12" size="10"/></div></div>
 

  <div  class="espacio_doble"><div class="flabeldcha" align="right"><FONT COLOR=CC0001>&#160;*&#160;</FONT>e-mail:</div> <div><input name="email" maxlength = "35" type="text" /> @ <input name="dominiomail" maxlength = "15" size="15" type="text" /></div></div>
  
 

</fieldset><!--Fin datos usuario-->

<div class="espacio"><FONT COLOR=CC0001>&#160;*&#160;</FONT>Campos obligatorios.</div>


 <div align="center">
    <input type = "submit" value="&#160;Enviar&#160;"/>   
 </div>


 </form>

</div><!--Cierra middle-->


<div style="clear: both;"> </div>

</div><!--Cierra contentt-->
<div id="bottom"> </div>
















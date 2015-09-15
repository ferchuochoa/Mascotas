<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Logout</title>
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


<h2>Accede a tu cuenta</h2>

<fieldset>
<legend><b>Tus datos</b></legend>

<form name="formulario" method="post" action="iniciar_session.php">

<div class="espacio"><div class="fmaildcha"><FONT COLOR=FF8000>*&#160;</FONT>Usuario:</div><div><input name="usuario" type="text" maxlength="15" size="20"/></div>
</div>

<div class="espacio">
<div class="fmaildcha" align="right"><FONT COLOR=FF8000>*&#160;</FONT>Contraseña:</div>
<div><input name="contrasenia" type="password" maxlength="20" size = "20"/> </div>
</div>

<br />
<div align="center">
    <input type = "submit" value="&#160;Acceder&#160;"/>   
</div>
<br />

</form>


</fieldset>



<div class="espacio"><FONT COLOR=FF8000>&#160;*&#160;</FONT>Campos obligatorios.</div><br />


<div class = "texto_centrado" align = "center"><a href="#">¿Olvidaste tu contraseña?</a>|<a href="formulario.php">¿Aún no tienes una cuenta?</a></div>


</div><!--Cierra middle-->

<div style="clear: both;"> </div>

</div><!--Cierra contentt-->

<div id="bottom"> </div>

<div id="footer">
Desarrollado por <a href="#">aloha!&#160;|&#160;</a>Acerca de <a href="#">Buscador de Mascotas</a>&#160;|&#160;<a href="contacto.php">Contacto</a>&#160;|&#160;<a href="#top">Ir arriba</a>
</div>


</div><!--Cierra wrap-->





</body>
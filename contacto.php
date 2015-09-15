<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<title>Formulario de contacto</title>
<meta http-equiv="Content-Type" content="text/html/script;"/>

<script type="text/javascript" src="validar_contacto.js"> </script>

<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>

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
<h2><a href="#">Escríbenos!</a></h2>
<form name="formulario" method="post" action="gmail_basic.php" onsubmit="return validar(this)">

<fieldset>
<legend><b>Tus datos</b></legend>

<div class="espacio"><div class="fmaildcha"><FONT COLOR=FF8000>*&#160;</FONT>Tu nombre:</div><div><input name="nombre" type="text" maxlength="15" size="15"/></div>
</div>

<div class="espacio_doble">
<div class="fmaildcha" align="right"><FONT COLOR=FF8000>*&#160;</FONT>e-mail:</div>
<div><input name="email" type="text" /> @ <input name="dominiomail" size="15" type="text"/></div>
</div>



</fieldset>


<fieldset>
<legend><b>Comentarios</b></legend>
<div class="espacio_doble"><div align="center">
    <textarea name="comentario" rows="10" cols="50"></textarea>
</div></div>

</fieldset>

<div class="espacio"><FONT COLOR=FF8000>&#160;*&#160;</FONT>Campos obligatorios.</div>

 
<div align="center">
    <input type = "submit" value="&#160;Enviar&#160;"/> 
</div>

</form>


<br /><br />
</div>


<div style="clear: both;"> </div>

</div>
<div id="bottom"> </div>


</div>
</body>
</html>
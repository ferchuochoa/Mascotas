</head>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<body>

<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

if(isset($_SESSION["usu_logeado"]))
	{$usuario = ($_SESSION["usu_logeado"]);
	 echo "<div align = 'right'>Hola, $usuario&#160;|&#160;<a href='logout.php'>Salir&#160;</a></div>";
	}
else
	{echo "<div align = 'right'><a href='login.php' align = 'left'>Acceder</a>&#160;</div>";

	}
?>
 
<div id="headermenu">
<div class="headerm"> 
<ul>
<li class="first"><a href="index.php">Inicio</a></li> 
<li><a href="buscador.php">Buscador</a></li> 
<li><a href="contacto.php">Contacto</a></li> 
<li><a href="#">Blog</a></li>
</ul>
</div>
</div>


<div class="left">

<h2>&#160;Buscador</h2>
<ul>
<li><a href="#">Busco novi@</a></li>
<li><a href="/simpatico/buscador.php">Encuentrame!</a></li>  
</ul>

<h2>&#160;Recomendaciones</h2>
<ul>
<li><a href="#">Antes de adoptar</a></li> 
</ul>

<h2>&#160;Servicios</h2>
<ul>
<li><a href="#">Adiestradores</a></li> 
<li><a href="#">Paseadores</a></li> 
<li><a href="#">Peluquerías</a></li> 
<li><a href="#">Pensiones</a></li>
<li><a href="#">Traslados</a></li> 
</ul>

<h2>&#160;Usuarios registrados</h2>
<ul>
<li><a href="formulariomascota.php">Alta mascota</a></li> 
<li><a href="cuenta_usuario.php">Mi cuenta</a></li> 
</ul>



<!--</br><div align="center">
<a href="http://www.contadorgratis.es/">
<img src="http://www.contadorgratis.es/count.php?majo725"
border="0" alt="Contadores Web"></a><br></div>-->
</div> <!--cierra calss left-->



<div class="right">
<h2>Nube de etiquetas</h2>
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;">sit</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;" >amet</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;">consectetuer</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;">elit</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px; ">Donec</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;">dui</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;">a</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;">metus</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;" >non</a> 
 <a href="#" title="font-size: 25 - hits: 5" style="color:#000000;font-size:25px;"  >adoptar</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >rhoncus</a>
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >in</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >nec</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >neque</a>
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >Sed</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >suscipit</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >publicidad</a> 
 <a href="#" title="font-size: 25 - hits: 5" style="color:#000000;font-size:25px;"  >vel</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >venenatis</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >vestibulum</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >convallis</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >erat</a> 
 <a href="#" title="font-size: 30 - hits: 6" style="color:#0000ff;font-size:30px;"  >et</a> 
 <a href="#" title="font-size: 25 - hits: 5" style="color:#000000;font-size:25px;"  >lobortis</a>
 <a href="#" title="font-size: 25 - hits: 5" style="color:#000000;font-size:25px;"  >lectus</a>  
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >"No puedo dar de alta una mascota"</a> 
 <a href="#" title="font-size: 30 - hits: 6" style="color:#0000ff;font-size:30px;"  >ayuda</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >Duis</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >lorem</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >tincidunt</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >bibendum</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >mi</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >imperdiet</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >enim</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >nisl</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >sem</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >velit</a>
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >Fusce</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >odio</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >purus</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >Integer</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >elementum</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >Pellentesque</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >nulla</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >eros</a> 
 <a href="#" title="font-size: 17.5 - hits: 4" style="color:#4063B7;font-size:17.5px;"  >ut</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >diam</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >Nullam</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >lacus</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >mollis</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >quam</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >luctus</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >est</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >accumsan</a>
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >molestie</a> 
 <a href="#" title="font-size: 12.5 - hits: 3" style="color:#FFAF4C;font-size:12.5px;"  >nunc</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >Aliquam</a> 
 <a href="#" title="font-size: 10 - hits: 2" style="color:#f6453c;font-size:10px;"  >dignissim</a> 



<!--<img src="images/huella3.gif" alt="Icono huella">&#160;&#160;Tu cuenta&#160;&#160;</h2>-->
<fieldset class="espacio_doble_color">
<legend class="leyenda"><b>&#160;Tu cuenta&#160;</b></legend>

<form name="formulario" method="post" action="iniciar_session.php" onsubmit="return validar(formulario)">

<div class="espacio"><div class = "texto_left">Usuario:</div><div class = "texto_left"><input name="usuario" type="text" maxlength="15" size="20"/></div>
</div>

<div class="espacio">
<div class = "texto_left">Contraseña:</div>
<div class = "texto_left"><input name="contrasenia" type="password" maxlength="20" size = "20"/></div>
</div>


<div class="espacio" align="center">
    <input type = "submit" value="&#160;Acceder&#160;"/>   
</div>

</form>

<div class="espacio_doble" align="center"><a href="#">¿Olvidaste tu contraseña?</a>
</div>


</fieldset>


</div>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<title>Buscador</title>
<meta http-equiv="Content-Type" content="text/html/script;"/>

<script type="text/javascript" src="listas_dependientes_buscador.js"> </script>
<script type="text/javascript" src="validar_nombre_mascota_en_buscador.js"> </script>

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
<h2><a href="#">Buscador</a></h2>
<form name="formulario" method="post" action="mostrar_resultado.php" onsubmit="return validar(this)">


<fieldset>
<legend><b>Datos mascota</b></legend>


<div class="espacio"><div class="flabeldcha">Nombre:</div><div><input name="nombre" type="text" maxlength="15" size="15"/></div>
</div>


<div class="espacio"><div class="flabeldcha">Estado:</div>
<div><h5><input name="estado" type=radio value="encontrado" checked>&#160;Encontrado
      <input name="estado" type=radio value="perdido">&#160;Perdido
      <input name="estado" type=radio value="adopción">&#160;En adopción</h5></div>
</div>

<!--LISTAS DEPENDIENTES-->
 <div class="espacio">
 <div class="flabeldcha">Tipo de mascota:</div>  
 <div>  
 <select name="tipomascota" OnChange="cambiar()" >
 <option value="gato">Gato</option>
 <option value="perro" selected>Perro</option>
 </select>
 </div>
 </div>


 <div class="espacio">
 <div class="flabeldcha">Raza:</div>
 <div>
 <select name="razas" disable>
 <option value="" selected>Todos</option>
 <option value="Mestizo">Mestizo</option>
 <option value="Alaskan Malamute">Alaskan Malamute</option>
 <option value="American Staffordshire">American Staffordshire</option>
 <option value="Basset Hound">Basset Hound</option>
 <option value="Beagle">Beagle</option>
 <option value="Bichón Maltés">Bichón Maltés</option>
 <option value="Mobtail">Bobtail</option>
 <option value="Boxer">Boxer</option>
 <option value="Branco Alemán">Branco Alemán</option>
 <option value="Bulldog Francés">Bulldog Francés</option>
 <option value="Bulldog Inglés">Bulldog Inglés</option>
 <option value="Bullmastiff">Bullmastiff</option>
 <option value="Cane Corso">Cane Corso</option>
 <option value="Caniche">Caniche</option>
 <option value="Carlino">Carlino</option>
 <option value="Chihuahua">Chihuahua</option>
 <option value="Chow Chow">Chow Chow</option>
 <option value="Cocker Spaniel">Cocker Spaniel</option>
 <option value="Collie">Collie</option>
 <option value="Dálmata">Dálmata</option>
 <option value="Dobermann">Dobermann</option>
 <option value="Espagneul Breton">Espagneul Bretón</option>
 <option value="Galgo Español">Galgo Español</option>
 <option value="Golden Retriever">Golden Retriever</option>
 <option value="Husky Siberiano">Husky Siberiano</option>
 <option value="Labrador Retriever">Labrador Retriever</option>
 <option value="Leonberguer">Leonberguer</option>
 <option value="Mastín Español">Mastín Español</option>
 <option value="Pastor Alemán">Pastor Alemán</option>
 <option value="Pastor de Brie">Pastor de Brie</option>
 <option value="Perro de Agua Español">Perro de Agua Español</option>
 <option value="San Bernardo">San Bernardo</option>
 <option value="Scottish Terrier">Scottish Terrier</option>
 <option value="Schnauzer Miniatura">Schnauzer Miniatura</option>
 <option value="Setter Inglés">Setter Inglés</option>
 <option value="Teckel">Teckel</option>
 <option value="Terrier de Bedlington">Terrier de Bedlington</option>
 <option value="West Highland Terrier">West Highland Terrier</option>
 <option value="Yorkshire Terrier">Yorkshire Terrier</option>
 </select>
 </div>
 </div>
<!--FIN LISTAS DEPENDIENTES--> 



<div class="espacio">
   <div class="flabeldcha">Sexo:</div><div><h5><input name="sexo" type=radio value="Hembra">&#160;Hembra
      <input name="sexo" type=radio value="Macho">&#160;Macho <input name="sexo" type=radio value="" checked>&#160;Todos</h5></div>
 </div> 


<div class="espacio">
   <div class="flabeldcha">Edad:
   </div>
   <div>
      <select name="edad">
      <option value="">Todos
      <option value="cachorro">Cachorro
      <option value="joven">Joven
      <option value="adulto">Adulto
      <option value="abuelo">Abuelo
      </select>
    </div>
 </div> 


<div class="espacio">
   <div class="flabeldcha" >Tamaño:
   </div>
      <div>
      <select name="tamanio">
      <option value="">Todos
      <option value="pequeño">Pequeño
      <option value="mediano">Mediano
      <option value="grande">Grande
      <option value="gigante">Gigante
      </select>
      </div>
 </div>


<div class="espacio">
   <div class="flabeldcha">Color:</div>
   <div>
      <select name="color">
      <option value="">Todos
      <option value="blanco">Blanco
      <option value="nagro">Negro
      <option value="gris">Gris
      <option value="marron">Marrón
      <option value="bicolor">Bicolor
      <option value="tricolor">Tricolor
      </select>
   </div>
</div>


<div class="espacio">
  <div class="flabeldcha">Castrad@:</div><div><h5><input name="castrado" type=radio value="si">&#160;Si
     <input name="castrado" type=radio value="no">&#160;No <input name="castrado" type=radio value="" checked>&#160;Todos</h5></div>
</div>


<div class="espacio_doble">
   <div class="flabeldcha">Localidad:</div>
   <div>
      <select name="localidad">
      <option value="">Todas
      <option value="CLARAZ">Cláraz
      <option value="DEFFERRARI">Defferrari
      <option value="ENERGIA">Energía
      <option value="JNFERNANDEZ">Juan N. Fernández
      <option value="LANEGRA">La Negra
      <option value="LOBERIA">Lobería
      <option value="NECOCHEA">Necochea
      <option value="NOLIVERA">Nicanor Olivera
      <option value="PIERES">Pieres
      <option value="QQN">Quequén
      <option value="SANTAMARINA">Ramón Santamarina
      <option value="SANCAYETANO">San Cayetano
      <option value="SANMANUEL">San Manuel
      <option value="TAMANGUEYU">Tamangueyú
      </select>
   </div>
</div>  


</fieldset><!--Fin datos mascotas-->


 
<div class="espacio_doble" align="center">
    <input type = "submit" value="&#160;Buscar&#160;"/>
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
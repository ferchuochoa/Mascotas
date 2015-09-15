<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Alta mascota</title>
<meta http-equiv="Content-Type" content="text/html;"/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<script type="text/javascript" src="listas_dependientes_formulario_mascota.js"> </script>
<!--<script type="text/javascript" src="validarmascota.js"> </script>-->

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

<h2><a href="#">Complete el formulario con los datos de la mascota</a></h2>

 <form name="formulario" ENCTYPE="multipart/form-data" method="post" action="registromascota.php" >


<!--onsubmit="return validar(this)"-->


<fieldset>
<legend><b>Datos mascota</b></legend>



 <div class="espacio">
   <div class="flabeldcha" align="right">Nombre:</div><div><input name="nombre" type="text" maxlength="15" size="15"/>
   </div>
 </div>   
 
 
 

<!--LISTAS DEPENDIENTES-->
 <div class="espacio">
 <div class="flabeldcha">Tipo de mascota:</div>  
 <div>  
 <select name="tipomascota" OnChange="cambiar()">
 <option value="Gato" >Gato</option>
 <option value="Perro" selected>Perro</option>
 </select>
 </div>
 </div>


 <div class="espacio">
 <div class="flabeldcha">Raza:</div>
 <div>
 <select name="razas" disable>
 <option value="" selected>Sin especificar</option>
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
   <div class="flabeldcha">Otra raza:</div><div><input name="otra_raza" type="text"/></div>
 </div>


 



 <div class="espacio">
   <div class="flabeldcha">Edad:
   </div>
   <div>
      <select name="edad">
      <option value="">
      <option value="Cachorro">Cachorro
      <option value="Joven">Joven
      <option value="Adulto">Adulto
      <option value="Abuelo">Abuelo
      </select>
    </div>
 </div> 


<div class="espacio">
   <div class="flabeldcha">Sexo:</div><div><h5><input name="sexo" type=radio value="Hembra">Hembra
      <input name="sexo" type=radio value="Macho" checked>Macho</h5></div>
 </div>

 <div class="espacio">
   <div class="flabeldcha">Tamaño:
   </div>
      <div>
      <select name="tamanio">
      <option value="">
      <option value="Pequeño">Pequeño
      <option value="Mediano">Mediano
      <option value="Grande">Grande
      <option value="Gigante">Gigante
      </select>
      </div>
 </div>


 <div class="espacio">
   <div class="flabeldcha">Color:</div>
   <div>
      <select name="color">
      <option value="">
      <option value="Blanco">Blanco
      <option value="Negro">Negro
      <option value="Gris">Gris
      <option value="Marrón">Marrón
      <option value="Bicolor">Bicolor
      <option value="Tricolor">Tricolor
      </select>
   </div>

 </div>



 <div class="espacio">
  <div class="flabeldcha">Castrad@:</div><div><h5><input name="castrado" type=radio value="Si">Si
     <input name="castrado" type=radio value="No">No <input name="castrado" type=radio value="Desconocido" checked>Desconoce</h5></div>
 </div>



 <div class="espacio">
   <div class="flabeldcha"><FONT COLOR=FF8000>*&#160;</FONT>Localidad:</div>
   <div>
      <select name="localidad">
      <option value="">
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


 <div class="espacio">
    <div class="flabeldcha">Foto:</div><div><input name="archivo" type="file"/></div>     
 </div>
 

<div class="espacio_doble">
 <div class="flabeldcha">Estado:</div><div ><h5><input name="estado" type=radio value="Encontrado" checked>Encontrado
      <input name="estado" type=radio value="Perdido">Perdido
      <input name="estado" type=radio value="En adopción">En adopción</h5></div>
 </div>


</fieldset><!--Fin datos mascotas-->

<fieldset>
<legend><b>Otros datos que pueden ayudar</b></legend>
 

 
 <div class="espacio_doble"><div align="center">
    <textarea name="comentario" rows="8" cols="50"></textarea>
 </div></div>
 
</fieldset><!--Fin datos mascotas-->

<div class="espacio"><FONT COLOR=FF8000>&#160;*&#160;</FONT>Campo obligatorio.</div>


 <div align="center">
    <input type = "submit" value="&#160;Enviar&#160;"/>   
 </div>

 </form>


</div><!--Cierra middle-->


<div style="clear: both;"> </div>

</div><!--Cierra contentt-->
<div id="bottom"> </div>


</div>
</body>
</html>

















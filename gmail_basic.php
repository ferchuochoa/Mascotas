<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Resultado del envío</title>
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
$ma = $_POST["email"];
$md = $_POST["dominiomail"];
$remitente =  $_POST["email"].'@'.$_POST["dominiomail"];
$name = $_POST["nombre"];
$body =  $_POST["comentario"]."<br/>".'Remitente: '.$remitente;
$error = "";
$cont = "";


/*validación nombre*/
/*validación nombre*/
$no_permitido = 0;
$chars_permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
for ($i=0; $i<strlen($name); $i++){
      if (strpos($chars_permitidos, substr($name,$i,1))=== false)
	  {$no_permitido = 1;
	  }	
      }
if ($name == "" || $no_permitido == 1) 
  {
	echo "<h2>Oops!</h2>";
	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Por favor complete el campo nombre sin utilizar espacios ni caracteres especiales.</div></br>";
	$error="1";
	$cont= "1";}



/*validación email*/
if ($ma == "") 
  {
	If ($cont == "")
	{echo "<h2>Oops!</h2>";$cont = "1";}
	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;La dirección de correo electrónico es un campo obligatorio. Por favor,  asegúrese de    escribirla correctamente.</div></br>";
	$error="1";
  }


/*validación dominiomail*/
if ($md == "") 
  {
	If ($cont == "")
	{echo "<h2>Oops!</h2>";$cont = "1";}
	echo "<div class='texto_medio'><img src='images/huella2.gif' alt='huella icono' border='0'/>&#160;&#160;Dirección de correo electrónico incompleta. Verifique este campo antes de enviar el formulario.</div>";
	$error="1";}

if ($error != "") {
	echo "<div class = 'texto_centrado' align = 'center'><a href='contacto.php'></br><h1>Volver al formulario</h1></br></a></div></br>";
	echo "<div class = 'texto_centrado' align = 'center'><img src= 'images/oops.jpg' border='0'/></div>";
}

if ($error == "")
{



error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('PHPMailer_v5.1/class.phpmailer.php');

$mail             = new PHPMailer();


$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "cortometrajes.idm@gmail.com";  // GMAIL username
$mail->Password   = "naranjanevada";            // GMAIL password

$mail->SetFrom('alohasoluciones@gmail.com', $name);


$mail->Subject    = "Consulta buscamascotas.com";


$mail->MsgHTML($body);


$address = "mj_arena@yahoo.com.ar";
$mail->AddAddress($address,"Administrador");


if(!$mail->Send()) {
  echo "<div class='f1'><h2>Ups!</h2></div>";
  echo "<div class='texto_medio'>&#160;&#160;Ha ocurrido el siguiente error:</div><br />";
  echo "Mailer Error: " . $mail->ErrorInfo;
  
} else {
	echo "<div class='f1'><h2>Mensaje enviado</h2></div>";
	echo "<div class='texto_medio'>Gracias por comunicarte con nosotros! Dentro de las próximas 48 hrs. recibirás nuestra respuesta.<br />No olvides verificar la carpeta de spam de tu cuenta de correo!
<br /><br /></div><div align = 'center'><img src='images/perrito.gif' alt='Tres gatos blancos' border='0'/></div><br /><br />";
       }

}
?>

</div><!--Cierra middle-->

<div style="clear: both;"> </div>

</div><!--Cierra contentt-->

<div id="bottom"> </div>

</div><!--Cierra wrap-->

</body>

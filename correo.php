<?php
$nombre=$_GET['nombre'];
$localidad=$_GET['Localidad'];
$email=$_GET['Email'];
$telefono=$_GET['Telefono'];
$mensaje = "<html><head><title>PARTICIPANTE</title></head>
<body><p>NOMBRE Y APELLIDOS: ".$nombre."<br/>LOCALIDAD: ".$localidad."<br/>
TEL&Eacute;FONO: ".$telefono."<br/>E-MAIL: ".$email."<br/></p></body></html>";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: programatic' . "\r\n";   
$destino='programatic.carlosholic19.@gmail.com';
$asunto='PARTICIPANTE 500';
mail($destino, $asunto, $mensaje, $cabeceras);
echo"<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Mensaje de confirmaci&oacute;n</title>
<link href='estilos.css' rel='stylesheet' type='text/css' />
</head>
<body>
 <div>
<p>Tu mensaje ha sido enviado </p>
 <img src='correcto.jpg' title='imagen' alt='imagen' width='338px' height='250px'/>
<a href='index.html'><p>Volver</p></a>
</div>
</body>
</html>"
?>
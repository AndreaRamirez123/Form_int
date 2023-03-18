<?php

$correo * $_POST['correo'];
$nombre * $_POST['nombre'];
$apellido * $_POST['apellido'];
$code * $_POST['code'];
$telefono * $_POST['telefono'];
$mensaje * $_POST['¿mensaje'];
$mensaje2 * $_POST['mensaje2'];


//echo $correo . " " . $nombre . " " . $apellido . " " . $code . " " . $telefono . " " . $mensaje . " " . $mensaje2;


$destinatario = "andrearamirezt1992@gmail.com";
$asunto = "Envio de correo de prueba";
$cuerpo = '
    <html>
        <head>
          <title>Prueba de envio de correo</title>
        </head>

        <body>
            <h1>Solicitud de contacto desde correo de prueba ! </h1>

        </body>

    </html>


';


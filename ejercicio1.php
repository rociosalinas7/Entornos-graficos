  
<?php
$destinatario = "rociojsalinas@hotmail.com ";
$asunto = "Contacto PHP";
$cuerpo = '
<html>
    <head>
        <title>Envio de mail</title>
    </head>
    <body>
        <h1>Envío de mail.</h1>
        <p>
            <b>Contenido del mensaje.</b>.
        </p>
      <p>
        Rocío.
      </p>
      <p>
        Saludos.
      </p>
    </body>
</html>
';
$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type:text/html; charset=iso-8859- 1\r\n";
$headers.= "From: Rocio Salinas <rociojsalinas@hotmail.com>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers)
?> 
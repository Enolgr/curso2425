<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // datos los datos del formulario
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $apellidos = htmlspecialchars(trim($_POST['apellidos']));
        $email = htmlspecialchars(trim($_POST['email']));
        $mensaje = htmlspecialchars(trim($_POST['mensaje']));

          // Configuración del correo
    $to = "egonzalez@campuscamarafp.com"; 
    $subject = "Nuevo mensaje de contacto del Portfolio";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $body = "Nombre: $nombre \n apellidos: $apellidos \nCorreo: $email\n\nMensaje:\n$mensaje";

    // Intentar enviar el correo
    $mailSent = mail($to, $subject, $body, $headers);

    
}

?>





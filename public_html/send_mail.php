<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluir los archivos necesarios de PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Variables del formulario
$name = $_POST['name'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$level = $_POST['level'] ?? '';
$comment = $_POST['comment'] ?? '';



// Validaciósn de campos requeridos
if (empty($name) || empty($lastname) || empty($phone) || empty($email) || empty($level) || empty($comment)) {
    echo 'Todos los campos son obligatorios.';
    exit;
}



// Configuración del mail
$mail = new PHPMailer(true);



try {
    // Configuraci�n del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com'; // Reemplazar con tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'no-reply@institutosanambrosio.com'; // Reemplazar con tu usuario SMTP
    $mail->Password = 'Sender-isa-2024'; // Reemplazar con tu contraseña SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // Puerto SMTP (normalmente 587 para TLS)

    
    
    // Configuración del correo
    $mail->setFrom('no-reply@institutosanambrosio.com', 'Formulario de Contacto');
    $mail->addAddress('contacto@institutosanambrosio.com', 'Fernando');
    
    // Asunto del correo
    $mail->Subject = 'Nuevo mensaje del formulario de contacto';

    // Cuerpo del correo
    $message = "Nombre: $name\nApellido: $lastname\nTeléfono: $phone\nCorreo: $email\nNivel: $level\nComentario: $comment";
    $mail->Body = $message;
    
    //die("host: " . $mail->Host . "user: ".  $mail->Username . "pass: " .$mail->Password);
    //die("mensaje: " . $message);
    // Enviar correo
    $mail->send();
    
    // Redirigir a contacto.php con éxito
    header('Location: contacto.php?success=1');
    exit();

} catch (Exception $e) {
    // Mostrar mensaje de error al usuario
    echo 'Error: El mensaje no pudo ser enviado. Inténtelo nuevamente más tarde.';
    
    // Guardar el error en un archivo log
    $errorLog = fopen('logs/mail_errors.log', 'a');
    fwrite($errorLog, date('Y-m-d H:i:s') . ' - Error: ' . $mail->ErrorInfo . PHP_EOL);
    fclose($errorLog);
}
?>

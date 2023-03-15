<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require '../../Mailer/src/PHPMailer.php';

require '../../Mailer/src/SMTP.php';
require '../../Mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['enviar'])) {


    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $nombre = $_POST['nombre'];

   
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.makib.cl';                 //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

        $mail->Username = 'alejandro@makib.cl';                 // SMTP username
        $mail->Password = 'Alejandro123--123';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;
        //Recipients


        // Destinatarios
        $mail->setFrom('alejandro@makib.cl', 'makib.cl');
        $mail->From = $correo;
        $mail->FromName = $nombre;


        $mail->addAddress('leonel_24_@outlook.com', 'leonel_24_@outlook.com');


      
        $mail->Subject = $asunto;
        $mail->Body    = $mensaje;

        if (!$mail->send()) {
            echo 'Error, mensaje no enviado';
            echo 'Error del mensaje: ' . $mail->ErrorInfo;
        } else {
            echo 'El mensaje se ha enviado correctamente';
        }


    }

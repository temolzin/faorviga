<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\name;

require '../../assets/vendor/phpmailer/src/PHPMailer.php';
require '../../assets/vendor/phpmailer/src/Exception.php';
require '../../assets/vendor/phpmailer/src/SMTP.php';

class SendEmailController
{
    /*Función para envíar el correo al cliente confirmando que se recibió correctamente su mensaje*/
    function sendemailclient($arrayData)
    {
        $email = $arrayData['email'];
        $name = $arrayData['name'];
        $subject = $arrayData['subject'];

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'faorviga.com';                    // Set the SMTP server to send through
            $mail->Port = 465;   
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'info@faorviga.com';                     // SMTP username
            $mail->Password = 'KnS9L(?z';     
            //$mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail                          // SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
                                            // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->CharSet = 'UTF-8';

            //Código para agregar una imagen y después se manda a llamar con <img src=""/>
            $mail->AddEmbeddedImage('../../images/logohorizontal-faorviga.jpg', 'nameimg', 'attachment', 'base64', 'image/png');
            $mail->AddEmbeddedImage('../../images/logo.jpg', 'favicon', 'attachment', 'base64', 'image/png');

            //Recipients
            $mail->setFrom('info@faorviga.com', 'FAORVIGA');
            $mail->addAddress($email);

            $html = '';
            $html .= '<!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="utf-8">
                    <link rel="icon" href="../../images/logo.jpg" type="image/png" />
                    <title>FAORVIGA</title>
                </head>
                <body style="background-color: white; ">
                <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 0">
                            <a href="http://www.faorviga.com">
                                <img src="cid:nameimg" class="img-logo" />
                            </a>
                        </td>
                    </tr>
                
                    <tr>
                        <td style="background-color: #ecf0f1">
                            <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                                <h2 style="color: #1B3355; margin: 0 0 7px">¡Hola, '.$name.'!</h2><br>
                                <p style="margin: 2px; font-size: 15px">
                                    Hemos recibido tu mensaje correctamente <br>
                                    Trataremos de darte una respuesta lo más pronto posible.
                                </p>
                                <br>
                                <p style="margin: 2px; font-size: 15px; text-align: center">
                                    Gracias por tu preferencia
                                </p><br>
                                <div style="width: 100%; text-align: center">
                                    <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #1B3355" href="https://www.faorviga.com">Visitanos</a>
                                </div>
                                <p style="color: #424B5C; font-size: 12px; text-align: center;margin: 30px 0 0"> Copyright &copy; <img width="16px" height="16px" src="cid:favicon"> FAORVIGA 2022</p>
                            </div>
                        </td>
                    </tr>
                </table>
                <!--hasta aquí-->
                
                </body>
            </html>';

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Mensaje Recibido: ' . $subject;
            $mail->Body = $html;

            $mail->send();
            echo 'ok';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    /*Función para envíar el correo a la empresa*/
    function sendemaiself($arrayData)
    {
        $name = $arrayData['name'];
        $email = $arrayData['email'];
        $phone = $arrayData['phone'];
        $subject = $arrayData['subject'];
        $mesagge = $arrayData['message'];

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'faorviga.com';  // Set the SMTP server to send through
            $mail->Port = 465; 
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'info@faorviga.com';                     // SMTP username
            $mail->Password = 'KnS9L(?z';                               // SMTP password
            //$mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->CharSet = 'UTF-8';

            //Código para agregar una imagen y después se manda a llamar con <img src=""/>
            $mail->AddEmbeddedImage('../../images/logohorizontal-faorviga.jpg', 'nameimg', 'attachment', 'base64', 'image/png');
            $mail->AddEmbeddedImage('../../images/logo.jpg', 'favicon', 'attachment', 'base64', 'image/png');
            //Recipients
            $mail->setFrom($email);
            $mail->addAddress('info@faorviga.com');
            $html = "";

            $html .= '<!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="utf-8">
                    <link rel="icon" href="../../images/logo.jpg" type="image/png" />
                    <title>FAORVIGA </title>
                </head>
                <body style="background-color: black ">
                <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
                
                    <tr>
                        <td style="padding: 0">
                            <a href="http://www.faorviga.com">
                                <img style="padding: 0; display: block; alignment: center;" src="cid:emailimg" width="50%">
                            </a>
                        </td>
                    </tr>
                
                    <tr>
                        <td style="background-color: #ecf0f1">
                            <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                                <h2 style="color: #1B3355; margin: 0 0 7px">¡Hola, FAORVIGA!</h2><br>
                                <i style="margin: 2px; font-size: 15px">
                                    Un Cliente ha envíado un correo por medio de la página web <i><a href="https://www.faorviga.com">FAORVIGA</a></i>
                                    <br>
                                    <br>
                                    <br>
                                    Los datos que contiene son:
                                </p>
                                <ul style="font-size: 15px;  margin: 10px 0">
                                    <li>Email: '. $email .'</li>
                                    <li>Teléfono: '. $phone .'</li>
                                    <li>Asunto: '. $subject .'</li>
                                    <li>Mensaje: '. $mesagge .'</li>
                                </ul>
                                <br>
                                <p style="color: #424B5C; font-size: 12px; text-align: center;margin: 30px 0 0"> Copyright &copy; <img src="cid:favicon" width="4%"> FAORVIGA 2022</p>
                            </div>
                        </td>
                    </tr>
                </table>
                <!--hasta aquí-->
                
                </body>
            </html>';

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject . " " . $name;
            $mail->Body = $html;

            $mail->send();
            echo 'ok';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
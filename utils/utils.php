<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require_once("utils/seg.php");
class utils
{
    public static function enviarcorreo($correo, $id)
    {

        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->SMTPDebug = false;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '46907588bce490';                     //SMTP username
            $mail->Password   = 'd5ccf0fd9e4ae7';                               //SMTP password
            $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('restaurancloud@cityrestauran.com');
            $mail->addAddress($correo);     //Add a recipient
          
        
            //Attachments
               $link ='http://3.89.31.175/semestral/' . "/index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("activar") . "&s=" . $id;
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = '<!DOCTYPE html>
            <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
            <head>
                <meta charset="utf-8"> <!-- utf-8 works for most cases 
                <meta name="viewport" content="width=device-width"> 
                <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
                <meta name="x-apple-disable-message-reformatting">  
                <title></title> 
            
                <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
            
      
            <style>
            
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
                background: #f1f1f1;
            }
            
            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
            
            /* What it does: Centers email on Android 4.4 */
            div[style*="margin: 16px 0"] {
                margin: 0 !important;
            }
            
            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }
            
            /* What it does: Fixes webkit padding issue. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }
            
            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode:bicubic;
            }
            
            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
            a {
                text-decoration: none;
            }
            
            /* What it does: A work-around for email clients meddling in triggered links. */
            *[x-apple-data-detectors],  /* iOS */
            .unstyle-auto-detected-links *,
            .aBn {
                border-bottom: 0 !important;
                cursor: default !important;
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
            
            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
            .a6S {
                display: none !important;
                opacity: 0.01 !important;
            }
            
            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
            .im {
                color: inherit !important;
            }
            
           
            img.g-img + div {
                display: none !important;
            }
            
          
            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                u ~ div .email-container {
                    min-width: 320px !important;
                }
            }
            /* iPhone 6, 6S, 7, 8, and X */
            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                u ~ div .email-container {
                    min-width: 375px !important;
                }
            }
            /* iPhone 6+, 7+, and 8+ */
            @media only screen and (min-device-width: 414px) {
                u ~ div .email-container {
                    min-width: 414px !important;
                }
            }
            
            </style>
            
                <!-- CSS Reset : END -->
            
                <!-- Progressive Enhancements : BEGIN -->
            <style>
            
            .primary{
                background: #f3a333;
            }
            
            .bg_white{
                background: #ffffff;
            }
            .bg_light{
                background: #fafafa;
            }
            .bg_black{
                background: #000000;
            }
            .bg_dark{
                background: rgba(0,0,0,.8);
            }
            .email-section{
                padding:2.5em;
            }
            
            /*BUTTON*/
            .btn{
                padding: 10px 15px;
            }
            .btn.btn-primary{
                border-radius: 30px;
                background: #f3a333;
                color: #ffffff;
            }
            
            
            
            h1,h2,h3,h4,h5,h6{
                font-family: "Playfair Display", serif;
                color: #000000;
                margin-top: 0;
            }
            
            body{
                font-family: "Montserrat", sans-serif;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.8;
                color: rgba(0,0,0,.4);
            }
            
            a{
                color: #f3a333;
            }
            
            table{
            }
            /*LOGO*/
            
            .logo h1{
                margin: 0;
            }
            .logo h1 a{
                color: #000;
                font-size: 20px;
                font-weight: 700;
                text-transform: uppercase;
                font-family: "Montserrat", sans-serif;
            }
            
            /*HERO*/
            .hero{
                position: relative;
            }
            .hero img{
            
            }
            .hero .text{
                color: rgba(255,255,255,.8);
            }
            .hero .text h2{
                color: #ffffff;
                font-size: 30px;
                margin-bottom: 0;
            }
            
            
            /*HEADING SECTION*/
            .heading-section{
            }
            .heading-section h2{
                color: #000000;
                font-size: 28px;
                margin-top: 0;
                line-height: 1.4;
            }
            .heading-section .subheading{
                margin-bottom: 20px !important;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(0,0,0,.4);
                position: relative;
            }
            .heading-section .subheading::after{
                position: absolute;
                left: 0;
                right: 0;
                bottom: -10px;
                content: "";
                width: 100%;
                height: 2px;
                background: #f3a333;
                margin: 0 auto;
            }
            
            .heading-section-white{
                color: rgba(255,255,255,.8);
            }
            .heading-section-white h2{
                font-size: 28px;
                font-family: 
                line-height: 1;
                padding-bottom: 0;
            }
            .heading-section-white h2{
                color: #ffffff;
            }
            .heading-section-white .subheading{
                margin-bottom: 0;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(255,255,255,.4);
            }
            
            
            .icon{
                text-align: center;
            }
            .icon img{
            }
            
            
            /*SERVICES*/
            .text-services{
                padding: 10px 10px 0; 
                text-align: center;
            }
            .text-services h3{
                font-size: 20px;
            }
            
            /*BLOG*/
            .text-services .meta{
                text-transform: uppercase;
                font-size: 14px;
            }
            
            /*TESTIMONY*/
            .text-testimony .name{
                margin: 0;
            }
            .text-testimony .position{
                color: rgba(0,0,0,.3);
            
            }
            
            
            /*VIDEO*/
            .img{
                width: 100%;
                height: auto;
                position: relative;
            }
            .img .icon{
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                bottom: 0;
                margin-top: -25px;
            }
            .img .icon a{
                display: block;
                width: 60px;
                position: absolute;
                top: 0;
                left: 50%;
                margin-left: -25px;
            }
            
            
            
            /*COUNTER*/
            .counter-text{
                text-align: center;
            }
            .counter-text .num{
                display: block;
                color: #ffffff;
                font-size: 34px;
                font-weight: 700;
            }
            .counter-text .name{
                display: block;
                color: rgba(255,255,255,.9);
                font-size: 13px;
            }
            
            
            /*FOOTER*/
            
            .footer{
                color: rgba(255,255,255,.5);
            
            }
            .footer .heading{
                color: #ffffff;
                font-size: 20px;
            }
            .footer ul{
                margin: 0;
                padding: 0;
            }
            .footer ul li{
                list-style: none;
                margin-bottom: 10px;
            }
            .footer ul li a{
                color: rgba(255,255,255,1);
            }
            
            
            @media screen and (max-width: 500px) {
            
                .icon{
                    text-align: left;
                }
            
                .text-services{
                    padding-left: 0;
                    padding-right: 20px;
                    text-align: left;
                }
            
            }
            
            </style>
            
            
            </head>
            
            <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
                <center style="width: 100%; background-color: #f1f1f1;">
                <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
                  &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
                </div>
                <div style="max-width: 600px; margin: 0 auto;" class="email-container">
                    <!-- BEGIN BODY -->
                  <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                      <tr>
                      <td class="bg_white logo" style="padding: 1em 2.5em; text-align: center">
                        <h1><a href="http://3.89.31.175/semestral/">restaurant cloud</a></h1>
                      </td>
                      </tr><!-- end tr -->
                            <tr>
                      <td valign="middle" class="hero" style="background-image: url(https://cdn.pixabay.com/photo/2017/02/15/10/39/salad-2068220_960_720.jpg); background-size: cover; height: 400px;">
                        <table>
                            <tr>
                                <td>
                                    <div class="text" style="padding: 0 3em; text-align: center;">
                                        <h2>Confirma tu correo para iniciar session</h2>
                                        
                                        <p><a href="'.$link.'" class="btn btn-primary">Confirmar Correo!</a></p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                      </td>
                      </tr><!-- end tr -->
                      <tr>
                          <td class="bg_white">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                              <tr>
                                <td class="bg_dark email-section" style="text-align:center;">
                                    <div class="heading-section heading-section-white">
                                        <span class="subheading">Welcome</span>
                                      <h2>Bienvenido a RESTAURANT CLOUDr</h2>
                                      <p>Gracias por elegirnos .</p>
                                    </div>
                                </td>
                              </tr><!-- end: tr -->
                                   
                            </table>
            
                          </td>
                        </tr><!-- end:tr -->
                  <!-- 1 Column Text + Button : END -->
                  </table>
                  
            
                </div>
              </center>
            </body>
            </html>';
        
        
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
 
    }

    public static function subir_archivo($archivo_temporal, $archivo, $destino)
    {
        $arreglo = explode(".", $archivo);
        $extension = $arreglo[count($arreglo) - 1];
        $archivo = md5(time() . $archivo) . "." . $extension;
        $destino = $destino . "/" . $archivo;
        if (move_uploaded_file($archivo_temporal, $destino))
            return $destino;
        else
            return null;
    }

    public static function generarqr($url)
    {
        require_once("libs/codigo_qr/qrlib.php");

        //Declaramos una carpeta temporal para guardar la im??genes generadas
        $dir = 'libs/temp/';
        
        //Si no existe la carpeta la creamos
        if (!file_exists($dir))
            mkdir($dir);
        
            //Declaramos la ruta y nombre del archivo a generar
        $filename = $dir.md5($url).'.png';
        
            //Par??metros de Configuraci??n
        
        $tama??o = 10; //Tama??o de Pixel
        $level = 'L'; //Precisi??n Baja
        $framSize = 3; //Tama??o en blanco
        $contenido = $url; //Texto
        
            //Enviamos los par??metros a la Funci??n para generar c??digo QR 
        QRcode::png($contenido, $filename, $level, $tama??o, $framSize); 
        
            //Mostramos la imagen generada
        return $dir.basename($filename);  
    }
}

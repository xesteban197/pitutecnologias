<html>
<?php
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$documento = $_POST['documento'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$telefono = $_POST['telefono']; 
$ciudad =$_POST['ciudad'];
$direccion =$_POST['direccion'];
$torre =$_POST['torre'];
$apto =$_POST['apto'];
$casa =$_POST['casa'];
$repass = $_POST['repass'];

    

    $correoDesde = "pitutecnologias@gmail.com";
    $clave = "kjvowhhevjxkclzd";

    $para = $correo;
    $mensaje = "bienvenido a pitutecnologias"."\n su correo es: $correo"."\n su clave es: $pass";

    

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        
        //https://support.google.com/mail/answer/185833?hl=es-419 POR ACA INGRESAN PARA CREAR LA CLAVE DE LA APP
        $mail->Username   =  $correoDesde;                     // SMTP username
        $mail->Password   =  $clave;                               // SMTP password
  
        //Recipients
        $mail->setFrom( $correoDesde, 'pitutecnologias'); 
        
        //La siguiente linea, se repite N cantidad de veces como destinarios tenga
        $mail->addAddress($para, $nombre.$apellidos);     // Add a recipient
   
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje automatico';
        $mail->Body    =  $mensaje;
        $mail->AltBody =  $mensaje;
        $mail->send();

        echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    
    header("location:registrar_usuario_admin.php?nombre=$nombre&apellidos=$apellidos&documento=$documento&correo=$correo&pass=$pass&telefono=$telefono&ciudad=$ciudad&direccion=$direccion&torre=$torre&apto=$apto&casa=$casa&repass=$repass");
    
?>
</html>
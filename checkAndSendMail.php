<?php    
    require_once("PHPMailer/class.phpmailer.php");
    
    $email = $_POST['email'];
    $message = $_POST['mensaje'];
    $nombre = $_POST['nombre'];

    $mail = new PHPMailer();

    $mail->IsSMTP();
    
    $mail->Host = "smtp.zoho.com";
    $mail->SMTPAuth = true;

    $mail->Username = "noreply@seguplast.com.ar";  // SMTP username
    $mail->Password = "Hola*147"; // SMTP password

    $mail->From = "noreply@seguplast.com.ar";
    $mail->FromName = "Consulta Web";

    $mail->AddAddress("contacto@seguplast.com.ar","Contacto");
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->WordWrap = 50;

    $mail->IsHTML(true);

    $mail->Subject = $_POST['asunto'];
    
    $mensaje = "Nombre: ".$nombre."<br>Responder a: ".$email."<br><hr>".$message;

    $mail->Body    = $mensaje;
    $mail->AltBody = $mensaje;

if(!$mail->Send()){
    echo "Message could not be sent.";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
}else{
    echo "BIEN";
}

?>
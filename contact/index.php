<?php

$msg = '';

if (isset($_POST['myName']) && empty($_POST['honeypot'])) {
    
    $myName = $_POST['myName'];
    $role = $_POST['role'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    
    $mail->isSMTP();
    $mail->Host = 'mail.mandyweston.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "phpmailer@mandyweston.webhostingforstudents.com";
    $mail->Password = "Morty'sWorld503";

    
    $mail->setFrom('phpmailer@mandyweston.webhostingforstudents.com', 'Mandy Weston');
    
    $mail->addAddress('mandy.weston1@pcc.edu', 'Mandy Weston');
    
    $mail->addReplyTo($myEmail, $myName);
    $mail->Subject = 'PHPMailer contact form';
    
    $mail->isHTML(true);
    
    $mail->Body = <<<EOT
Email: $myEmail<br>
Name: $myName<br>
Role: $role<br>
Message: $myQuestion
EOT;
        
        if (!$mail->send()) {
            
            include '../error.html.php' . $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        } 
    } else {
        include 'contact.html.php';
    }

?>

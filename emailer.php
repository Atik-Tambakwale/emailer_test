<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/PHPMailer.php';
    require './PHPMailer-master/src/SMTP.php';

    // $mail = new PHPMailer();
    // $mail->IsSMTP();
    // $mail->Mailer = "smtp";

    // $mail->SMTPDebug  = 1;
    // $mail->SMTPAuth   = TRUE;
    // $mail->SMTPSecure = "ssl";
    // $mail->SMTPKeepAlive = true;
    // $mail->Port       = 465;
    // $mail->Host       = "ssl://smtp.gmail.com";
    // $mail->Username   = "support@dailygate.in";
    // $mail->Password   = 'DailyGate123#';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug  = 2;
    $mail->SMTPAuth='ssl';
    $mail->SMPTSecure=true;
    $mail->Host='smtp.gmail.com';
    $mail->Port=465;
    $mail->Username = 'support@dailygate.in';
    $mail->Password = 'DailyGate123#';
    // $mail->SMTPSecure = 'tsl';

    $mail->IsHTML(true);
    $mail->AddAddress("atiktambakwale@gmail.com", "recipient-name");
    $mail->SetFrom("support@dailygate.in", "from-name");
    // $mail->AddReplyTo("support@dailygate.in", "reply-to-name");
    // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

    $mail->MsgHTML($content);
    // $mail->Send();
    if(!$mail->Send()) {
      echo "Error while sending Email.";
      // echo "<code>".var_dump($mail)."</code>";
    } else {
      echo "Email sent successfully";
    }
?>

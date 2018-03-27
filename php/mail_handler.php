<?php

if (isset($_POST['submit'])) {
    $to = "dominik.barjaktaric@hotmail.com";
    $from = $_POST['mail'];
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " je poslao e-mail preko servisa na Dog_Friendly web aplikaciji:". $_POST['content'] . $from;
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "To: $to <$to>\r\n";
    $headers .= "From: $from <$from>\r\n";
    if (mail($to,$subject,$message,$headers) == true) {echo 'index.php';}
    }

?>
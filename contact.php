<?php
    $name = $_POST['name'];
    $visitorEmail = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'itsarnav@gmail.com';
    $email_message = 'message';
    $email_subject = "New Website Inquiry";
    $email_body = "Name: $name.\n".
                  "Email: $visitorEmail.\n".
                  "$message.\n";

    $to = "arnavakarte@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitorEmail\r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
<?php

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $subject = addslashes($_POST['subject']);
    $message = addslashes($_POST['message']);

    $to = "example@example.com";
    $title = "Contact - MyWebsite";

    $body = "Name: ".$name."\n"."E-mail: ".$email."\n"."Subject: ".$subject."\n"."Message: ".$message;

    $header = "From: example@example.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$title,$body,$header)){
        echo("Email successfully sent!");
    }else{
        echo("Error sending the email!");
    }

?>
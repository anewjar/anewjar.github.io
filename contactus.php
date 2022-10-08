<?php
    
    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $email_from = 'anuja.rajapakssa@gmail.com';
    
    $email_subject - "New form submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n.
                       "User Message: $message.\n";
                        
    $to = "anujarajapakssa@hotmail.it";
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");
    
    
    
   
?>

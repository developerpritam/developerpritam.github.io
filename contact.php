<?php
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $message_$_POST['message'];

// $email_from = 'pritambag426@gmail.com';

// $email_subject = 'hii my name is pritam bag';

// $email_body = "User Name: $name.\n".

//                 "User email: $visitor_email.\n".

//                     "User Message: $message.\n".

//       $to = "pritambag321"    


$to = "pritambag426@gmail.com";
$subject = "response from website";
$message = "hi i am a pritam bag";
$headers = "From: pritambag321@gmail.com";


if(mail ($to, $subject, $message, $headers)){
    echo "mail send successfully";
    else{
        echo "can not send mail";
    }
}
?>
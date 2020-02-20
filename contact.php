<?php
$name = $_POST['username'];
$visitor_email = $_POST['email'];
$message_$_POST['message'];

// check input fields  

if (empty($name) || empty($email) || empty($message))

{
    echo "please fill all the fields";
}
else
{
    mail("pritambag426@gmail.com", "pritam message", $message , "from: $name < $email>");


    echo "<script type='text/javascript'>alert('your message send successfully')</script>";
}

?>


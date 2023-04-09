<?php

try{

    // input variables
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    // exfiltrate inputs

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $emailFrom = htmlspecialchars($emailFrom, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    // local variables
    $to = "matheusfontanettimartins@gmail.com"
    $subject = "Email do site pessoal: " . $name;

    // message content
    $finalMessage = "<h3>Nome: " . $name . "</h1>";
    $finalMessage .= "<h3>Email: " . $emailFrom . "</h3>";
    $finalMessage .= "<h3>Message:</h3><p>" . $message . "</p>";

    // headers
    $header = "From:matheusfontanettimartins2@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail ($to,$subject,$finalMessage,$header);
         
    if( $retval == true ) {
    echo "Message sent successfully...";
    } else {
    echo "Message could not be sent...";
    }

} catch(Exception $e) {
    echo "unable to sand email.";
}

?>
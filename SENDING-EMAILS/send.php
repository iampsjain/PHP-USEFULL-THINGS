<?php


	// send e-mail to ...
$to=$email;



// Your subject
$subject="Here is your subject";

// From using this type of headers your mail will not go in spam 
$header  ="from: abc.com <notifications@abc.com>";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";
$header .= "Reply-To: no-reply@abc.com\r\n";
$header .= "Return-Path: no-reply@abc.com\r\n";
$header .= "CC: iamps@abc.com\r\n";
$header .= "BCC: ceo@abc.com\r\n";
// Your message
$message ='here is your message';
//you can add html code in your message for designing
$message.='<html>here is your html content</html>';


$sentmail=mail($to,$subject,$message,$header);

if($sentmail ){
echo'Message has been send successfully';
}

 else {
echo'error while sending msg';
}



?>
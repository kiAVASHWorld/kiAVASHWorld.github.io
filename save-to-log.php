<?php
$to = "xyz@somedomain.com";
$subject = "This is subject";
  
$message = $_POST['message'];
$message .= "<h1>This is headline.</h1>";
  
$header = "From:abc@somedomain.com \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
  
$retval = mail ($to,$subject,$message,$header);
  
if( $retval == true ) {
     echo "Message sent successfully...";
}else {
     echo "Message could not be sent...";
}
//echo "<h2>"+$_POST['message']+"</h2>";
?>
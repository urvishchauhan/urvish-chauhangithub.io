<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "urvishchauhan14@gmail.com"; 
$Subject = "Give a message to the website owner";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Number = Trim(stripslashes($_POST['tel']));
$Message = Trim(stripslashes($_POST['description'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "Number: ";
$Body .= $Number;
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "Success";
}
else{
  echo "Error";
}

?>
<center><strong>
<a href="Home.html" class="style9"><img src="img/Thank you!.jpg" /></a><br />
<a href="index.html">We will get back to you soon...Back To The Homepage</a></strong>
</center>

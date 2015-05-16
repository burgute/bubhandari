<?php

$EmailFrom = "atulyaaa.bhalerao@gmail.com";
$EmailTo = "atulyaaa.bhalerao@gmail.com";
$Subject = "Get in Touch Form";
$name = Trim(stripslashes($_POST['name'])); 
$contact = Trim(stripslashes($_POST['contact'])); 
$email = Trim(stripslashes($_POST['email'])); 
$projects = Trim(stripslashes($_POST['projects'])); 
$message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Contact: ";
$Body .= $contact;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Projects: ";
$Body .= $projects;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
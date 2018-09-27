<?php

$EmailFrom = $_POST["email"];
$EmailTo = "adrienhenry.fp@gmail.com";
$Subject = "Contact CV en ligne";
$Nom = $_POST["nom"];
$Email = $_POST["email"];
$Message = $_POST["message"];

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// email body text
$Body = "";
$Body .= "Nom: ";
$Body .= $Nom;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  echo "Votre message à bien été envoyé.";
}
else{
  echo "Une erreur s'est produite à l'envoi de votre message.";
}
?>

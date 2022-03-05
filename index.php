Imprime: 
<?php
$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/json/');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$json = json_decode($phoneList, true);
var_dump($json);


?>

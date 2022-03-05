<?php

$ipaddress = getenv("REMOTE_ADDR") ;
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/json/'. $ipaddress .'?fields=country');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$list = curl_exec($cURLConnection);
curl_close($cURLConnection);

$json = json_decode($list, true);
$country = $json['country'];

if($country == "Costa Rica")
    echo '<style>#costarica { display:block;}</style>';
}elseif($country == "Honduras"){
    echo '<style>#honduras { display:block;}</style>';
}elseif($country == "Guatemala"){
    echo '<style>#guatemala { display:block;}</style>';
}elseif($country == "Nicaragua"){
    echo '<style>#nicaragua { display:block;}</style>';
}else{
    echo '<style>#costarica { display:block;}</style>';
};

/*
echo "
<!DOCTYPE html>
<html>
<body>

". $ipaddress ."

<script>

window.onload = function() {
    country = '". $country ."';
    switch(country) {
        case 'Chile':
            console.log('Es Chile Baby');
          break;
        case 'Costa Rica':
          console.log('Es Costa Rica Baby');
          break;
        default:
            console.log('Es lo que sea Baby');
        };
}
</script>
</body>
</html> 


" */
?>

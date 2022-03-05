<?php
function show_banner_country() {
    $ipaddress = getenv("REMOTE_ADDR") ;
    $cURLConnection = curl_init();
    
    curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/json/'. $ipaddress .'?fields=country');
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    
    $list = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    
    $json = json_decode($list, true);
    $country = $json['country'];
    
    if($country == "Costa Rica"){
        $output = '<style>#costarica { display:block !important;}</style>';
    }elseif($country == "Honduras"){
        $output =  '<style>#honduras { display:block !important;}</style>';
    }elseif($country == "Guatemala"){
        $output =  '<style>#guatemala { display:block !important;}</style>';
    }elseif($country == "Nicaragua"){
        $output =  '<style>#nicaragua { display:block !important;}</style>';
    }else{
        $output =  '<style>#costarica { display:block !important;}</style>';
    };
        return $output;
    } 
    
add_shortcode( 'print-banner', 'show_banner_country' );
?>
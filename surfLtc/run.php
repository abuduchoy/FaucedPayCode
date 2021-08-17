<?php

include('lib.php');

function visit($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
//curl_setopt($ch, CURLOPT_ENCODING, 'br');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function TipePost($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
// CURLOPT_ENCODING
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}


$cfg = visit($url, $ua);

// $reConfig = configSurf($ua, $rURL, $captcha);

print_r($cfg);
/**
$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "{$two[0]}";

$x = explode("Account Balance<br><b>", $cfg);
$y = explode("</b>", $x[1]);
$Bal = "{$y[0]}";

$link = "https://adltc.cc/earndata.php";
$data = "adsids={$id}";
$reg = TipePost($link, $ua, $data);

echo "√ Success visit ads LTC || Update Balance : {$Bal}\n";
**/
//while(true){
  
//}

?>

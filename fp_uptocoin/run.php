<?php

include('lib.php');
include('prop.php');

system('clear');
sleep(2);

echo$hijau2."Mencoba inject data dari file cfg.php! \n\n";

sleep(3);
system('clear');

echo$hijau2."Mohon tunggu. ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu. . ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu. . . ";
sleep(1);

system('clear');

$n = 0;
$belance = 0;

echo$hijau2."System dijalankan \n";
sleep(1);

while(true){
$header = array();
$header[] = "user-agent:".$user;
$header[] = "cookie:".$cookie;
$header[] = "url:".$webtarget;
	$res = getCoin($webtarget, $header);
/**
    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $webtarget);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, $tmr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	**/
	$n = $n + 1;
	print_r($result);
	$has1 = explode('<div class="alert alert-success">', $result)[1];
    	$hasil1 = explode('satoshi was sent to', $has1)[0];
	//print_r($hasil1);
	$belance = $belance + $hasil1;
	echo$biru."\n[".$n."] Claim : {$kuning1}{$hasil1}{$hijau2} Satoshi{$ungu2}. Belance :{$kuning1}{$belance}{$ungu2} Satoshi{$merah2}\n";

for($i = 60; $i > -1; $i--){
  echo $merah2."[ ";
  echo "  \r{$i}] {$ungu2}wait ";
  sleep(1);
}
//sleep($tmr);
}
?>

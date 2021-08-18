<?php

//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$nc = "\e[0m";
$resred="\033[101m\033[1;37m";
$resgreen="\033[102m\033[1;37m";
$resyellow="\033[103m\033[1;30m";
$respurple1="\033[104m\033[1;37m";
$respurple2="\033[105m\033[1;37m";
$resterkois="\033[106m\033[1;31m";
$resputih="\033[107m\033[1;31m";
$hitam="\033[0;30m";

system('clear');
sleep(2);
echo$hijau2."Mohon tunggu 3 ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu 2 ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu 1 ";
sleep(1);
system('clear');
sleep(1);

// system(5);
echo$hijau2."Mencoba inject data dari file cfg.php! \n\n";

include('cfg.php');

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
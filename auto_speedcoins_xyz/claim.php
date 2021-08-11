<?php 

$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

system('clear');
echo "$lblue2 User-Agent : $putih2"; $ua=trim(fgets(STDIN));

system('clear');
echo "$lblue2 Cookie 1: $putih2"; $cook1=trim(fgets(STDIN));

system('clear');
echo "$lblue2 Cookie 2: $putih2"; $cook2=trim(fgets(STDIN));

system('clear');
echo "$lblue2 Cookie 3: $putih2"; $cook3=trim(fgets(STDIN));


function get($url,$header){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip deflate');
	$result = curl_exec($ch);
	curl_close($ch);

	return $result;
}

function post($url,$header,$data){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip deflate');
	$result = curl_exec($ch);
	curl_close($ch);

	return $result;
}

function dashboard($ua,$cook1,$cook2,$cook3) {
	$header = [
		'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/ signed-exchange;v=b3;q=0.',
		'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
		'cookie: '.$cook1,
		'cookie: '.$cook2,
		'cookie: '.$cook3,
		'referer: https://auto.speedcoins.xyz/dashboard',
		'user-agent: '.$ua
	];
	$url = 'https://auto.speedcoins.xyz/dashboard';
	
	return get($url,$header);
}

function claim($ua,$cook1,$cook2,$cook3) {
	$header = [
		'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/ signed-exchange;v=b3;q=0.',
		'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
		'cookie: '.$cook1,
		'cookie: '.$cook2,
		'cookie: '.$cook3,
		'referer: https://auto.speedcoins.xyz/dashboard',
		'user-agent: '.$ua
	];
	$url = 'https://auto.speedcoins.xyz/auto';

	return get($url,$header);
}

function verify($ua,$cook1,$cook2,$cook3,$token) {
	$header = [
		'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
		'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
		'content-type: application/x-www-form-urlencoded',
		'cookie: '.$cook1,
		'cookie: '.$cook2,
		'cookie: '.$cook3,
		'origin: https://auto.speedcoins.xyz',
		'referer: https://auto.speedcoins.xyz/auto',
		'user-agent: '.$ua
	];
	$url = 'https://auto.speedcoins.xyz/auto/verify';
	$data = 'token='.$token;

	return post($url,$header,$data);
}

system('clear');

$green2.system("toilet --width 28 -f pagga -F border  'Bundle Channel'");

echo "$putih2 =================================================================
 |$green2 #### #  # #### # #### #### ####$green2 SERVER$green2 ONLINE$putih2 |
 |$green2 #    #  # #    # #  # #  # #  #                              $putih2 |
 |$green2 #### #  # # ## # #  # #  # #  #                              $putih2 |
 |$green2    # #  # #  # # #  # #  # #  #                              $putih2 |
 |$green2 #### #### #### # #### #  # ####$putih2  SCRIPT :$red2 V1           $putih2 |
 =================================================================\n";
echo $putih2." TANGGAL ".$green2.date("d.m.Y ").$putih2."  JAM ".$green2.date("H:i:s");
echo "\n ===============================\033[1;31m404\033[1;32m===============================";
echo "
$putih2 •Channel YT     :$green2 Bundle Channel

$putih2 =================================================================
$red2 •SCRIPT NOT FOR SALE •SCRIPT GRATIS GUNAKAN DENGAN BIJAK YA CUK
 •SEGALA RESIKO DI TANGGUNG PENGGUNA\n";
echo $blue2." •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";



$dashboard = dashboard($ua,$cook1,$cook2,$cook3);

$balance = explode('<h5 class="font-size-15">Total earned</h5>
                  <p class="text-muted mb-0">', $dashboard)[1];

/**
<p class="text-muted font-weight-medium">Balance</p>
                <h4 class="mb-0">

<h5 class="font-size-15">Total earned</h5>
                  <p class="text-muted mb-0">
******
</h4>

USD</p>
**/

$balance = explode('USD</p>', $balance)[0];

echo "\t$yellow2 Balance : $putih2".$balance." $yellow2 coins\n\n\n";

while (true) {

	$claim = claim($ua,$cook1,$cook2,$cook3);
	
	$token = explode('<input type="hidden" name="token" value="', $claim)[1];
	$token = explode('">', $token)[0];
	
    $timeM = explode('Please wait <b id="minute">',$claim)[1];
    $timeM = explode('</b>:<b',$timeM)[0];
    $timeM = intval($timeM);
    $timeM = $timeM * 60;
    
    $timeS = explode('Please wait <b id="minute">'.$timeM.'</b>:<b id="second">',$claim)[1];
    $timeS = explode('</b>',$timeS)[0];
    $timeS = intval($timeS);
    
    $i = $timeM + $timeS;
    
	for ($i; $i>=0; $i--) {
		echo "$putih2\r".$i."$red2 Wait";
		sleep(1);
	}

	$verify = verify($ua,$cook1,$cook2,$cook3,$token);
	$message = explode("Swal.fire('Good job!', '", $verify)[1];
	$message = explode(" USD has been added to your balance", $message)[0];

	echo "\n$yellow2 Message : $green2".$message;
}

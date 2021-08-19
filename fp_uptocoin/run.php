<?php

include('lib.php');
include('prop.php');

system('clear');
sleep(2);

echo$hijau2."> Mencoba lakukan pengecekan\n"; sleep(1);
echo$hijau2."> Mencoba inject data dari file cfg.php! \n\n";

sleep(3);
system('clear');

$n = 0;
$belance = 0;

echo$hijau2."> System dijalankan \n";
sleep(1);

while(true){
	// menentukan jumlah perulangan
	$n = $n + 1;
	//#######[  Sesi 1  ]##########
	// memanggil fungsi
	$h = createHeader($user, $cookie, $webtarget);
	$res = getCoin($webtarget, $h);
	
	if($res != NULL) {
		$mess = getMessage($res);
		$belance = $belance + $mess;
		echo$biru."\n[".$n."] Claim : {$kuning1}{$mess}{$hijau2} Satoshi{$ungu2}. Belance :{$kuning1}{$belance}{$ungu2} Satoshi{$merah2}\n";

		for($i = 61; $i > -1; $i--){
			echo $merah2."[ ";
			echo "  \r{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for
	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	
	//#######[  Sesi 2  ]##########
	// memanggil fungsi
	if($user_x != "" && $cookie_1 != "" && $url_reff_1 != ""){
	
	$h1 = createHeader($user_x, $cookie_1, $url_reff_1);
	$res1 = getCoin($url_reff_1, $h1);
	
	if($res1 != NULL) {
		$mess1 = getMessage($res1);
		// $belance = $belance + $mess1;
		echo$biru."\n[".$n."] Claim : {$kuning1}{$mess1}{$hijau2} Satoshi{$ungu2}.\n";

		for($i = 61; $i > -1; $i--){
			echo $merah2."[ ";
			echo "  \r{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for
	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	} // end if
		else {
	echo "Periksa user_agent, cookie dan url ada yang kosong !!\n";
	} // end else
} // end while
?>

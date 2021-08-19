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
			echo $merah2." \r";
			echo "[{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for
	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // end else if
	
	//#######[  Sesi Reff  ]##########
	for($i = 1; $i <= count($reff); $i++){
	  if($user_x != "" && $reff[$i]['key'] != ""){
	    // membuat header
	    $h[$i] = createHeader($user_x, $cookie, $urlReff[$i]);
	    
	    // exekusi
	    $res[$i] = getCoin($urlReff[$i],$h[$i]);
	    
	    // pengecekan hasil 
	    if($res[$i] != NULL) {
	      $mess[$i] = getMessage($res[$i]);
        $xreff[$i] = getReff($res[$i]);
        $belance = $belance + $xreff[$i];
	
		echo "\nTake Reff {$xreff[$i]} Satoshi\n";

		for($j = 5; $j > -1; $j--){
			echo $merah2." \r";
			echo "[{$j}] {$ungu2}wait ";
			sleep(1);
		} // end for

	} // end if
    else {
      echo "Situs tidak dapat dijangkau\n";
    } // end else
	  } // end if
      else {
        echo "Periksa user_agent, cookie dan url ada yang kosong !!\n";
      } // end else
	} // enf else if
	// memanggil fungsi
	if($user_x != "" && $key_reff_1 != ""){
	
	$h1 = createHeader($user_x, $cookie_1, $url_reff_1);
	$res1 = getCoin($url_reff_1, $h1);
	// print_r($res1);
	if($res1 != NULL) {
	  $mess1 = getMessage($res1);
    $reff1 = getReff($res1);
    $belance = $belance + $reff1;
	
		echo "\nTake Reff {$reff1} Satoshi\n";

		for($i = 5; $i > -1; $i--){
			echo $merah2." \r";
			echo "[{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for

	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	} // end if
		else {
	echo "Periksa user_agent, cookie dan url ada yang kosong !!\n";
	} // end else

//#######[  Sesi 3 ]##########
	// memanggil fungsi
	if($user_x != "" && $key_reff_2 != ""){
	
	$h2 = createHeader($user_x, $cookie_1, $url_reff_2);
	$res2 = getCoin($url_reff_2, $h2);
	// print_r($res1);
	if($res2 != NULL) {
		$mess1 = getMessage($res2);
		// $belance = $belance + $mess1;
		// Referral</h2><div class="alert alert-success">27 satoshi was sent to
   $reff2 = getReff($res2);
   $belance = $belance + $reff2;
		// echo$biru."\n[".$n."] Claim : {$kuning1}{$mess1}{$hijau2} Satoshi{$ungu2}";
		echo "\nTake Reff {$reff2} Satoshi\n";

		for($i = 5; $i > -1; $i--){
			echo $merah2." \r";
			echo "[{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for

	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	} // end if
		else {
	echo "Periksa user_agent, cookie dan url ada yang kosong !!\n";
	} // end else

//#######[  Sesi 4 ]##########
	// memanggil fungsi
	if($user_x != "" && $key_reff_3 != ""){
	
	$h3 = createHeader($user_x, $cookie_1, $url_reff_3);
	$res3 = getCoin($url_reff_3, $h3);
	// print_r($res1);
	if($res3 != NULL) {
		$mess3 = getMessage($res3);
		// $belance = $belance + $mess1;
		// Referral</h2><div class="alert alert-success">27 satoshi was sent to
   $reff3 = getReff($res3);
   $belance = $belance + $reff3;
		// echo$biru."\n[".$n."] Claim : {$kuning1}{$mess1}{$hijau2} Satoshi{$ungu2}";
		echo "\nTake Reff {$reff3} Satoshi\n";

		for($i = 5; $i > -1; $i--){
			echo $merah2." \r";
			echo "[{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for

	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	} // end if
		else {
	echo "Periksa user_agent, cookie dan url ada yang kosong !!\n";
	} // end else

//#######[  Sesi 5 ]##########
	// memanggil fungsi
	if($user_x != "" && $key_reff_4 != ""){
	
	$h4 = createHeader($user_x, $cookie_1, $url_reff_4);
	$res4 = getCoin($url_reff_4, $h4);
	// print_r($res1);
	if($res4 != NULL) {
		$mess4 = getMessage($res4);
		// $belance = $belance + $mess1;
		// Referral</h2><div class="alert alert-success">27 satoshi was sent to
   $reff4 = getReff($res4);
   $belance = $belance + $reff4;
		// echo$biru."\n[".$n."] Claim : {$kuning1}{$mess1}{$hijau2} Satoshi{$ungu2}";
		echo "\nTake Reff {$reff4} Satoshi\n";

		for($i = 5; $i > -1; $i--){
			echo $merah2." \r";
			echo "[{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for

	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	} // end if
		else {
	echo "Periksa user_agent, cookie dan url ada yang kosong !!\n";
	} // end else
} // end whil
?>

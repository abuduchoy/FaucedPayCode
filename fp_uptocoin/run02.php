<?php
include('lib3.php');
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
} // end while
?>

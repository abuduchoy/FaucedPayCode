<?php
// perhatikan include

include('lib05.php');
include('prop05.php');

system('clear');
sleep(2);

echo$hijau2."🔸 Mencoba lakukan pengecekan\n"; sleep(1);
echo$hijau2."🔸 Mencoba inject data dari file cfg.php! \n\n";

sleep(3);
system('clear');

$n = 0;
$belance = 0;

echo$hijau2."🔸 System dijalankan \n";
sleep(1);

while(true){
  system('clear');
	// menentukan jumlah perulangan
	$n = $n + 1;
	$count= count($reff);
	echo "\n🔸From ../uptocoin_v2/run05.php";
	echo "\n🔸Balance : ".$belance;
	echo "\n🔸Loop    : {$n} X";
	echo "\n🔸Referer : {$count}\n\n"; 
for($t = 10; $t > -1; $t--){
			echo $merah2." \r";
			if ($t > 0) {
			echo "[{$t}] {$ungu2}wait ";
			sleep(1); 
			}
			else{
			  echo "{$ungu2}[🚀] Gooo"; 
			}
		} // end for
	//#######[  Sesi Reff  ]##########
	for($i = 0; $i < count($reff); $i++){
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
	
		echo "\n{$putih2}[{$i}] Take Reff {$hijau2}{$xreff[$i]}{$putih2} 🐶toshi\n";

		for($j = 5; $j > -1; $j--){
			echo $merah2." \r";
			if($j > 0){
			  echo "[{$j}] {$ungu2}wait ";
			sleep(1);
			} else {
			  echo "[🔻] {$kuning1}Done";
			}
		} // end for

	} // end if
    else {
      echo "\n {$merah2}☢️ Situs tidak dapat dijangkau\n";
      sleep(1);
      echo "\n {$hijau2}🚧🚧🚧 Coba Lagi\n";
      sleep(5);
      $try[$i] = getTry($urlReff[$i],$h[$i]);
      echo $abu."\nHASIL :{$putih2}".$try[$i];
      sleep(2);
    } // end else
	  } // end if
      else {
        echo "\nPeriksa user_agent, cookie dan url ada yang kosong !!\n";
      } // end else
	} // enf else if
} // end while
?>

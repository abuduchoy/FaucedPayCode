<?php
// cd storage/downloads/code/uptocoin
// abuduchoy.github.io/FaucedPayCode
//user-agent
$user = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36";
$user_lite = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";
$user_kiwi = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.39 Mobile Safari/537.36";
$user_x = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";

//cookie
$cookie = "HstCfa4361570=1628652464174; HstCmu4361570=1628652464174; HstCnv4361570=1; HstCns4361570=1; c_ref_4361570=https%3A%2F%2Fwww.google.com%2F; __dtsu=6D0016284374359B319EBDFB636B2B47; _cc_id=98feee562799aef888c0e80e0f075c77; __gads=ID=6c9f72ad395585cb-22fca495c3ca00c2:T=1628652490:RT=1628652490:S=ALNI_MblnMycgNGpDI0Ne6TBJ5dLkF1ihA; HstCla4361570=1628652496733; HstPn4361570=2; HstPt4361570=2";

// cookie referal
$cookie_1 = "HstCfa4361570=1628652464174; HstCmu4361570=1628652464174; HstCnv4361570=1; HstCns4361570=1; c_ref_4361570=https%3A%2F%2Fwww.google.com%2F; __dtsu=6D0016284374359B319EBDFB636B2B47; _cc_id=98feee562799aef888c0e80e0f075c77; __gads=ID=6c9f72ad395585cb-22fca495c3ca00c2:T=1628652490:RT=1628652490:S=ALNI_MblnMycgNGpDI0Ne6TBJ5dLkF1ihA; HstCla4361570=1628652496733; HstPn4361570=2; HstPt4361570=2";

$cookie_2 = "";

//timer-claim-dalam-satuan-detik
$tmr = "60";

// walet
// http://uptocoin.tk/fp/?r=TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF&rc=DOGE
$w = "TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF";
$key = "66c0b0a94cad9b6b4ce0923f31e745b2";

// http://uptocoin.tk/fp/faucet.php?r=TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF&rc=DOGE&address=DF4fuDcUTakiiGUdt9xq5T7mbGv8CviRPq&currency=DOGE&key=0b34775ba375b79627051d521d1f315f

$reff = [
  1 => [
 'key'=> "0b34775ba375b79627051d521d1f315f",
 'w'=> "DF4fuDcUTakiiGUdt9xq5T7mbGv8CviRPq"
],
  2 => [
 'key'=> "409b29502a24e3d071b24baf0299973a",
 'w'=> "DGg978VFUeYgfWR4AT9kRpwasTsZJ1Yb39"
],
  3 => [
 'key'=> "dea4c7f0e64b8b5361f66e3b44d23366",
 'w'=> "DK241G5Lim45ujMq9FBCFYvQhYr48mVDq9"
],
  4 => [
 'key'=> "f7d20d0a3191f7ea371fc70db19c6b84",
 'w'=> "DGGkjUJtPT7si32iHrqXJpbhV6CheGmQeA"
]
  ];

//url-target-claim
$webtarget = "http://uptocoin.tk/fp/faucet.php?address={$w}&currency=DOGE&key={$key}";

// URL 
for($i = 0; $i = count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}
// url ref
$url_reff_1 = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$w_reff_1}&currency=DOGE&key={$key_reff_1}";
$url_reff_2 = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$w_reff_2}&currency=DOGE&key={$key_reff_2}";
$url_reff_3 = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$w_reff_3}&currency=DOGE&key={$key_reff_3}";

$url_reff_4 = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$w_reff_4}&currency=DOGE&key={$key_reff_4}";

function cek($var){
  if($var == "") {
    $q = "Kosong";
  } else {
    $q = "Siap";
  }
} // end funct

?>

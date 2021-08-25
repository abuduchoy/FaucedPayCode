<?php

//user-agent
$user = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36";
$user_lite = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";
$user_kiwi = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.39 Mobile Safari/537.36";
$user_x = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";

//cookie
$cookie = "HstCfa4361570=1628652464174; HstCmu4361570=1628652464174; HstCnv4361570=1; HstCns4361570=1; c_ref_4361570=https%3A%2F%2Fwww.google.com%2F; __dtsu=6D0016284374359B319EBDFB636B2B47; _cc_id=98feee562799aef888c0e80e0f075c77; __gads=ID=6c9f72ad395585cb-22fca495c3ca00c2:T=1628652490:RT=1628652490:S=ALNI_MblnMycgNGpDI0Ne6TBJ5dLkF1ihA; HstCla4361570=1628652496733; HstPn4361570=2; HstPt4361570=2";

//timer-claim-dalam-satuan-detik
$tmr = "60";

// Master
$w = "TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF";
$key = "66c0b0a94cad9b6b4ce0923f31e745b2";

$webtarget = "http://uptocoin.tk/fp/faucet.php?address={$w}&currency=DOGE&key={$key}";

$reff = [
0 => [
'key'=> "",
 'w'=> ""
],
1 => [
'key'=> "",
 'w'=> ""
],
2 => [
'key'=> "",
 'w'=> ""
],
3 => [
'key'=> "",
 'w'=> ""
],
4 => [
'key'=> "",
 'w'=> ""
],
5 => [
'key'=> "",
 'w'=> ""
],
6 => [
'key'=> "",
 'w'=> ""
],
7 => [
'key'=> "",
 'w'=> ""
],
8 => [
'key'=> "",
 'w'=> ""
],
9 => [
'key'=> "",
 'w'=> ""
],
10 => [
'key'=> "",
 'w'=> ""
],
11 => [
'key'=> "",
 'w'=> ""
],
12 => [
'key'=> "",
 'w'=> ""
],
13 => [
'key'=> "",
 'w'=> ""
],
14 => [
'key'=> "",
 'w'=> ""
],
15 => [
'key'=> "",
 'w'=> ""
],
16 => [
'key'=> "",
 'w'=> ""
],
17 => [
'key'=> "",
 'w'=> ""
],
18 => [
'key'=> "",
 'w'=> ""
],
19 => [
'key'=> "",
 'w'=> ""
],
20 => [
'key'=> "",
 'w'=> ""
],
21 => [
'key'=> "",
 'w'=> ""
],
22 => [
'key'=> "",
 'w'=> ""
],
23 => [
'key'=> "",
 'w'=> ""
],
24 => [
'key'=> "",
 'w'=> ""
],
25 => [
'key'=> "",
 'w'=> ""
]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}
?>

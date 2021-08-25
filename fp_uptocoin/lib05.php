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
 'w'=> "D5ZZBtGp6QT3HRPaay2YJErZoR2msJMqD9"
],
1 => [
'key'=> "",
 'w'=> "DRXC82FPZZt3MoXxsZ1MwM3af4J1UprPsx"
],
2 => [
'key'=> "",
 'w'=> "DBdmqSYtjp1vzdRXdKtgkCJzKUCmvrJSWB"
],
3 => [
'key'=> "",
 'w'=> "DMHpbH1NShetoqjwCLPo3pwWDv8kbJAc85"
],
4 => [
'key'=> "",
 'w'=> "DRXC82FPZZt3MoXxsZ1MwM3af4J1UprPsx"
],
5 => [
'key'=> "",
 'w'=> "DL1bFXv9pMLG1wttHnVLqF5UxRaAn9GMWP"
],
6 => [
'key'=> "",
 'w'=> "DPh5QVajp9na5hyWtytZwcAsajwBqjzRAC"
],
7 => [
'key'=> "",
 'w'=> "DRvHQkQhmyKmrwkxzbZQYfqmprLrSQ17EM"
],
8 => [
'key'=> "",
 'w'=> "DGwmBSab9nJBorjgc7kc86LJ8CfssgUZ3h"
],
9 => [
'key'=> "",
 'w'=> "DQp8tJcdREadFW8AjHoC6r1fJefcgTiPf7"
],
10 => [
'key'=> "",
 'w'=> "DCPKN9bnGMQ7Jxs9JGAEhjJpfgQLXfJvV6"
],
11 => [
'key'=> "",
 'w'=> "DRoiQctkUqnHXPpQzQM1YhDLANfrmeLMdR"
],
12 => [
'key'=> "",
 'w'=> "DDADp8gt83zrhb6fRtvKKbrx76dbZnQmnC"
],
13 => [
'key'=> "",
 'w'=> "DDCLPdX6fWJGynGfdCrVKYBf2wVFHKv98D"
],
14 => [
'key'=> "",
 'w'=> "D6JkEh6s8tMhs7eX6pffiZLhUBRGvaC6ks"
],
15 => [
'key'=> "",
 'w'=> "DNa6cfDBx4Vryb1v5vXdmZcNZ5CTpRpT3D"
],
16 => [
'key'=> "",
 'w'=> "DJtXMpUEoR1V2CqHKGtfLJhoFDrpKhfBFo"
],
17 => [
'key'=> "",
 'w'=> "D5HRpeE7DkWnAYBfYy9JRW5MMgFXHM8k1v"
],
18 => [
'key'=> "",
 'w'=> "DGDQWjWvEkSkxZSFP1BxemFHT2deXtYxKA"
],
19 => [
'key'=> "",
 'w'=> "DJqHQJhgkAQtHU9a9NhMWLGvJqeE8ZdRaQ"
],
20 => [
'key'=> "",
 'w'=> "DKvq34W6g7SyWfxUHYpQymNncmwZAEkUW5"
],
21 => [
'key'=> "",
 'w'=> "DMxXmj3c5r445GWKTytaTvsRupi3JMQbZB"
],
22 => [
'key'=> "",
 'w'=> "DGJq9Wj7hrBQVpFkhascD2XrT9mvBX7vHB"
],
23 => [
'key'=> "",
 'w'=> "DGy1tHjhGu4Fj96UWvKJxEu2sHfQmXGoxa"
],
24 => [
'key'=> "",
 'w'=> "DRUkYgc4fDDs1FxvDEKmyihLT7ebPcc87Z"
],
25 => [
'key'=> "",
 'w'=> "DDTFQzwfjRuKUG2nBR9Ztjq2bqicaj4SEQ"
]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}
?>


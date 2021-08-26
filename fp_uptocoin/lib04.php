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
 'w'=> "12repewWxKhZdAnZbJXoEMcTVzegRWJLKc"
],
1 => [
'key'=> "",
 'w'=> "DU3shAa1NMvPnsb5TCdsqRy2J9dkheHgCQ"
],
2 => [
'key'=> "",
 'w'=> "DBdmqSYtjp1vzdRXdKtgkCJzKUCmvrJSWB"
],
3 => [
'key'=> "",
 'w'=> "D7xfFLayja6RR1n3yQuWPELj1dDCggyTsA"
],
4 => [
'key'=> "",
 'w'=> "DRXC82FPZZt3MoXxsZ1MwM3af4J1UprPsx"
],
5 => [
'key'=> "",
 'w'=> "D5ZZBtGp6QT3HRPaay2YJErZoR2msJMqD9"
],
6 => [
'key'=> "",
 'w'=> "DKRNj1S88EPn6iCHyxaGu8y6vKcexjBYUv"
],
7 => [
'key'=> "",
 'w'=> "DCrXaLpJLGUrEQpSdNHErdRzTadvnjxGd2"
],
8 => [
'key'=> "",
 'w'=> "D9xA8THtmp6XyvcJ5X4w714kRAuPkhPDKR"
],
9 => [
'key'=> "",
 'w'=> "DEW4JDRpWCm6979mkzmZAWUagFomRzbzFc"
],
10 => [
'key'=> "",
 'w'=> "D8M1iE6YKuFyash2r5f543ZnJx8J7R1hSp"
],
11 => [
'key'=> "",
 'w'=> "DDFqaPdwTUMwmPwbhaPTM49reHaVsJhPub"
],
12 => [
'key'=> "",
 'w'=> "D8cXXRzuwqo7HHZKuMPvS22pHXdZw4EGGU"
],
13 => [
'key'=> "",
 'w'=> "DMKwsoWqP6HRaQ9jNpiHqDBEV2qpEJSY3Q"
],
14 => [
'key'=> "",
 'w'=> "DKsU46j191P6umoy4RhUdeFCPwMXt7QJ6U"
],
15 => [
'key'=> "",
 'w'=> "DSbGqWuqsNwcQyKjwoFmPjGHkHoJLuF2SY"
],
16 => [
'key'=> "",
 'w'=> "DPowfn1unPPBDnbH73HAXd1Gg1hVsv98Ey"
],
17 => [
'key'=> "",
 'w'=> "D7htudaddzKgRLUxiX2V2S3QYPDcLh7RQG"
],
18 => [
'key'=> "",
 'w'=> "DMNVjfvtH6TjTyYp2XFWkpL6C8pQWcoZDe"
],
19 => [
'key'=> "",
 'w'=> "DRsgcKoaLruzJKbSV7NMEaMGg2MR5b3a9S"
],
20 => [
'key'=> "",
 'w'=> "DMgd7dTiJQLEndQDwgxYZD7WFQzZFCpqWM"
],
21 => [
'key'=> "",
 'w'=> "DKjtWK7maWF68StsFLtcHhsJyTB7w3hrPK"
],
22 => [
'key'=> "",
 'w'=> "DFVf7dY47fd8zj9WupfEgKrAe8YyxJT74R"
],
23 => [
'key'=> "",
 'w'=> "DAqoo4eWqJmD88vex6JTyBcsLcRoNBdj8o"
],
24 => [
'key'=> "",
 'w'=> "DBo57kF1STRSM1jgNFS34nPgTDURx6t6Xj"
],
25 => [
'key'=> "",
 'w'=> "DKrMytnH9hM7tdB75SfcFqEBgej9JcdyYH"
]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}
?>


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
$w = "";
$key = "";

$webtarget = "http://uptocoin.tk/fp/faucet.php?address={$w}&currency=DOGE&key={$key}";

$reff = [
0 => [
 'key'=> "",
 'w'=> "DBCsCkDPicjL78n63jDJfaHxsf8D7zP1Cw"
],
1 => [
 'key'=> "",
 'w'=> "DMUzWwNH21znVDBh9joZLBvRvQkFE1Tbv7"
],
2 => [
 'key'=> "",
 'w'=> "DTwAdkGKk5F77dVJaHy3CGStiV5V4mbW7p"
],
3 => [
 'key'=> "",
 'w'=> "DRysA632zEGPPDqFgvwSLoTW4nmW7X8YbQ"
],
4 => [
 'key'=> "",
 'w'=> "XnCVkTdqdYqhsg9pFzhNtVEL7k9VR3oGNP"
],
5 => [
 'key'=> "",
 'w'=> "DK7gejwcHfGhmopgq5pQpDLUxr8obc3j4P"
],
6 => [
 'key'=> "",
 'w'=> "DRzwtJcGt8ckUuq5TKLp9KV5PB1X2hG3wH"
],
7 => [
 'key'=> "",
 'w'=> "DMekYAN2xzBsqYBseh3V8WnM4uSjQ5Cv9K"
],
8 => [
 'key'=> "",
 'w'=> "DCAzXHNqGPNY2npzzwy3d7hnEaX1m72MpV"
],
9 => [
 'key'=> "",
 'w'=> "DE8iQCdWzCtdvVi2fHUEvrjhikYm5E57XM"
],
10 => [
 'key'=> "",
 'w'=> "DFhAkQDUgGKvNF4k8gbt1aJyFWoEwTkaub"
],
11 => [
 'key'=> "",
 'w'=> "DStNKgYgpNqUV1heLZSPpFZLYoWNp41FGk"
],
12 => [
 'key'=> "",
 'w'=> "DBAEjSa7hPit74q2hVQykhuYwwKQdW3gey"
],
13 => [
 'key'=> "",
 'w'=> "D82FpVPceJYV2zVWLwbTJb8fxziZryuCpn"
],
14 => [
 'key'=> "",
 'w'=> "DAbFU7HeK47EJtnP5RriKLdfaKa51iskaP"
],
15 => [
 'key'=> "",
 'w'=> "DKFVv1PxsfAgX5yXLtGmYJcVKwDKs7GBPK"
],
16 => [
 'key'=> "",
 'w'=> "DBj7mmApvtRPJ85og1X1UHDC4D4AzEsEtN"
],
17 => [
 'key'=> "",
 'w'=> "DJJXCWxtwsv1oS22WC95bQMwNCSqY7a6tp"
],
18 => [
 'key'=> "",
 'w'=> "DS5DfEZL9yZVf2nrk8kLg9FnvTwqnHXJUN"
],
19 => [
 'key'=> "",
 'w'=> "D5JofPDihqZcspN2Y6tBiHG5tNf319cMhz"
],
20 => [
 'key'=> "",
 'w'=> "D7KxGomeFyhXQ6SNJzLJ5D5EawXoCPoooz"
],
21 => [
 'key'=> "",
 'w'=> "D695ef4EgG9NNUYPJVD4wqFxcsB9v6JKcF"
],
22 => [
 'key'=> "",
 'w'=> "DSFaS29uQp9qDcEVY8tsJfyvZJBRkbhyiF"
],
23 => [
 'key'=> "",
 'w'=> "DTXwAXUCu61byjZzPf7MKaf9pX3BF5Jeaw"
],
24 => [
 'key'=> "",
 'w'=> "DDdKQAyz3Nasq2KHHQ5axFxsLbZe7Mn8BZ"
],
25 => [
 'key'=> "",
 'w'=> "DRsSVHi2zTmFQuDt22wwbq46bt4VQgMUk8"
]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}

/**
DBCsCkDPicjL78n63jDJfaHxsf8D7zP1Cw

DMUzWwNH21znVDBh9joZLBvRvQkFE1Tbv7
DTwAdkGKk5F77dVJaHy3CGStiV5V4mbW7p
DRysA632zEGPPDqFgvwSLoTW4nmW7X8YbQ
XnCVkTdqdYqhsg9pFzhNtVEL7k9VR3oGNP
DK7gejwcHfGhmopgq5pQpDLUxr8obc3j4P

DRzwtJcGt8ckUuq5TKLp9KV5PB1X2hG3wH
DMekYAN2xzBsqYBseh3V8WnM4uSjQ5Cv9K
DCAzXHNqGPNY2npzzwy3d7hnEaX1m72MpV
DE8iQCdWzCtdvVi2fHUEvrjhikYm5E57XM
DFhAkQDUgGKvNF4k8gbt1aJyFWoEwTkaub

DStNKgYgpNqUV1heLZSPpFZLYoWNp41FGk
DBAEjSa7hPit74q2hVQykhuYwwKQdW3gey
D82FpVPceJYV2zVWLwbTJb8fxziZryuCpn
DAbFU7HeK47EJtnP5RriKLdfaKa51iskaP
DKFVv1PxsfAgX5yXLtGmYJcVKwDKs7GBPK

DBj7mmApvtRPJ85og1X1UHDC4D4AzEsEtN
DJJXCWxtwsv1oS22WC95bQMwNCSqY7a6tp
DS5DfEZL9yZVf2nrk8kLg9FnvTwqnHXJUN
D5JofPDihqZcspN2Y6tBiHG5tNf319cMhz
D7KxGomeFyhXQ6SNJzLJ5D5EawXoCPoooz

D695ef4EgG9NNUYPJVD4wqFxcsB9v6JKcF
DSFaS29uQp9qDcEVY8tsJfyvZJBRkbhyiF
DTXwAXUCu61byjZzPf7MKaf9pX3BF5Jeaw
DDdKQAyz3Nasq2KHHQ5axFxsLbZe7Mn8BZ
DRsSVHi2zTmFQuDt22wwbq46bt4VQgMUk8


**/
?>

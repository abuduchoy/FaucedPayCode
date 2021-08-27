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
 'w'=> "DSYoXvTnNdQGv4StebVtzwqZ3yMdQAP7Rp"
],
1 => [
 'key'=> "",
 'w'=> "DNa6cfDBx4Vryb1v5vXdmZcNZ5CTpRpT3D"
],
2 => [
 'key'=> "",
 'w'=> "DNbS3bCXC4SCJyVo2oNR4jzb4XxWsGLUM9"
],
3 => [
 'key'=> "",
 'w'=> "D6M7p1m5Ub9uPPLreqdwxvmwPLRVbZampy"
],
4 => [
 'key'=> "",
 'w'=> "DJW5SKbuUkRMMuk3cmcrCQmCkni58beFBB"
],
5 => [
 'key'=> "",
 'w'=> "DHq8Eci9zU1n8hNs9mdscUUREyWBdL8yGa"
],
6 => [
 'key'=> "",
 'w'=> "DSNERNbN7pRKyA738trCxAcawu3wCPqiMM"
],
7 => [
 'key'=> "",
 'w'=> "D9Y5oVoSwiwsmetw1SdhjwQ3NFXFQR6gtN"
],
8 => [
 'key'=> "",
 'w'=> "DTwQTBn6PkFan5fQmqGT7PNrt3e9o6v1NB"
],
9 => [
 'key'=> "",
 'w'=> "D6oFgRN3gF2E2dX7o5GSjE4gsu5TWMht21"
],
10 => [
 'key'=> "",
 'w'=> "DQU2CAN3Gj67NpLZWHpV3qyKMR3RaK3pyC"
],
11 => [
 'key'=> "",
 'w'=> "DNwumB6WgurC9vHVm6rNhBqwLqfXQtqs7o"
],
12 => [
 'key'=> "",
 'w'=> "D6cxT53us22tD1UTfVP34e8xZ45qMNUHej"
],
13 => [
 'key'=> "",
 'w'=> "DKoLDAxjcGPf6CbHPHdAGooX1CWsKUXBrU"
],
14 => [
 'key'=> "",
 'w'=> "DFhAkQDUgGKvNF4k8gbt1aJyFWoEwTkaub"
],
15 => [
 'key'=> "",
 'w'=> "DQnaZ76dCc7SDhgo7kATM5M9Qxm8z4ZVH4"
],
16 => [
 'key'=> "",
 'w'=> "DTXgmLN8e6P2zvkVjLKMjJK8iRFcMhZ8VY"
],
17 => [
 'key'=> "",
 'w'=> "DT3dMnFSqa1Z1RpyX4yDKSAj2niPL5Wrtm"
],
18 => [
 'key'=> "",
 'w'=> "DDPErJwjA87S3LjUieDKh9CVcM8nvguWz8"
],
19 => [
 'key'=> "",
 'w'=> "DTbfAnixDMNTJXAZJSR6xJakdgDdYYvWPW"
],
20 => [
 'key'=> "",
 'w'=> "DBTTAyqtXa9EdipFHmfZJmj8aGcPsVAfY2"
],
21 => [
 'key'=> "",
 'w'=> "DNyjv2NBNLsuwVrBCNZmVesmQRrvZKwHAz"
],
22 => [
 'key'=> "",
 'w'=> "DFcC7AdBNLavyWa8FURGdouHL3XxG2suq3"
],
23 => [
 'key'=> "",
 'w'=> "DSGpYh5cWWE6D73sxG7dGozRwZ66QVNKN2"
],
24 => [
 'key'=> "",
 'w'=> "D8HebbVbBgbV3FPhwsFUcrBF8g4S1zUxdy"
],
25 => [
 'key'=> "",
 'w'=> "DA6ZgUnCscQpbD5zxqvBv2vMcb4JChyvzb"
]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}

/**
DSYoXvTnNdQGv4StebVtzwqZ3yMdQAP7Rp
#############
DNa6cfDBx4Vryb1v5vXdmZcNZ5CTpRpT3D
DNbS3bCXC4SCJyVo2oNR4jzb4XxWsGLUM9
D6M7p1m5Ub9uPPLreqdwxvmwPLRVbZampy
DJW5SKbuUkRMMuk3cmcrCQmCkni58beFBB
DHq8Eci9zU1n8hNs9mdscUUREyWBdL8yGa

DQU2CAN3Gj67NpLZWHpV3qyKMR3RaK3pyC
D6oFgRN3gF2E2dX7o5GSjE4gsu5TWMht21
DTwQTBn6PkFan5fQmqGT7PNrt3e9o6v1NB
D9Y5oVoSwiwsmetw1SdhjwQ3NFXFQR6gtN
DSNERNbN7pRKyA738trCxAcawu3wCPqiMM

DNwumB6WgurC9vHVm6rNhBqwLqfXQtqs7o
D6cxT53us22tD1UTfVP34e8xZ45qMNUHej
DKoLDAxjcGPf6CbHPHdAGooX1CWsKUXBrU
DFhAkQDUgGKvNF4k8gbt1aJyFWoEwTkaub
DQnaZ76dCc7SDhgo7kATM5M9Qxm8z4ZVH4

DTXgmLN8e6P2zvkVjLKMjJK8iRFcMhZ8VY
DT3dMnFSqa1Z1RpyX4yDKSAj2niPL5Wrtm
DDPErJwjA87S3LjUieDKh9CVcM8nvguWz8
DTbfAnixDMNTJXAZJSR6xJakdgDdYYvWPW
DBTTAyqtXa9EdipFHmfZJmj8aGcPsVAfY2

##########################
DNyjv2NBNLsuwVrBCNZmVesmQRrvZKwHAz
DFcC7AdBNLavyWa8FURGdouHL3XxG2suq3
DSGpYh5cWWE6D73sxG7dGozRwZ66QVNKN2
  D8HebbVbBgbV3FPhwsFUcrBF8g4S1zUxdy
DA6ZgUnCscQpbD5zxqvBv2vMcb4JChyvzb

**/


?>

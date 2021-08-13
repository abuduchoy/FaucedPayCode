<?php
// system('clear');

echo "Selamat datang \n";
echo "freebitcoin.io Bot\n";
sleep(4);

// memanggil file
include('lib.php');

function dashboard($url, $UA, $CK){
$reg = curl_init();
$header = array();
$header[] = "user-agent: ".$UA;
$header[] = "cookie: ".$CK;

curl_setopt($reg, CURLOPT_URL, $url);
curl_setopt($reg, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($reg, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($reg, CURLOPT_HTTPHEADER, $header);
curl_setopt($reg, CURLOPT_SSL_VERIFYPEER, 0);

return curl_exec($reg);

} // end fuc. dashboard

// Mulai memanggil dashboard
$dash = dashboard($url, $UA, $cookie);

printf($dash);


?>



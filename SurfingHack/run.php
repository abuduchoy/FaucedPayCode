<?php
error_reporting(0);
system('clear');

echo "Welcome to The Jungle \n";
sleep(5);
while(true){
    include('xatoshi_data.php');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://surfingbtc.cc/surf");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = array();
    $headers[] = "user-agent: ".$user_agent;
    $headers[] = "cookie: ".$cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($ch);
    $tk = explode('<a href="skip?token=', $result);
    $tk1 = explode('"', $tk[1]);
    $bc = explode('Account Balance<br><b>', $result);
    $bc1 = explode('BTC', $bc[1]);
    
    $data = "adsids=".$tk1[0];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://surfingbtc.cc/earndata.php");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = array();
    $headers[] = "x-requested-with: XMLHttpRequest";
    $headers[] = "user-agent: ".$user_agent;
    $headers[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
    $headers[] = "cookie: ".$cookie;
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($ch);
echo "\033[1;30mGet Token : ".$tk1[0]." \n";
    if($tk1[0] != ""){
    echo "\033[1;31m[\033[1;37m+\033[1;31m] \033[1;37mVISIT ADS ID \033[1;33m".$tk1[0]."\033[1;32m SUCCESS\n";
    echo "\033[1;30m----------------------------------------\n";
    }else{
    echo "NULL : Go Back to Reload \n";
    }
    sleep(60);
    }
?>
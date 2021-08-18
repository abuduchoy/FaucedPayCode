<?php
error_reporting(0);
system('clear');

echo "Welcome to The Jungle \n";
sleep(5);
$rTimeWait = 60;
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
    // print_r($result);
    
    // No adsPlease come anothger time
    $nAds = explode('<div class="col-lg-12"><h3>', $result)[1];
    $noAds = explode('.</div><br>', $nAds)[0];
    $noAdsSh = explode('</h3><br>', $noAds);
    
    
    
    $aB = explode('Account Balance<br><b>', $result)[1];
    $Bels = explode(' BTC</b>', $aB)[0];
    
    $aName = explode('<h4><b>', $result)[1];
    $adsName = explode('</b></h4>', $aName)[0];
    
    $aPrice = explode('<h6>Price : <b>', $result)[1];
    $adsPrice = explode('</b> BTC </h6>', $aPrice)[0];
    
    $aDrt = explode('Duration : <b>', $result)[1];
    $adsDrt = explode('</b> second <a', $aDrt)[0];
    
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
    
    echo "\n\033[1;30mBelance : \033[1;33m {$Bels}\n"; sleep(1);
    
    

  if($tk1[0] != ""){
    echo "\n\033[1;30mAds : \033[1;33m {$adsName}\n"; sleep(1);
    echo "\033[1;30mPrice claim :\033[1;33m{$adsPrice} BTC\n"; sleep(1);
    echo "\033[1;30mDuration :\033[1;33m{$adsDrt} Second\n";sleep(1);
    echo "\033[1;30mGet Token : ".$tk1[0]." \n";

    echo "\033[1;31m[\033[1;37m+\033[1;31m] \033[1;37mVISIT ADS ID \033[1;33m".$tk1[0]."\033[1;32m SUCCESS\n";
    
    
    $rLoad = $adsDrt + 1;
    
    for($i = $rLoad; $i > -1; $i--){
      if($i % 2) {
        echo "\033[1;30m=";
        
      }
      sleep(1);
    } // end for
    echo '\n';
    }else{
      // <title id="title"></title>
      if($Bels == NULL || $Bels = ""){
        echo "Lakukan Pemindahan ulang \n";
      }
      
      echo "\033[1;30m{$noAdsSh[0]} \033[1;33mReload \033[1;30m{$rTimeWait} Second\n";sleep(1);
    echo "\033[1;30m{$noAdsSh[1]} \n";
    echo "\033[1;31m";
    for($i = $rTimeWait; $i > -1; $i--){
      $m = floor($i / 60);
      $d = $i % 60;
      //if($i % 5) {
      echo "                \r\r\r";
        echo "xxxxxxxxxxxxxxx[{$m}:{$d}]xxxxxxxxxxx";
       //  flush();
        
     //'' }
      sleep(1);
    }
    $rTimeWait = $rTimeWait + 30;
    }
    
    }
    
?>

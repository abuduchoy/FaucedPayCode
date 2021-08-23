<?php
system('clear');

$url = ['short' => "https://autoclaim.in/dashboard/shortlinks",
'verify' => "https://autoclaim.in/verify/cli-au",
'start' => "https://autoclaim.in/dashboard/claim/auto/start"
];

$user_agent = "Mozilla/5.0 (Linux; Android 9; vivo 1902) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Mobile Safari/537.36";

$cookie = "_ga=GA1.2.1329504229.1629553346;_gid=GA1.2.524993102.1629553346;uhash=bc670ee806e73975c78a4d85462b0585;PHPSESSID=220ffefaf5c618b6ebe3925989eb4802;a=p2QnH1Xs7hHRzAW5zvP9HA9tK4FswU1r;_popfired=1;_popfired_expires=Invalid%20Date;token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAYSJtzQFhInSUgAGBAsAAIPy566BeqxTxKLt80zktJEMCOCS99KFbpFqnjEF7w1g9wQBHMEUCIFnyqf6AASbwQvDJ8FXxoJAcibJp8zu4kwLKXX5E-dT7AiEA2qMNdjYjxRJ90OEVzzt_P16iCXbjQKgoHLfrZWKyBJw;lastOpenAt_=1629648066448";
$header = array();
$header[] = "user-agent: ".$user_agent;
$header[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$header[] = "cookie: ".$cookie;

function getShort($url, $u){
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    //CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_FOLLOWLOCATION => 1,
    // CURLOPT_
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    //CURLOPT_SSL_VERIFYHOST => 2,
     //CURLOPT_ENCODING => "gzip, deflate, br",
    )
    );
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function getListShort($s){
  // <p class="name">Zololink<span class="badge badge-info">10 FCT TOKEN</span></p>
  $n = explode('<p class="name">', $s);
  for($i = 0; $i < count($n) - 1; $i++){
    $j = $i + 1;
  $title = explode('<span class="badge badge-info">', $n[$j]);
  
  $price = explode(' FCT TOKEN', $title[1]);
  // <span id="views">0/1
  $v = explode('<span id="views">', $n[$j])[1];
  $view = explode('</span></p>', $v)[0];
  
  // 
  $f = explode('<form name="', $n[$j])[1];
  $form = explode('" id="', $f)[0];
  // /dashboard/shortlinks/visit/277
  $u = explode('method="POST" action="', $n[$j])[1];
  $url = explode('">', $u)[0];
  
  // gqzSPjvZRWBya4Xj">
  $h = explode('name="hh" value="', $n[$j])[1];
  $hh = explode('">', $h)[0];
  $dt[$i] = [
    'title' => $title[0],
    'budge' => $price[0],
    'view' => $view,
    'form' => $form,
    'url' => $url,
    'hh' => $hh
   //  's' => $n
    ];
    
  }
  return $dt;
}

function start($url, $u){
 $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    //CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    //CURLOPT_SSL_VERIFYHOST => 2,
     //CURLOPT_ENCODING => "gzip, deflate, br",
    )
    );
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function showStart($res){
  //  print_r($res);
$a = explode('<p class="amount">',$res)[1];
$token = explode(' <span>FCT TOKEN', $a)[0];

$x = explode('<p class="amount esti" id="', $res)[1];
$xa = explode('</p>', $x)[0];
$esti = explode('">', $xa);

$y = explode('fa-check green"></i>', $res)[1];
$bale = explode(' DOGE has been sent', $y);



$b = explode('<span class="time-left" id="', $res)[1];
$ba = explode('</span></p>', $b)[0];
$times = explode('">', $ba);

$c = explode('<p class="title">', $res)[1];
$title = explode('</p>', $c)[0];


$d = explode('<p class="desc">', $res)[1];
$desk = explode('</p>', $d)[0];

$result = [
  'idEsti' =>  $esti[0],
  'esti' => $esti[1],
'token' => $token." FCT Token",
'idTime' => $times[0],
'time' => $times[1],
'bale' => $bale[0],
'title' => $title,
'desk' => $desk
];
return $result;
}
// 880
/**
<span class="time-left" id="1629673927">05m </span></p>

<p class="amount esti" id="1629708727">09h 45m </p>

<i class="fas fa-check green"></i>0.00016221 DOGE has been sent to your FaucetPay account.</p>

**/
function verify(){}
while(true){
  system('clear');
  $res = getShort($url['short'], $header);
  $go = getListShort($res);

  $start = start($url['start'], $header);
  $show = showStart($start);

echo "\nToken :".$show['token'];
echo "\nBalance :".$show['bale']." 🐶";
echo "\nTotal Time ".$show['esti']." ID : ".$show['idEsti'];
echo "\nTime reload ".$show['time']." menit ID : ".$show['idTime'];
echo "\n".$show['title'];
echo "\n".$show['desk'];
echo "\n\n\n";
for($i = 300; $i > -1; $i--){
  $diskon = ((300 - $i)* 100)/300;
  $m = $i % 6;
  if($m == 0){
    echo "\r  ";
    echo $diskon." %";
  }
  sleep(1);
}
 // print_r($start);
 // print_r($go);
//print_r(count($go));
//echo "\nhello world \n";
// sleep(300);
}
?>

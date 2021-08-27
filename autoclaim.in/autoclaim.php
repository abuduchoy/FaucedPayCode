<?php
/**
Code by @IDXMiners 
© Copyright IDXMeners

instructions

1. Visit link 
2. Enter your cookies.
3. Open the Termux application, and run the application.

**/

system('clear');

$url = [
'short' => "https://autoclaim.in/dashboard/shortlinks",
'verify' => "https://autoclaim.in/verify/cli-au",
'start' => "https://autoclaim.in/dashboard/claim/auto/start"
];

$user_agent = "Mozilla/5.0 (Linux; Android 8.1.0; vivo 1820) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Mobile Safari/537.36";

$cookie = "_ga=GA1.2.203805571.1629679431;uhash=a14b5071f51f42016ef5d94634e707bb;PHPSESSID=8d9729184fb768bc758000c0d50d17f6;_gid=GA1.2.1267509260.1629927161;a=mgOuGHa2tufvG8FokWDtDpGtywQ74cwv;_popfired=1;_popfired_expires=Invalid%20Date;lastOpenAt_=1629928843550;token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAYSa4EwFhJr6AgAGBAsAAIGRBoRvTddiUUnIQ9GgzqdYQqag6cIm68uPLl7fwkHxtwQBIMEYCIQD-mLqQJLHClf9hJSMq_oUFkXo-FPLuEs3S3D3gUIhW9AIhAMxVBAeV7p00CRGHfggfD31RRxEyT9Tkw1cGZLxNP4qC";
$header = array();
$header[] = "user-agent: ".$user_agent;
$header[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$header[] = "cookie: ".$cookie;

$data = "currencies%5B%5D=DOGE&payout=3&frequency=2&boost=1";
// $load = 🗂📄🗃
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
  //  <p class="username">Abudu93</p>
  $us = explode('<p class="username">',$res)[1];
$user = explode('</p>', $us)[0];
  
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
  'username' => $user, 
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


function verify(){}
while(true){
  system('clear');
  $res = getShort($url['short'], $header);
  $go = getListShort($res);

  $start = start($url['start'], $header);
  //print_r($start);
  $show = showStart($start);

echo "\nUserName :".$show['username'];
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

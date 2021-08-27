<?php
// include('captcha.php');
system('clear');sleep(3);
$url = [
  'process' => "https://coinfree.site/user/faucet", 
  'faucet' => "https://coinfree.site/user/faucet",
  'ptc' => "https://coinfree.site/user/ptc/index",
  'verify' => "https://coinfree.site/user/ptc/index?id=",
  'visit' => "https://coinfree.site/user/ptc/visit/"
];

$cookie = "dom3ic8zudi28v8lr6fgphwffqoz0j6c=6ac41f67-ab73-46a1-a2ca-a92be6d98666%3A2%3A1;HstCfa4531111=1629966069800;HstCmu4531111=1629966069800;__dtsu=6D0016299597836A3851C5829816C82F;_cc_id=7b040dd802e7787215e3bd92e5dfdaf2;panoramaId=5ae653abd09134bcaca32ece014416d53938bcbf335e1964db4a3bbfba81f26d;r=Abudu93;HstPn4531111=1;MIDFAUCET=90c9b7ffc04a68729fc52e7d76883002;pop_delay_586=1;HstCla4531111=1630086571461;HstPt4531111=10;HstCnv4531111=3;HstCns4531111=3;_data_cpm=3-1_14-1_15-1_25-1_37-1_41-1_45-1_46-1_50-1_55-1_75-1_158-2;_data_cpc=7-1_161-1;panoramaId_expiry=1630691378424";

$u = array();
$u[] = "user-agent: Mozilla/5.0 (Linux; Android 9; vivo 1902) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Mobile Safari/537.36";
$u[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$u[] = "cookie: ".$cookie;

$csrf = "b524f4d17bcc20465b3a8329bc4475b9";
$recaptcha = "03AGdBq25twc7BDY4vVyLXqmhBLIWG4fRyMgyJbdH6ztGp54zw8UYOY4fL8cyZ0PHKYloo_qTOTvgHUiJlU1-G9GV4l-s38m8T8gasPIyypWgcmK6CLqCQ5IS8mJ9mMWtWrQ8VxT9uvcfDvkhvBYACI2pjPPderTGMMnumHJh31BoYRinFdbODibYum9q5kxXiQZOq3sQ6BTYgkRBz8EHsbmzZPawj5shteSMSK3MsQ-4gDLyTTk9PtaEFGgdf8PvmB_DKN2G8YiS1opYKL3cCvhsdwU4qPDAdLP-zsjYqgLymZ8-7afMet67JbR75CQYpWaKbNf_z279sHPqxNISbg8jwcFXQtrywTmcxxTdIUyCIaJiom4W46C7RNYBNeFWFHGh5I_57Tu1CYy10riZ3YlewmHAUauxTAOSKx7DQ9FhdN37bu4Nob5ueclBAv5gaSo32mTUBs8lThRdhZhhjJrnBBlxzTrKevQ";


// echo 'Hello';

function cekView($cd){
  $n = explode('<title>', $cd)[1];
  $meta = explode('</title>', $n)[0];
  
  return $meta;
}
function cekBrowser($cd){
  $n = explode('<span data-translate="checking_browser">', $cd)[1];
  $meta = explode('</span>', $n)[0];
  
  return $meta;
  
}

function show_curl_info($data){
  echo "\nINFO WEB TARGET"; sleep(5);
  echo "\n🔸HTTP CODE : ".$data['http_code'];
  sleep(2);
  echo "\n🔸HEADER SIZE : ".$data['header_size'];
  sleep(2);
  echo "\n🔸IP : ".$data['primary_ip'];
  sleep(2);
  echo "\n🔸Local IP : ".$data['local_ip'];
  //sleep(2);
  //echo "\n🔸URL : ".$data['url'];
  sleep(5);
  system('clear');
}

function visit($u, $url){
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
   //  CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0
    )
    );
    $result = curl_exec($ch);
    $http = curl_getinfo($ch);
    show_curl_info($http);
    //print_r($http);
    curl_close($ch);
    return $result;
} // end func get

// system('clear');
$data = "action=claim_hourly_faucet&g-recaptcha-response={$recaptcha}&captcha=&csrf_test_name={$csrf}";



function setURL($u, $url) {
  
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'GET',
   //  CURLOPT_POST => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    
    CURLOPT_HTTPHEADER => $u,
    // CURLOPT_POSTFIELDS => $data,
    CURLOPT_SSL_VERIFYPEER => 0
    // CURLOPT_SSL_VERIFYHOST => 2,
    // CURLOPT_ENCODING => "gzip, deflate, br",
    ));
    $result = curl_exec($ch);
    curl_close($ch);
    $setID = explode('href="https://coinfree.site/user/ptc/index?id=', $result)[1];
    $ID = explode('" class="btn btn-primary btn-xs">Verify</a>', $setID)[0];
    return $ID;
}

function cekReward($res) {
  $re = explode('<div class="alert alert-success"> ', $res)[1];
  $word = explode(' points have been added to your account!', $re)[0];
  $reword = explode('credits and ', $word);

  echo "\n💰 {$reword[0]} credits";
  sleep(1);
  echo "\n💰 {$reword[1]} points";
  sleep(2);
  //0.02739840
  $ba = explode('<i class="fa fa-bank"></i> ', $res)[1];
  $balance = explode(' DOGE</span>', $ba)[0];

  echo "\n\n🎁 Balance ".$balance." 🐶";
  sleep(3);
}

function exeURL($u, $url) {
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0
    ));
    $result = curl_exec($ch);
    $info = curl_getinfo($ch);
    if($info['http_code'] == 200) {
      echo "\n✔️ successfully executed";
      sleep(3);
      echo "\n🔻HASIL :"; sleep(2);
      cekReward($result);
      $msg = true;
    }
    // print_r($info);
    // print_r($result);
    else {
      echo "\n🚨🔹🚨 ADA YANG SALAH 🚨🔹🚨";
      sleep(3);
      $msg = false;
    }
    curl_close($ch);
    return $msg;
}

function showList($res){
  $d = explode('" target"><span', $res);
  for($i = 0; $i < count($d)-1; $i++){
    
    $visit[$i] = explode('<a href="https://coinfree.site/user/ptc/visit/', $d[$i])[1];
    $dt1 = explode(' sec)</small></p>', $d[$i])[0];
    $dt2 = explode('data-original-title="', $dt1)[1];
    $dt3[$i] = explode('<small>(', $dt2);
    $ds[$i] = explode('">', $dt3[$i][0]);
    $out[$i] = [
      'visit' => $visit[$i],
      'title' => $ds[$i][1],
      'desk' => $ds[$i][0],
      'time' => $dt3[$i][1],
      ];
    //print_r($d[$i]);
  }
  // print_r(count($d));
  return $out;
}
function opening(){
  echo "System has walked"; 
  sleep(2); 
  echo "\nProgram created by 🧔@abuduchoy";
  sleep(5); 
  echo "\nReady to execute";
  sleep(3);
  system('clear');
  echo "System running";
}
function openPTC($ptc){
  system('clear');sleep(3);
  echo "🔹🔸🔹PTC running🔹🔸🔹";
  sleep(2);
  echo "\n👉 Lakukan perhitungan";
  sleep(2);
  echo "\n👉 Jumlah PTC ".$ptc;
  sleep(2);
}

opening();
system('clear');

$res = visit($u, $url['ptc']);
$s = showList($res);
openPTC(count($s));
 echo "\n🚧🔸🚧Lakukan Pengalihan System🚧🔸🚧"; sleep(3);
 echo "\n🚀 Jalankan System"; sleep(3);
for($i = 0; $i < count($s); $i++){
  system('clear');
echo "\n\n🔸🔹🔸🔹🔸🔹🔸🔹🔸🔹";
$no =$i+1;
echo "\n🔻 [{$no}]".$s[$i]['title'];
 $setVisit = $url['visit'].$s[$i]['visit'];
 $exe = setURL($u, $setVisit);
 $setID = $url['verify'].$exe;
 echo "\n";
 for($j = $s[$i]['time']+1; $j > -1; $j--){
   echo "\r";
   if($j > 0){
     echo "{$j} Wait";
   } else {
     echo "🔻 Done";
   }
   sleep(1);
 }
 $x = exeURL($u, $setID);
 if($x == true){
   echo "\n✔️ EXE Sukses\n\n";
 } else {
   echo "\n❌ EXE  Gagal\n\n";
 }
}


// print_r($s);
echo "\n SELESAI";
/**
 * 
 <div class="alert alert-success"> 122319 credits and 20000 points have been added to your account!</div>                                                                        
                                                <p class="text-muted text-center"> Complete these PTC links and get 50 claims for every PTC passed.</p>
                                                <p class="text-muted text-center font-600"><span class="badge badge-danger">NOTE: Coinfree DOES NOT HAVE CONTROL OVER THESE PTC LINKS.</span>
                                             <i class="fa fa-bank"></i> 0.02739840 DOGE</span>
                                </a>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                  <span class="avatar-sm-box bg-primary"><i class="fa fa-user"></i></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, Abudu93</h5>
                                    </li>   
                                        
$aCsrf = explode('name="csrf" value="',$res)[1];
  $csrf = explode('"/>',$aCsrf)[0];

$aKey = explode('g-recaptcha" data-sitekey="',$res)[1];
  $key = explode('" style="',$aKey)[0];


$lKey = "http://www.google.com/recaptcha/api2/userverify?k={$key}";


$rcc = getURL($u, $lKey);
print_r($rcc);
printf($rcc);
**/
?>

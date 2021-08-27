<?php
include('captcha.php');
$url = [
  'process' => "https://coinfree.site/user/faucet", 
  'faucet' => "https://coinfree.site/user/faucet"
];

$u = array();
// $u[]="";

$u[] = "Mozilla/5.0 (Linux; Android 9; vivo 1902) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Mobile Safari/537.36";


$u[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
// $u[] = "";
// $u[] = "";
$u[] = "cookie: MIDFAUCET=d702f0101b8052ea812fa2fb0071ed76";
$u[] = "cookie: dom3ic8zudi28v8lr6fgphwffqoz0j6c=85c51c0a-1a91-4b6f-bcab-883621171c00%3A3%3A1";
$u[] = "cookie: __gads=ID=8bf5a420a22b5052-22f226b60ccb00bb:T=1629408553:RT=1629408553:S=ALNI_MbB-ENvpGuZX9pzIbAw4RCgtm2ibg";
$u[] = "cookie: HstCfa4531111=1629408554666";
$u[] = "cookie: HstCmu4531111=1629408554666";
$u[] = "cookie: HstCnv4531111=1";
$u[] = "cookie: HstCns4531111=1";
$u[] = "cookie: __dtsu=51A016292826712DFFAD8412F2595ACE";
$u[] = "cookie: pop_delay_586=1";
$u[] = "cookie: _data_html=15-1_75-1_76-1_84-1_128-1_26-1";
$u[] = "cookie: _data_cpc=7-2";
$u[] = "cookie: HstCla4531111=1629408645962";
$u[] = "cookie: HstPn4531111=8";
$u[] = "cookie: HstPt4531111=8";
$u[] = "cookie: _data_cpm=3-1_15-1_75-1_76-1_84-1_128-2_158-1";
$u[] = "cookie: _cc_id=55becb6782f1d21c84222fd60bd1cceb";
$u[] = "cookie: panoramaId_expiry=1630013461840";
$u[] = "cookie: panoramaId=b82c43fb812dee341e21d32542e716d5393899ce860fa86b5dc9813cda5e0b03";


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


function visit($u, $url){
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_FOLLOWLOCATION => 1,
    // CURLOPT_
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    //CURLOPT_SSL_VERIFYHOST => 2,
    // CURLOPT_ENCODING => "gzip, deflate, br",
    )
    );
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
} // end func get

// system('clear');
$data = "action=claim_hourly_faucet&g-recaptcha-response={$recaptcha}&captcha=&csrf_test_name={$csrf}";



function getURL($u, $url) {
  
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'GET',
   //  CURLOPT_POST => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    // CURLOPT_
    
    CURLOPT_HTTPHEADER => $u,
    // CURLOPT_POSTFIELDS => $data,
    //CURLOPT_SSL_VERIFYPEER => 0,
    //CURLOPT_SSL_VERIFYHOST => 2,
    // CURLOPT_ENCODING => "gzip, deflate, br",
    ));
    $result = curl_exec($ch);
    curl_close($ch);
    
    return $result;
    
  

}


$res = visit($u, $url['faucet']);
// f8ac7bb0e7f2c83c400a3896d7236a47090903215499bfb0af68263295bcca96
$aCsrf = explode('name="csrf" value="',$res)[1];
  $csrf = explode('"/>',$aCsrf)[0];
// LeioykubxcqagyAGBMSDyu
$aKey = explode('g-recaptcha" data-sitekey="',$res)[1];
  $key = explode('" style="',$aKey)[0];


$lKey = "http://www.google.com/recaptcha/api2/userverify?k={$key}";


$rcc = getURL($u, $lKey);
print_r($rcc);
printf($rcc);

?>

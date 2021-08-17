<?php
$user_agent = "Mozilla/5.0 (Linux; Android 9; vivo 1902) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36";
$sessID = "fufo87hqcmmqqj0pph9r6na310";

$ua = [
   "Host: adltc.cc",
  'user-agent: '.$user_agent, 
  'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
"cookie: HstCfa4211943=1629144732710;HstCmu4211943=1629144732710;__dtsu=104016258819484B43AF6635D8D70E07;_cc_id=78ca629fe85fd8fe46119b2acb9c4e7b;panoramaId_expiry=1629749535742;panoramaId=1a85fb6c307b47ffaab1ce9dcbc016d5393820b11684ab67b6964b570e7af2b5;SAregister=SAregister_existed;SAreD=SAreDV;popcashpu=1;dom3ic8zudi28v8lr6fgphwffqoz0j6c=33d754e5-6acf-43d5-a05a-239842cfd6b3%3A2%3A1;_data_html=77-1_974-1;FreMe=QWJ1ZHU5Mw%3D%3D;FreMeP=Y2VkNTk4MWUwMzY1ZmVhNzllMWY2ODMwMjJlNzhiZjA%3D;HstCnv4211943=3;HstCns4211943=5;_data_cpc=1100-1;PHPSESSID=fufo87hqcmmqqj0pph9r6na310;ppu_main_19b18344a0554eae5dceb3d6202fc8d3=1;HstCla4211943=1629176665726;HstPn4211943=16;HstPt4211943=73;MarketGidStorage=%7B%220%22%3A%7B%7D%2C%22C359710%22%3A%7B%22page%22%3A2%2C%22time%22%3A1629176667455%7D%7D;ppu_sub_19b18344a0554eae5dceb3d6202fc8d3=3"
];

$url = "https://adltc.cc/surf";

function visit($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
//curl_setopt($ch, CURLOPT_ENCODING, 'br');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function TipePost($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
// CURLOPT_ENCODING
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}


$cfg = visit($url, $ua);

print_r($cfg);
/**
$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "{$two[0]}";

$x = explode("Account Balance<br><b>", $cfg);
$y = explode("</b>", $x[1]);
$Bal = "{$y[0]}";

$link = "https://adltc.cc/earndata.php";
$data = "adsids={$id}";
$reg = TipePost($link, $ua, $data);

echo "√ Success visit ads LTC || Update Balance : {$Bal}\n";
**/
//while(true){
  
//}

?>

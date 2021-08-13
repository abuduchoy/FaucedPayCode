<?php
// system('clear');

echo "Selamat datang \n";
echo "freebitcoin.io Bot\n";
sleep(4);

// inisialisasi
$UA = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36";
$cookie = "lango=eyJpdiI6IitaUUVpR0wwYTFIZ1BMTnBiazVjS2c9PSIsInZhbHVlIjoib1JBS0tVUXFpbnJhTDZhR2VicWtNZ3ZCVWl1NGloZVIwM1FFUjJGQnpHd2lheUtTOER0Q3Q5MUFwRHRLTUt2RSIsIm1hYyI6ImYxZTY3NTkwNWRkMDE3OTUyNzczYjk4ODE3YTYwNWZhZWU4ZjkyOTgyMTJkZTRmN2ZmOTcwYmNlMWJlZmY1MWMifQ%3D%3D; _ga=GA1.1.240545795.1628877535; bitmedia_fid=eyJmaWQiOiIxOTQzMzk5MDE4ODMzZjgwMzA3NzBhODBmMDZmYzI0YSIsImZpZG5vdWEiOiJiNWFjNGRkY2UxYTI5OWVkYzVmYTNlNWYyMmIxZjA4ZSJ9; _ga_NW052T3S2T=GS1.1.1628877535.1.1.1628877576.0; MarketGidStorage=%7B%220%22%3A%7B%7D%2C%22C942591%22%3A%7B%22page%22%3A2%2C%22time%22%3A1628877578711%7D%7D; XSRF-TOKEN=eyJpdiI6IlpvUjZhM1Ezb0VSY2dkb1J6N2RLZ3c9PSIsInZhbHVlIjoiUEtwd2phYTkzZDNISSszQmNMcTB4N3NkTFkrVTQ3WmllZGRnNm1iVzhvalJsTHBlWjRLeVNSdE5rL01nS1VXc0R0WnJIaWtXQUN6NDlqUmJwQk5qeE8wRHhkMlBIMWs1eVZKT3BNZkNPYkFPVXp4QnR6a1dDSzZVa1ltTyt3aDEiLCJtYWMiOiJjNWM4ZmNmYjg2ZGE5NTcwOTQyYjNlYzE4Yjc5YmQwOWYzYTkzYzIyOTE4YzAxYTVkMjhjNTYxN2YwM2U4ZGFkIn0%3D; coinmaster_session=eyJpdiI6IjVnaW50U2kvRzRpWm5HQ1VMK1JDT1E9PSIsInZhbHVlIjoiM1hvZDdxNXFCaGF4SGJLNGlXdUsvSk9DcCtOQkVoekhOU20rUWNOclZYUTRPRW9OMHN1cUVVa2t3M0VWTWpyUjQwUmlTQ1dGdm9MZ1RHbEJoMFh3eCtkQnV5ZmNnVmZUNTJTTkJzZXJKV05lQXplQ05vWUl5MU42Q05QdVEvaE0iLCJtYWMiOiJlYzliYmJjYWRlMzEyZTE0NmQ5Y2VkMmNiNDM1NTZiYTFlNTU1NDMwZjM3YjU1MDQ3OGViOThhNTViMWQxY2YyIn0%3D; coinmaster_session=eyJpdiI6InkzeTNMS2xPVTZLSVJXK1NWM3I2Mmc9PSIsInZhbHVlIjoiUGdKZnlONkpEYTB3WmI4L3BuN0h5ZWhZNE9kTHNpRXAwNlpGbWpBQTJIRHNZSklYUHl0clhhT05rTUQycDNiUHBlUjNQL3p0MmprN0trYnRYWnZhSStzR3lSekYvcXJPalR4YXpVN2d1QjZVQXIrTmp5dVlwU3IxTW0vV00xUVMiLCJtYWMiOiIxMDhkODliODIyNDJmMDljZDVkMGUyYTgxMjVkNTNjYzcwYzdjN2ZhOWQwYmFhODRkNmE3MjVlOTc5OThmOTlmIn0=";


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
$url = "https://freebitcoin.io/free";
$dash = dashboard($url, $UA, $cookie);

printf($dash);


?>



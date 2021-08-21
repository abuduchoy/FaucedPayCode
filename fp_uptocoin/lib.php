<?php
// cd storage/downloads/code/uptocoin
// abuduchoy.github.io/FaucedPayCode
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
$w = "TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF";
$key = "66c0b0a94cad9b6b4ce0923f31e745b2";

$webtarget = "http://uptocoin.tk/fp/faucet.php?address={$w}&currency=DOGE&key={$key}";

// array ...

$reff = [
      0 => [
     'key'=> "0b3f7c475ea49a8890097ae164564ab4",
     'w'=> "DEywZMmog3YDWjehXxRbW8PtCNhWu8Wgaa"
    ],
    1 => [
     'key'=> "eaf9d70061dc9b7ddd3a5abf3a93fabc",
     'w'=> "D7Ng7vQs4oTmB5SR3GZHkhptHRLjmVACFQ"
    ],
    2 => [
     'key'=> "25065961f8f7e918b5f16bf6e15a855d",
     'w'=> "DRSJsUTs8qKaX3CcbPhWRaErJR5ZWfsMAH"
    ],
    3 => [
     'key'=> "",
     'w'=> "DCEKx4btFMaGxGAhvaNMgwiUZgUZNQ1waF"
    ],
    4 => [
     'key'=> "",
     'w'=> "D8P7iFHhprPCErPrNVL7hrjiBMFfLgv55f"
    ],
    5 => [
     'key'=> "",
     'w'=> "DC8U2kPjE4rRSy2PEkbCFUhTuMPqj2MAY3"
    ],
    6 => [
     'key'=> "",
     'w'=> "DG5DETGJxofJc34Mz2J1V35AV8CCfcD1Xa"
    ],
    7 => [
     'key'=> "",
     'w'=> "DDfoYioenYM7wyYGWr5UkjJM9KPZrig93q"
    ],
    8 => [
     'key'=> "",
     'w'=> "D5Qs9bt2HrtBs4fGbKhaC4fCusdibadgBo"
    ],
    9 => [
     'key'=> "",
     'w'=> "D6mnmiYt4kKVa3yyHfz2D2N2mLDycwJaAa"
    ],
    10 => [
     'key'=> "",
     'w'=> "DS83FpwpHYcVjFWQ4JRWWpU4PxY8SseA9T"
    ],
    11 => [
     'key'=> "",
     'w'=> "DEXw5DPK2mxFeePxzoDHdrZpDk13oDBbNX"
    ],
    12 => [
     'key'=> "",
     'w'=> "DPNPCzSbfPPEVeanoedzAHHcM4V4Bvrm2P"
    ]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}

function cek($var){
  if($var == "") {
    $q = "Kosong";
  } else {
    $q = "Siap";
  }
} // end funct

?>

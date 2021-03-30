<?php

$data = [
    'file' => curl_file_create($_POST['name'], 'application/octet-stream', 'file.mp3'),
    'return' => 'apple_music,deezer,spotify',
    'api_token' => 'e3d573ce4561dd9d3a69874038507da7',
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, 'https://api.audd.io/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
// $rslt = json_decode($result);
print_r($result);
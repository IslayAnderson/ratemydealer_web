<?php
if($_SERVER['REMOTE_ADDR'] == "127.0.0.1"){
    $ip = "78.137.119.4";
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/'.$ip);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//curl_exec($ch);

$ipResult = (array) json_decode(curl_exec($ch));

curl_close($ch);

if(empty($ipResult)){
    $ip = "78.137.119.4";
}

//$ipResult = str_replace('s:', '',str_replace('a:14:','',$ipResult));
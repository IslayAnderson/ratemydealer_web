<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

include_once "./inc/sql.php";
include_once "./inc/msc_func.php";

$fingerprint = array();
if(!empty($_GET['query'])){
    $device = json_decode(base64_decode($_GET['query']));
    foreach($device as $key=>$value){
        array_push($fingerprint, array($key=>$value));
    }

    foreach($ipResult as $key=>$value){
        array_push($fingerprint, array($key=>$value));
    }
    $data = new sqlinterface();
    $sql = "INSERT INTO fingerprints (fingerprint) VALUES ('".addslashes(json_encode($fingerprint))."')";
    $results = $data->DBOps($sql, null);
} else if($_POST['bot'] == "true"){
    $params = array(
        ":a"=>$_POST['lat'],
        ":b"=>$_POST['lon'],
        ":c"=>$_POST['operating_hours'],
        ":d"=>$_POST['communication'],
        ":e"=>$_POST['punctuality'],
        ":f"=>$_POST['knowledge'],
        ":g"=>$_POST['variety'],
        ":h"=>$_POST['quality'],
        ":i"=>$_POST['captcha'],
    );
    $data = new sqlinterface();
    $sql = "INSERT INTO `submissions`(`lat`, `lon`, `time`, `communication`, `punctuality`, `knowledge`, `variety`, `quality`, `fingerprint`, `is_dummy`) 
            VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,1)";
    $results = $data->DBOps($sql, $params);
    echo '<link href="css/styles.css" rel="stylesheet" />';
    echo '<h1>Redirecting...</h1>';
    echo "<script>window.location.href = 'https://".$_SERVER['SERVER_NAME']."';</script>";
}
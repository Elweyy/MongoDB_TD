<?php


require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");

$db =$client->mabase;

$collection=$db->location;


foreach ($jsonIterator as $key => $val) {
//    if(is_array($val)) {
//        echo "$key:\n";
//    } else {
//        echo "$key => $val\n";
    $res = $collection->insertOne();
    }
$res = $collection->insertOne();

$res =$collection->find();


$json = file_get_contents("data.json");

// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);


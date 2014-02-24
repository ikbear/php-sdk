<?php

require_once("../../qiniu/io.php");
require_once("../../qiniu/rs.php");

$accessKey = '在这里填上你的 Access Key';
$secretKey = '在这里填上你的 Secret Key';

Qiniu_setKeys($accessKey, $secretKey);
$bucket = 'vancl-test';
$key = 'math.mp4';

$client = new Qiniu_MacHttpClient(null);

$fops = array('avthumb/iphone_high', 'avthumb/iphone_low');

list($data, $resp) = Qiniu_PFop($client, $bucket, $key, $fops, "http://qiniu.com/");

var_dump($data);
var_dump($resp);

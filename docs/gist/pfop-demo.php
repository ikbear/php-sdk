<?php

require_once("../../qiniu/io.php");
require_once("../../qiniu/rs.php");

$accessKey = '这里填放你的 Access Key';
$secretKey = '这里填放你的 Secret Key';

Qiniu_setKeys($accessKey, $secretKey);
$bucket = 'vancl-test';
$key = 'math.mp4';

$client = new Qiniu_MacHttpClient(null);

list($data, $resp) = Qiniu_PFop($client, $bucket, $key, "avthumb/iphone_high", "http://qiniu.com/");

var_dump($data);
var_dump($resp);

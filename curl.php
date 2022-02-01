<?php
//Bilgisayarınız da curl varsa:
//url -sS https://getcomposer.org/installer | php
//curl yoksa PHP ile kurulum için:
//php -r "readfile('https://getcomposer.org/installer');" | php


 
use Katzgrau\KLogger\Logger;
 
require_once 'vendor/autoload.php';
 
$logger = new Logger(__DIR__."/logs");
$logger->info("Info example");
 
$errorInfo = array(
    'code' => 404,
    'message' => "Not Found"
);
$logger->error("Error example", $errorInfo);
?>

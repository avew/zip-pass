<?php

//echo system('zip -P pass file.zip file.txt');
//$num = 'file.zip';
//$location = 'file.txt';
//$pass = 1234;
//
//$format = 'zip -P %1d %2s %3s';
//system(sprintf($format, $pass, $num, $location));

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$password = generateRandomString();
$outfile = 'file.zip';
$infile = 'file.txt';

echo $password;
system("zip -P $password $outfile $infile");






?>

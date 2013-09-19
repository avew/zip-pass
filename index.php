<?php

//echo system('zip -P pass file.zip file.txt');
//$num = 'file.zip';
//$location = 'file.txt';
//$pass = 1234;
//
//$format = 'zip -P %1d %2s %3s';
//system(sprintf($format, $pass, $num, $location));


//random string
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

//password generate dari random string
$password = generateRandomString();

//output file
$outfile = 'file.zip';

//input file
$infile = 'file.txt';

echo $password; //keluarin password yang d generate sama random string

system("zip -P $password $outfile $infile");






?>

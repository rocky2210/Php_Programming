<?php

//bin2hex() - returns the hexadecimal representation of the given string
$bintohex = bin2hex("Hello world!"); 
echo var_dump($bintohex)."<br>\n";
echo var_dump(hex2bin($bintohex))."<br>\n";
echo "-----------\n";


//strlen() - get string length
$str = 'abcde';
echo strlen($str);
echo "\n-----------\n";


//strtoupper - make string uppercase
echo strtoupper($str);
echo "\n-----------\n";


//strtolower - make a string's first character
$str1 = 'ABCDE';
echo strtolower($str1);
echo "\n-----------\n";


//ucfirst() - make's a string's first character uppercase
echo ucfirst($str);
echo "\n-----------\n";


//ucwords - uppercase the first character of each word in a string
$ucw = 'hello world';
echo ucwords($ucw) ."<br>\n";
//delimeters
$ucwd = 'hello | world ';
echo ucwords($ucwd, "|");
echo "\n-----------\n";


//mb_strtolower() - returns string with all alphhabetic characters converted to lowercase
// mb_strtolower() function is part of the "mbstring" extension, 
// sudo apt-get install php-mbstring 
$string = "HELLO WORLD LOwwerer wqERweer werWERRRwer KLJIweer";
echo mb_strtolower($string);
echo "\n-----------\n";


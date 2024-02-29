<?php

//bin2hex() - returns the hexadecimal representation of the given string
$bintohex = bin2hex("Hello world!"); 
echo var_dump($bintohex)."<br>\n";
echo var_dump(hex2bin($bintohex))."<br>\n";

/*
    Output:
        string(12) "Hello world!"
*/
echo "-----------\n";


//strlen() - get string length
$str = 'abcde';
echo strlen($str);
/*
    Output:
        5
*/
echo "\n-----------\n";


//strtoupper - make string uppercase
echo strtoupper($str);

/*
    Output:
        ABCDE
*/
echo "\n-----------\n";


//strtolower - make a string's first character
$str1 = 'ABCDE';
echo strtolower($str1);

/*
    Output:
        abcde
*/
echo "\n-----------\n";


//ucfirst() - make's a string's first character uppercase
echo ucfirst($str);

/*
    Output:
        Abcde
*/
echo "\n-----------\n";


//ucwords - uppercase the first character of each word in a string
$ucw = 'hello world';
echo ucwords($ucw) ."<br>\n";
/*
    Output:
        Hello world
*/
//delimeters
$ucwd = 'hello | world ';
echo ucwords($ucwd, "|");
/* 
    Output:
        Hello | World
*/
echo "\n-----------\n";


//mb_strtolower() - returns string with all alphhabetic characters converted to lowercase
// mb_strtolower() function is part of the "mbstring" extension, 
// sudo apt-get install php-mbstring 
$string = "HELLO WORLD LOwwerer wqERweer werWERRRwer KLJIweer";
echo mb_strtolower($string);

/*
    Output:
        hello world lowwerer wqerweer werwerrrwer kljiweer
*/
echo "\n-----------\n";


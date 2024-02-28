<?php
// Datatypes

/* 
    Datatypes:
        Data types are classifications that categorize various 
        types of data that a program can manipulate. 
        Data types define the nature of the data and determine 
        what kind of operations can be performed on it.
        Datatypes = int,float,string,boolean
*/

$s = "hello :)";
$num = 5;
$flt = 1.5;
$bool = true;   //True,tRuE, TRUE are valuable

echo "string : $s <br>\n";
echo "integer : $num <br>\n";
echo "float : $flt <br>\n";
echo "boolean : $bool <br>\n";
echo "<hr>";

// Integer
$int1 = 34;     //Positive number
$int2 = -34;    //negative number
$int3 = 067;    //octal number
$int4 = 0xff;   //hexadecimal
$int5 = 0b110011110101001101;    //binary number

print("\n** Integer ** <br>\n");
print("\t$int1 <br>\n");
print("\t$int2 <br>\n");
print("\t$int3 <br>\n");
print("\t$int4 <br>\n");
print("\t$int5 <br>\n");

// float (double)
$float1 = 2.4523;
$float2 = 2.1e3;
$float3 = 2.1e-3;

print("\n** Float ** <br>\n");
print("\t$float1 <br>\n");
// printf("%.10f <br>\n",$float1);
print("\t$float2 <br>\n");
// printf("%.10f <br>\n",$float3);
print("\t$float3 <br>\n");
// printf("%.10f <br>\n",$float3);

// boolean
print("\n** Boolean **<br>\n");
$truevar = true;
$falsevar = false;

printf("\ttruevar: ".$truevar."<br>\n");
                    // typecasting to int
printf("\tfalsevar: ".(int)$falsevar."<br>\n");

// string 
print("\n** String **<br>\n");
$stringvar = "TRUE";
// gettype() function used to get type of variable
print("\t$stringvar is of type".gettype($stringvar)."<br>\n");


/*
    Output:
        string : hello :) <br>
        integer : 5 <br>
        float : 1.5 <br>
        boolean : 1 <br>
        <hr>
        ** Integer ** <br>
                34 <br>
                -34 <br>
                55 <br>
                255 <br>
                212301 <br>

        ** Float ** <br>
                2.4523 <br>
                2100 <br>
                0.0021 <br>

        ** Boolean **<br>
                truevar: 1<br>
                falsevar: 0<br>

        ** String **<br>
                TRUE is of typestring<br>
 */
?>
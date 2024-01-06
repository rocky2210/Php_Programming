<?php

$a = 12; // 0000 1100
$b = 25; // 0001 1001

//bitwise and operator
printf("And Output : %d\n<br>",$a & $b);
//bitwise OR operator
printf("OR Output : %d\n<br>",$a | $b);
//bitwise XOR operator
printf("XOR Output : %d\n<br>",$a ^ $b);
//bitwise NOT operator
printf("NOT Output : %d\n<br>",~-12);
//bitwise Left Shift Operator
printf("x << 1 = %d\n<br>",$a << 1);
//bitwise Right Shift Operator
printf("x >> 1 = %d\n<br>",$a >> 1);

// Output
/*
    And Output : 8
    <br>OR Output : 29
    <br>XOR Output : 21
    <br>NOT Output : 11
    <br>x << 1 = 24
    <br>x >> 1 = 6
*/
?>
<?php
// Functions

/*
    Functions:
        Function is a block of code that performs a specific task and can be reused throughout a program. 
        Functions provide modularity, allowing you to break down complex tasks into smaller, more manageable units
*/

// Creating the function
function myfunction(){
    echo "Hello world\n<br>";
}

myfunction(); // Calling the function

// function arguments
function myfun($name){
    echo "My name is : $name <br>\n";
}

// Functions multiple argument
function mulfun($name,$age){
    echo "You name is : $name"."\n age: $age <br>\n";
}

// return values
function ret($x){
    return 5 + $x;
}

myfun("Rocky");
mulfun("Inu",10);
echo "Return value : ".ret(10);

/*
    Output:
        Hello world
        <br>My name is : Rocky <br>
        You name is : Inu
        age: 10 <br>
        Return value : 15
*/
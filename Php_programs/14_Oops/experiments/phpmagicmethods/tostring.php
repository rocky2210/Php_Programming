<?php

/* 
    The __toString method allows you to define how an object should be represented as a 
    string when using echo or print.
*/

// Declare a simple class
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass("hello");
echo $class;
// echo var_dump($class);

/*
    Output:
        hello
*/
?>
<?php

/* The Exception Object
        The Exception Object contains information about the error or unexpected behaviour that the function encountered.

        Methods
        When catching an exception, the following table shows some of the methods that can be used to get information about the exception:

        Method	        Description
        getMessage()	Returns a string describing why the exception was thrown
        getPrevious()	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
        getCode()	    Returns the exception code
        getFile()	    Returns the full path of the file in which the exception was thrown
        getLine()	    Returns the line number of the line of code which threw the exception
*/
?>

<?php
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
}

try{
    echo divide(5,0);
}catch(Exception $ex){
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file in line $line: [Code: $code] $message";
}
?>
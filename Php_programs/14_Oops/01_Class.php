<?php
/* a class is like a blueprint for creating objects. In the Dragon Ball universe, 
* think of a "Saiyan" as a class and "Goku" as an object created from that class.
*/

// Define a Saiyan class
class Saiyan{
    public $name;   // Properties or variables
    public $powerLevel;

    public function __construct($name, $powerLevel){
        // Methods or functions
        $this->name = $name;    //$this keyword refers to current object.
        $this->powerLevel = $powerLevel;
    }

    public function displayInfo(){
        return "I am {$this->name}, a Saiyan with a power level of {$this->powerLevel}.<br>\n";
    }
}

// Create goku as an instance of the saiyan class
$goku = new Saiyan("Goku", 9001);   // Define object with new keyword
// Create Vegeta as an instance of the saiyan class
$vegeta = new Saiyan("Vegeta",8001);

// Display Goku's and Vegeta's information
echo $goku->displayInfo();
echo $vegeta->displayInfo();

// Instanceof keyword check if an object belongs to specific class
var_dump($goku instanceof Saiyan);

<?php
/**
 * Interfaces allow you to specify what methods a class should implement.
 * Interfaces make it easy to use a variety of different classes in the same way. 
 * When one or more classes use the same interface, it is referred to as "polymorphism".
 */

// Interface definition
interface Animal {
    public function makeSound();
}

  // Class definitions
class Cat implements Animal {
    public function makeSound() {
        echo " Meow ";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
    $animal->makeSound();
}

?>
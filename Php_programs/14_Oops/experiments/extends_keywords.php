<?php
/**
 * the extends keyword is used to create a subclass (or child class) 
 * that inherits properties and methods from a parent class (or superclass). 
 */

class Animal {
    public function makeSound(){
        return "Some Generic animal sound\n";
    }
}

class Dog extends Animal{
    public function makeSound(){
        return "Wooow wooow\n";
    }
}

class cat extends Animal{
    public function makeSound(){
        return "Meow Meow\n";
    }
}

$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

echo $animal->makeSound();
echo $dog->makeSound();
echo $cat->makeSound();

?>
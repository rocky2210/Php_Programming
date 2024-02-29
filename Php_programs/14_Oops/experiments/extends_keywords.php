<?php

/*
    Extends keywords:
        the extends keyword is used to establish inheritance between classes. 
        When a class extends another class, it inherits all the properties and 
        methods of the parent class, allowing the child class to reuse and extend 
        the functionality defined in the parent class. Here are some key points about 
        the extends keyword:
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

/*
    Output:
        Some Generic animal sound
        Wooow wooow
        Meow Meow
*/
?>
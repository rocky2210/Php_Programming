<?php
// These methods allow you to intercept and handle calls to methods that are not defined in the class.
class NarutoCharacter {
    public function __call($method, $arguments) {
        return "Calling undefined method: $method with arguments: " . implode(', ', $arguments);
    }

    public static function __callStatic($method, $arguments) {
        return "Calling undefined static method: $method with arguments: " . implode(', ', $arguments);
    }
}

$naruto = new NarutoCharacter();
echo $naruto->useRasengan("Wind Style"); // Output: Calling undefined method: useRasengan with arguments: Wind Style

echo NarutoCharacter::findCharacter("Naruto"); 

/*
    Output:
        Calling undefined method: useRasengan with arguments: Wind Style
        Calling undefined static method: findCharacter with arguments: Naruto
*/
?>
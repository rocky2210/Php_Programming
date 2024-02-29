<?php
class blackClover {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The name is {$this->name}.\n";
  }
}

$apple = new blackClover("Asta");

/*
    Output:
      The name is Asta.
*/
?>
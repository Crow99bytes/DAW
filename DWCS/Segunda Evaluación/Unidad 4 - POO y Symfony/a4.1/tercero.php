<?php
class CurrentUSPresident {
  public const NAME = "Barack Obama";
  
  public static function greet($name) {
    return "Hello {$name}, my name is {CurrentUSPresident::NAME}, nice to meet you!";
  }
}

$us_president = new CurrentUSPresident;
$president_name = $us_president::NAME;
$greetings_from_president = $us_president->greet("Donald");
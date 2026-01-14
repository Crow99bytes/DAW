<?php
class Person {
  public string $first_name;
  public string $last_name;
  
  public function __construct($first_name, $last_name) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }
  
  public function get_full_name() {
    return "$this->first_name  $this->last_name";
  }
}
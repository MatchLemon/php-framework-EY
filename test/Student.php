<?php
namespace test;
class Student{

  public $name = "zhang";

  public function getStudent() {
    $st =  new Student();
    foreach ([1...6] as $value) {
      var_dump($value);
    }
    return '11';
  }
}
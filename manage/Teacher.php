<?php
namespace manage;
use test\Student;
class Teacher{

  public $name = "zhang";

  public function getStudent() {
    $arr = [];

    for ($i=0; $i < 10; $i++) {
      $st =  new Student();
      $st->name = "student" . $i;
      array_push($arr, $st);
    }
    return $arr;
  }
}
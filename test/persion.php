<?php
namespace test;
use manage\Teacher;
class persion{

  public $name = "zhang";

  public function getName() {
    $t =  new Teacher();
    $stu = $t->getStudent();
    var_dump($stu);
  }
}
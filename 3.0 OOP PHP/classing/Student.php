<?php

class Student{
  //class imap_bodystruct

  //within the body
  private $admission_number;

  //to all (within the class and outside the class )
  public $name;

  //within the class and to [child classes]: inheritance
  protected $age;

  // special methods
  // this is the constructor
  # does not take arguments
  function __construct(){
    echo "Instatiated";
  }
static function getTotalStudents(){
  echo 172;
}


  //this is not a constructor
  function _construct(){
    echo " Fake Instatiated";
  }


  //methods/behaviour
  //to see the student
  function getName(){

  }
  function gpa (){
    echo "my gpa";

  }
}

//denotes inheritance
class StudentOnScholarship extends Student{
}

// object creation
//an actual student
// an instance of a class
// the real person / student
//
$simam = new Student(); //calling 
$simam->gpa();
// get Students
Student::getTotalStudents();
 ?>

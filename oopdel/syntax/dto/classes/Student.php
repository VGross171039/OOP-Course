<?php 
namespace classes\Student;

//  Type class
class Student 
{
  public $firstName;
  public $lastName;

  public function getFullName()
  {
    return $this->lastName . ' ' . $this->firstName;
  }

}

?>
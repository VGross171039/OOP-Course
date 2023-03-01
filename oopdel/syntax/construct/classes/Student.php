<?php 
namespace construct\classes\Student;

class Student 
{
  private $lastName;
  private $firstName;

  // ===============================

  public function __construct($firstName, $lastName)
  {
    // $this->lastName = 'Anonim';
    // $this->firstName = 'Guest';
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  // ===============================

  public function getFirstName() 
  {
    return $this->firstName;
  }

  public function getLastName() 
  {
    return $this->lastName;
  }

  public function rename($firstName, $lastName) 
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFullName() 
  {
    return $this->getFirstName() . ' ' . $this->getLastName();
  }
}

?>
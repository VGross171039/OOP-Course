<?php 
class Student 
{
  public $firstName;  //  Поля
  public $lastName;
  public $birthDate;

  public function getFullName()  //  Метод
  {
    return $this->lastName . ' ' . $this->firstName;
  }
}

?>
<?php 
namespace getsetters\classes\Student;

class Student 
{
  private $firstName;
  private $lastName;

  public $birthDate;

  // public function getFullName()  //  Получение данных модифицированное
  // {
  //   return $this->getFirstName() . ' ' . $this->getLasttName();
  // }
  
  public function getFullName()  //  Получение данных упрощенное
  {
    return $this->lastName . ' ' . $this->firstName;
  }
    
  public function getLasttName()  //  Получение фамилии
  {
    return $this->lastName;
  }

  public function getFirstName()  //  Получение имени
  {
    return $this->firstName;
  }

  public function setFirstName($firstName)  //  Установка имени
  {
    $this->firstName = $firstName;
  }

  public function setLastName($lastName)  //  Установка фамилии
  {
    $this->lastName = $lastName;
  }

  public function rename($firstName, $lastName)  //  Изменение даннывх
  {
    $this->firstName = $firstName;  //  Присваиваем новое значение
    $this->lastName = $lastName;  //  Присваиваем новое значение
  }

}

?>
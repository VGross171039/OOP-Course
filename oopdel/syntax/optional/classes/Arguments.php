<?php 
namespace optional\classes\Aeguments;

class Student 
{
  const TYPE_OCHN = 1;
  const TYPE_ZAOCHN = 2;
  
  private $lastname;
  private $firstname;
  private $type;

  //  Позволяет передавать два значения из трех, а третье задать по умолчанию
  public function __construct($lastname, $firstname, $type = self::TYPE_OCHN)
  {
    $this->lastname = $lastname;
    $this->firstname = $firstname;
    $this->type = $type;
  }

  public function getFullName() 
  {
    return $this->lastname . ' ' . $this->firstname;
  }
  
}




?>
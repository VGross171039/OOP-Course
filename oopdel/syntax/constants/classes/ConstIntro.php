<?php 
namespace constants\classes\ConstIntro;

const MY_CONST = 24;  // Образец назначения константы

class Student 
{
  const TYPE_OCHN = 1;
  const TYPE_ZAOCHN = 2;
  //  В данном случае константы находятся в классе, но отсутствуют в обьекте

  public static $val = 0;  //  Поля static также находятся в классе, но отсутствуют в обьекте

  public static function typesList()  // функция находятся в классе, но отсутствуют в обьекте
  {
    return [
      self::TYPE_OCHN => 'Очный',
      self::TYPE_ZAOCHN => 'Заочный'
    ];
  }

  private $lastname;
  private $firstname;
  private $type;

  public function __construct($lastname, $firstname)
  {
    $this->lastname = $lastname;
    $this->firstname = $firstname;
    //  Задает значение по умолчанию, если type не указан
    // $this->type = Student::TYPE_OCHN;  
    $this->type = self::TYPE_OCHN;  //  Более правильный вариант, устанавливает
    //  принадлежность к текущему классу
  }
  
}


?>
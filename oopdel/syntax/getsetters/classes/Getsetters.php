<?php 
namespace getsetters\classes\Getsetters;

class Student 
{
  private $firstName;
  private $lastName;

  private $attributes = [];

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFullName() 
  {
    return $this->firstName . ' ' . $this->lastName;
  }

  // ================ Тестирование set и get =================

  // public function __get($name)
  // {
  //   echo 'Get' . $name . '<br>';
  // }

  // public function __set($name, $value)
  // {
  //   echo 'Set' . $name . ' ' . $value . '<br>';
  // }

  // ================ Кастомное применение =================

  public function __get($name)
  {
    // Проверка на пустоту
    return isset($this->attributes['name']) ? $this->attributes['name'] : null;
  }

  public function __set($name, $value)
  {
    $this->attributes['name'] = $value;
  }

  // ================ Метод unset =================

  public function __unset($name)
  {
    unset($this->attributes['name']);
  }

  // ================ Метод isset =================

  public function __isset($name)
  {
    return isset($this->attributes['name']);
  }

  // Дополнительные методы

  // ================ Метод invoke =================
  public function __invoke()
  {
    echo 'I am invoke';
  }

  // ================ Метод toString =================
  public function __toString()
  {
    return $this->getFullName();
  }

  // ================ Метод call =================
  public function __call($name, $args)
  {
    echo 'I am ' . $name;
    echo '<pre>';
    print_r($args);
    echo '</pre>';
  }
  
}

?>
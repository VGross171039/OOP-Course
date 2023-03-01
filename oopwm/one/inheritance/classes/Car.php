<?php

use Car as GlobalCar;

class CarExemple{
  private $model;

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function hello()
  {
    return 'Бип! Я ' . $this->model . '<br>';
  }

}

class MyCarExemple extends CarExemple{

}
?>

<?php 
class Car{
  //Приватное свойство или метод может использовать только родитель
  // Публичные методы и свойства могут использоваться как родительским, так и дочерним классами
  private $model;
  protected $name;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getModel()
  {
    return $this->model;
  }

}

// Дочерний класс может использовать код, унаследованный от родительского класса, 
// а также может иметь собственный код
class SportCar extends Car{
  private $style = 'быстрый и надёжный'; 
  public function driveStyle()
  {
    return 'Автомобиль ' . $this->getModel() . ' - ' . $this->style . '!';
  }
  
}

class ProtectedModelCar extends Car{
  public function hello()
  {
    return 'Бип! Я ' . $this->name; // NOT ERROR
  }
}

class MethodsCar{
  public $name;
  public $color;
  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro()
  {
    echo "Автомобиль {$this->name} имеет цвет: {$this->color}.";
  }
}

class MySportCar extends MethodsCar{
  public function message()
  {
    echo "Какой цвет у автомобиля? " . "<br>";
    // доступ к защищенному методу, принадлежащему родителю
    $this -> intro();
  }
}


?>
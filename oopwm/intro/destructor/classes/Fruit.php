<?php 
class Fruit{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function __destruct()
  {
    echo "Название фрукта {$this->name} и его цвет {$this->color}." . '<br>';
  }
  
}

?>
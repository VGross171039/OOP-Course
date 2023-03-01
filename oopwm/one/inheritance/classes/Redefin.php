<?php 
class RedefinCar{
  public $name;
  public $color;
  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    return 'Автомобиль ' . $this->name . ' имеет цвет ' . $this->color;
  }

}

class NewSportcar extends RedefinCar{
  public $weight;
  public function __construct($name, $color, $weight)
  {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "Автомобиль {$this->name} имеет цвет {$this->color}, а его вес {$this->weight} кг.";
  }
}

?>
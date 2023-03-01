<?php 
class Greet{

  public const PUBLIC_MESS = "Welcome to wm-school.ru"; 
  private const PRIVATE_MESS = 'Hello! I am private const';

  public function getConst()
  {
    return self::PRIVATE_MESS . '<br>';
  }

}

class Circle{
  const PI = 3.14;
  private $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function getSquare()
  {
    return 'Площадь круга с заданным радиусом: ' . self::PI * ($this->radius ** 2);
  }

  public function getCircuit()
  {
    return 'Длина окружности с заданым радиусом: ' . self::PI * 2 * $this->radius;
  }

}


?>
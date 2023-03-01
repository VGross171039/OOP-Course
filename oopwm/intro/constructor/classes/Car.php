<?php 

class Car{
  private $model = '';
  private $color = '';

  public function __construct($model = null, $color = null)
  {
    if($model){
      $this->model = $model;
    }
    if($color){
      $this->color = $color;
    }
  }

  public function setCarModel($model)
  {
    $this->model = $model;
  }

  public function setCarColor($color)
  {
    $this->color = $color;
  }
  
  public function getCarModel()
  {
    return 'Car Model: ' . $this->model;
  }

  public function getCarColor()
  {
    return 'Car Color: ' . $this->color;
  }

  public function getCarClassModel()
  {
    return " Имя класса: " . __CLASS__ . " модель: " . $this -> model;
  }


}


?>
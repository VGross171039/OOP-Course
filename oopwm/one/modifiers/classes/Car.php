<?php 
class CarTest{
  public $name;
  protected $color;
  private $disk;

}

class Car{
  private $model;

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getModel()
  {
    return 'Car model: ' . $this->model . '<br>';
  }

}

class CarSelect{
  private $model;

  public function setModel($model)
  {
    // Устанавливаем модели автомобилей, которые могут быть назначены свойству $model в виде массива
    $selectModel = array('Mersedes-Benz', 'BMW', 'Opel');

    if(in_array($model, $selectModel)){
      $this->model = $model;
    } else {
      $this->model = ' - нет в нашем списке моделей!';
    }

  }

  public function getModel()
  {
    return 'Car model: ' . $this->model . '<br>';
  }

}

?>
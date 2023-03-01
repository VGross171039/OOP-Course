<?php 
interface Car{
  public function setModel($model);
  public function getModel();
}

class miniCar implements Car{
  private $model;

  public function setModel($name)
  {
    $this->model = $name;
  }

  public function getModel()
  {
    return $this->model;
  }
}
?>

<?php 
interface MyInterfaceOne{
  public function myMethodOne();
}
interface MyInterfaceTwo{
  public function myMethodTwo();
}

class TestClass implements MyInterfaceOne, MyInterfaceTwo{
  public function myMethodOne()
  {
    echo 'Hello, ';
  }
  public function myMethodTwo()
  {
    echo 'world!';
  }
}
?>

<?php 
interface WriteInterface{
  public function write();
}

class ParentClass{
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
}

class ChildClass extends ParentClass implements WriteInterface{
  public function write()
  {
    echo $this->name;
  }
}

?>
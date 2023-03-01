<?php 
class Test{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
    echo 'Добро пожаловать, ' . $this->name . '<br>';
  }

  public function __destruct()
  {
    echo 'До завтра, ' . $this->name . '<br>';
  }

}

?>
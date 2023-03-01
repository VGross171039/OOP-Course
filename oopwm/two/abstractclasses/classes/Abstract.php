<?php 
abstract class ComponentInstall{
  public $name;
  public $active;
  public $path;

  abstract function getComponent();

  public function runComponent(){
    
  }
}

class TButton_install extends ComponentInstall{
  private $caption;
  public function getComponent()
  {
    return 'Установка кнопки завершена';
  }
}

class TEdit_install extends ComponentInstall{
  public $testingUI;
  public function getComponent()
  {
    return 'Установка текста завершена';
  }
}

?>
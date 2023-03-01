<?php 
class Car {
  public $name;
  public $color = 'green';

  // Setter. Установка значения (опускаем ключевое слово)
  function set_name($name){
    $this->name = $name;
  }
  function set_color($color){
    $this->color = $color;
  }

  // Getter. Вывод значения (опускаем ключевое слово)
  function get_name(){
    return $this->name;
  }
  function get_color(){
    return $this->color;
  }

  // Создание произвольного метода (указываем ключевое слово)
  public function hello()
  {
    return 'beep';
  }

}


?>
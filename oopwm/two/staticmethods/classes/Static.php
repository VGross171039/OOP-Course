<?php 
class MyStaticClass{
  public static function publicStaticMethod()
  {
    echo 'I am public static method';
  }

  private static function privateStaticMethod()
  {
    echo 'I am private static method';
  }

  protected static function protectedStaticMethod()
  {
    echo 'I am protected static method';
  }

}

class Car{
  public static function getColor(){
   return "blue";
  }
}

class SomeOtherClass {
  public function message() {
    echo (Car::getColor());
  }
}

?>
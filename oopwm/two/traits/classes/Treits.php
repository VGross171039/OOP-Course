<?php 
trait Reader{
  public function add($valueOne, $valueTwo)
  {
    return $valueOne + $valueTwo;
  }
}

class File{
  use Reader;
  public function calculate($valueOne, $valueTwo)
  {
    return $this->add($valueOne, $valueTwo) . '<br>';
  }
}

?>
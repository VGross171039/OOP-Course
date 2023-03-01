<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3 class="pb-05">Модификаторы доступа в PHP</h3>
<p>Задают область видимости для свойств и методов класса</p>
<p>Доступ к свойству private:</p>
Сеттеры — методы устанавливающие значения приватных свойств. <br>
Геттеры — методы, которые получают значения частных свойств. <br>

<ul class="my-05">
  <li><span class="accent">public</span>— свойство или метод доступны отовсюду. Это значение по умолчанию</li>
  <li><span class="accent">protected</span>— к свойству или методу можно получить доступ внутри класса и классов,
    производных от этого класса</li>
  <li><span class="accent">private</span>— свойство или метод могут быть доступны ТОЛЬКО внутри класса</li>
</ul>

<hr>

<?php 
$testCar = new CarTest();

$testCar->name = 'Жигули';
// $testCar->color = 'Yellow'; // ERROR
// $testCar->disk = 'Stamped'; // ERROR

print_arr($testCar);
?>

<hr>

<?php 
$bmw = new Car();

$bmw->setModel('BMW');
echo $bmw->getModel();

print_arr($bmw);
?>

<hr>

<?php 
$mersedes = new CarSelect();
$vaz = new CarSelect();

$mersedes->setModel('Mersedes-Benz');
echo $mersedes->getModel();

$vaz->setModel('VAZ-2107');
echo $vaz->getModel();

?>

<?php require_once $root . '/template/footer.php';?>
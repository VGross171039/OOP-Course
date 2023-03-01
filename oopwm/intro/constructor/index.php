<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3 class="pb-05">Что такое конструктор PHP?</h3>
<p class="pb-05">Функции-конструкторы — особый тип функций (принадлежащие к группе методов, известных как магические
  методы), которые, в отличие от других функций, вызываются автоматически при создании объекта</p>

<hr>

<?php 
$mycar = new Car();

$mycar->setCarModel('Mersedes');
$mycar->setCarColor('red');

echo $mycar->getCarModel() . '<br>';
echo $mycar->getCarColor() . '<br>';

?>

<h3>Магическая константа __CLASS__</h3>

<?php 
echo $mycar->getCarClassModel();

?>
<h3>Другие магические константы, которые могут пригодиться при разработке приложений</h3>
<ul>
  <li>__CLASS__— получить имя класса, в котором используется константа</li>
  <li>__LINE__ — получить номер строки, в которой используется константа</li>
  <li>__FILE__ — получить полный путь или имя файла, в котором используется константа</li>
  <li>__METHOD__ — получить имя метода, в котором используется константа</li>
</ul>

<?php require_once $root . '/template/footer.php';?>
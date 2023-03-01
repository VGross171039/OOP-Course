<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>
<?php require_once 'classes/Redefin.php';?>

<h3>Наследование. Общие принципы</h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      class ParentClass {

      }
      class ChildClass extends ParentClass {
        
      }
    </code>
  </pre>
</div>

<p class="py-05">Пример 1</p>

<?php 
$myCar = new MyCarExemple();
$myCar->setModel('Mersedes-Benz');
echo $myCar->hello();
?>

<h3>Собственные методы и свойства дочернего класса</h3>

<?php 
$myCar = new SportCar();
$myCar->setModel('Ferrary');
echo $myCar->driveStyle();
?>

<h3>Наследование и модификатор защищенного доступа</h3>

<?php 
$myCar = new ProtectedModelCar();
$myCar->setName('VAZ');
echo $myCar->hello();
?>

<p class="py-05">Пример с методами</p>

<?php 
$myCar = new MySportCar('Mercedes Benz', 'Красный');
$myCar->message();
?>

<hr>

<h3>Переопределение родительских свойств и методов</h3>

<?php 
$mycar = new RedefinCar('Mersedes-Benz', 'red');
echo $mycar->intro();
?>

<hr>

<?php 
$mycar = new NewSportcar('Maseratty', 'green', 1490);
echo $mycar->intro();

?>

<h3>Ключевое слово final <span>Ключевое слово final может быть использовано для предотвращения наследования класса или
    для предотвращения переопределения метода.</span></h3>

<div class="code-exsemple">
  <p>Предотвратить наследование класса</p>
  <pre>
    <code>
      final class Car {
        // какой-то код
      }

      // приведет к ошибке
      class SportsCar extends Car {
        // какой-то код
      }
    </code>
  </pre>

  <p>Предотвратить переопределение метода</p>
  <pre>
    <code>
      class Car {
        final public function intro() {
        // какой-то код
        }
      }

      class SportsCar extends Car {
        public function intro() { // приведет к ошибке
          // какой-то код
        }  
      }
    </code>
  </pre>
</div>


<?php require_once $root . '/template/footer.php';?>
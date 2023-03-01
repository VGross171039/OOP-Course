<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Classes.php';?>

<h3>Что такое интерфейс
  <span class="mt-05">Интерфейсы представляют собой классы, у которых все методы являются
    публичными и не
    имеющими реализации. Код методов должны реализовывать классы-потомки интерфейсов</span>
  <span class="mt-05">Нельзя создать объект интерфейса. Все методы интерфейса должны быть объявлены как public и не
    должны иметь реализации. У интерфейса могут
    быть только методы, но не свойства. Нельзя также сделать интерфейс и класс с одним и тем же названием</span>
  <span class="mt-05">Все методы в интерфейсе являются абстрактными, поэтому они не могут быть реализованы в коде, и
    ключевое слово abstract не требуется</span>
</h3>

<div class="code-exsemple">
  <p class="mb-05">Пример синтаксиса 1</p>
  <pre>
    <code>
      Interface MyFirstInterface {
        const BAR = 'BAR';

        public function doSomething($param1, $param2);
      }
    </code>
  </pre>
</div>

<h3>Реализация интерфейса</h3>

<div class="code-exsemple">
  <p class="mb-05">Пример синтаксиса 2</p>
  <pre>
    <code>
      interface interfaceName { 
        // абстрактные методы
      }
      
      class Child implements interfaceName {
        // определяет методы интерфейса и может иметь собственный код
      }
    </code>
  </pre>
</div>
<hr>
<?php 
$myCar = new miniCar();
$myCar->setModel('Mersedes-Benz');
echo $myCar->getModel();
?>
<hr>
<?php 
$object = new TestClass();
$object->myMethodOne();
$object->myMethodTwo();
?>
<hr>
<?php 
$child = new ChildClass('Vladlen Schetinin');
$child->write();
?>

<h3>Расширение интерфейсов</h3>

<div class="code-exsemple">
  <p class="mb-05">Пример расширения интерфейсов</p>
  <pre>
    <code>
      Interface MyInterface1 {
        public function myMethod1();
      }
      Interface MyInterface2 extends MyInterface1 {
        public function myMethod2();
      }
      class MyClass1 implements MyInterface1 {
        # нужен только этот метод
        public function myMethod1() {}
      }
      class MyClass2 implements MyInterface2 {
        # должны быть объявлены как myMethod1, так и myMethod2
        public function myMethod1() {}
        public function myMethod2() {}
      }
    </code>
  </pre>
</div>

<p><a href="https://www.code.mu/ru/php/book/oop/interfaces/intro/" target="_blank">Дополнительные материалы</a></p>

<?php require_once $root . '/template/footer.php';?>
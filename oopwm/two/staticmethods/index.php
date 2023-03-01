<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Static.php';?>

<h3>Статические методы<span>В некоторых случаях удобно обращаться к методам и свойствам в терминах класса, а не объекта
    — без предварительного создания экземпляра класса</span><span>Статический метод необходимо использовать только
    тогда, когда конкретная информация остается неизменной для всего класса</span>
</h3>

<div class="code-exsemple">
  <p class="mb-05">Синтаксис</p>
  <pre>
    <code>
      class ClassName {
        public static function staticMethod() {
        // некоторый код...
        }
      }
    </code>
  </pre>
</div>

<hr>

<?php 
echo MyStaticClass::publicStaticMethod() . '<br>';
// echo MyStaticClass::privateStaticMethod() . '<br>';
//echo MyStaticClass::protectedStaticMethod() . '<br>';
?>

<?php 
$someotherclass = new SomeOtherClass();
$someotherclass->message();

?>


<?php require_once $root . '/template/footer.php';?>
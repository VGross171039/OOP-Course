<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Const.php';?>

<h3>Константа класса PHP
  <span>Объявляются в пределах одного класса. При объявлении не используется символ $</span>
  <span> Область видимости по умолчанию public, при определении могут использоваться другие
    модификаторы</span>
</h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      class Test {
        /*Задаем константу:*/
        const CONSTANT = 'значение константы';
      }
    </code>
  </pre>
</div>

<h3>Доступ к константе класса</h3>

<?php 
echo Greet::PUBLIC_MESS . '<br>';

$const = new Greet();
echo $const->getConst();

?>

<h3>Применение</h3>

<?php 
$value = new Circle(12);
echo $value->getSquare() . '<br>';
echo $value->getCircuit() . '<br>';

?>

<?php require_once $root . '/template/footer.php';?>
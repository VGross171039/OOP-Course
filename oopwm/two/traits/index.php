<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Treits.php';?>

<h3>Что такое трейты?<span>Трейты (англ. trait) используются для объявления методов, которые можно использовать в
    нескольких классах. Трейты могут иметь методы и абстрактные методы, которые могут использоваться в нескольких
    классах. Методы трейтов могут иметь любой модификатор доступа (публичный, приватный или
    защищенный)</span><span>Экземпляр трейта, как и абстрактного класса, нельзя создать — трейты предназначены только
    для подключения к другим классам</span>
</h3>

<div class="code-exsemple">
  <p class="mb-05">Синтаксис</p>
  <pre>
    <code>
      trait TraitName {
        // некоторый код...
      }
    </code>
  </pre>
</div>

<div class="code-exsemple">
  <p class="mb-05">Подключение</p>
  <pre>
    <code>
      class MyClass {
        use TraitName;
      }
    </code>
  </pre>
</div>

<?php 
$summ = new File();
echo $summ->calculate(23, 76);


?>


<?php require_once $root . '/template/footer.php';?>
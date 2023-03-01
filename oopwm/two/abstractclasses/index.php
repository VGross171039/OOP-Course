<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Abstract.php';?>

<h3>Объявление абстрактных классов</h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      abstract class ParentClass { /* ... */ }
    </code>
  </pre>
</div>

<h3>Объявление абстрактных методов</h3>

<?php 
// $button = new ComponentInstall();  // ERROR

// $button = new TButton_install();

// print_arr($button);

$components = array();
$components[0] = new TButton_install();
$components[1] = new TEdit_install();

print_arr($components);

?>

<a href="https://www.youtube.com/watch?v=GRC2p4sGTYw" target="_blank">Видеоурок</a>

<?php require_once $root . '/template/footer.php';?>
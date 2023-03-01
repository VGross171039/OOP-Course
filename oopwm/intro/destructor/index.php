<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Test.php';?>
<?php require_once 'classes/Fruit.php';?>

<?php 
$user = new Test('Vladlen');
$apple = new Fruit('Apple', 'red');
?>

<?php require_once $root . '/template/footer.php';?>
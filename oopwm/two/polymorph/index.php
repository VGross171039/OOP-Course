<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Polimorph.php';?>

<?php 
$circ = new Circle(30);
$rest = new Rectangle(50, 40);

echo 'Площадь круга: ' . $circ->calcArea() . ' кв. см' . '<br>';
echo 'Площадь прямоугольника: ' . $rest->calcArea() . ' кв. см' . '<br>';


?>

<?php require_once $root . '/template/footer.php';?>
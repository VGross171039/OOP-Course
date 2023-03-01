<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Цепочки методов и свойств в PHP</h3>

<?php 
$mycar = new Car;

$tank = $mycar -> fill(10) -> ride(40) -> tank;

echo "Количество литров, оставшихся в баке: " . $tank;

print_arr($mycar);

?>

<hr>

<?php require_once $root . '/template/footer.php';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Классы и объекты в PHP</h3>

<?php 
$sample = new Car;
print_arr($sample);

// Создаем экземпляры класса (объекты)
$bmw = new Car;
$mersedes = new Car;

// Пример вывода значения свойств
echo $bmw->color . '<br>';
echo $mersedes->color . '<br>';

// Установка значений color напрямую
// $bmw->color = 'red';
// $mersedes->color = 'yellow';
// ====================================
// Установка значений name напрямую
// $bmw->name = 'BMW';
// $mersedes->name = 'Mercedes Benz';

// Установка значения name через setter
$bmw->set_name('BMW');
$mersedes->set_name('Mersedes-Benz');
// Установка значения color через setter
$bmw->set_color('red');
$mersedes->set_color('yellow');

// вывод значения name через getter
echo $bmw->get_name() . '<br>';
echo $mersedes->get_name() . '<br>';
// вывод значения color через getter
echo $bmw->get_color() . '<br>';
echo $mersedes->get_color() . '<br>';


print_arr($bmw);
print_arr($mersedes);

// Используем метод hello()
echo $bmw->hello() . '<br>';
echo $mersedes->hello() . '<br>'

?>

<h3>Является ли объект экземпляром класса? <span>Оператор instanceof используется для определения того, является ли
    текущий объект экземпляром указанного класса</span></h3>

<?php 
var_dump($bmw instanceof Car);

?>

<p>Да, обьект $bmw является экземпляром класса Car</p>


<?php require_once $root . '/template/footer.php';?>
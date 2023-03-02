<h2 style="margin-top: 1rem;">Геттеры и сеттеры</h2>
<?php 
use getsetters\classes\Getsetters\Student;

require_once 'classes/Getsetters.php';

$student = new Student('Vladlen', 'Schetinin');

echo $student->getFullName();
echo '<br>';

// ================ Тестирование set и get =================

echo $student->status = 1;
echo '<br>';

// ================ Тестирование invoke =================

$student(); // Выведет - I am invoke
echo '<br>';

// ================ Тестирование toString =================

echo $student;
echo '<br>';

// ================ Тестирование call =================

echo $student->getAddress('123', 15);
echo '<br>';

?>
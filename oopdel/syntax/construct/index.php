<h2 style="margin-top: 1rem;">Методы и конструктор</h2>
<?php 
use construct\classes\Student\Student;

require_once 'classes/Student.php';

$student = new Student('Vasya', 'Pupkin');

echo $student->getFullName() . '<br>';

$student->rename('Vladlen', 'Schetinin');
echo $student->getFullName();

?>
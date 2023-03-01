<h2 style="margin-top: 1rem;">Методы</h2>
<?php 
use getsetters\classes\Student\Student;

require_once 'classes/Student.php';

$student = new Student();

// $student->firstName = 'Vladlen';   //  Только для публичных свойств
// $student->lastName = 'Schetinin';  //  Только для публичных свойств

$student->setFirstName('Vladlen');
$student->setLastName('Schetinin');

echo $student->getFullName() . '<br>';

$student->rename('Petya', 'Sidorov');
echo $student->getFullName();

?>
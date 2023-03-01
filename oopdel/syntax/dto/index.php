<h2>DTO</h2>
<?php 
use classes\Student\Student;

require_once 'classes/Student.php';

$student = new Student();

$student->firstName = 'Vladlen';
$student->lastName = 'Schetinin';

echo $student->getFullName();

?>
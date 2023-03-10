<h2 style="margin-top: 1rem;">Аргументы методов</h2>
<?php
use optional\classes\Aeguments\Student;

require_once 'classes/Arguments.php';

$student = new Student('Schetinin', 'Vladlen');

echo $student->getFullName();

?>
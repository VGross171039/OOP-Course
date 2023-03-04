<h2 style="margin-top: 1rem;">Константы</h2>
<?php 
use constants\classes\ConstIntro\Student;

use function constants\classes\ConstIntro\typesList;

require_once 'classes/ConstIntro.php';

$student = new Student('Schetinin', 'Vladlen');

echo $student::TYPE_OCHN;  //  :: - позволяет обращаться к хранящемуся в классе

Student::$val = 12;

echo '<pre>';
print_r(Student::typesList());
echo '</pre>';

?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>
<?php require_once 'classes/Student.php';?>

<?php 

$student = new Student();

$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';
echo $student->getFullName() . '<br>';

?>


<?php require_once $root . '/template/footer.php'; ?>
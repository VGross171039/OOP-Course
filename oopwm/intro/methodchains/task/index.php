<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>

<?php 
class User{
  public $firstName;

  public function hello()
  {
    echo 'Hello, ' . $this->firstName . '!';
    return $this;
  }

  public function register()
  {
    echo " >> registered";
    return $this;
  }

  public function mail()
  {
    echo " >> email sent";
  }
 
}

$newUser = new User;
$newUser->firstName = 'Vladlen';

$newUser -> hello() -> register() -> mail();

print_arr($newUser);


?>

<?php require_once $root . '/template/footer.php';?>
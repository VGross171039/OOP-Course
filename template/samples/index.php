<?php
// Проверка в регулярном вражении
if (preg_match("/tasks/i", $_SERVER['REQUEST_URI'])) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
?>

<?php if (preg_match("/tasks/i", $_SERVER['REQUEST_URI'])):?>
<title>Задачи по PHP | <?php echo $task;?></title>
<?php else:?>
<title>PHP-course | <?php echo $title;?></title>
<?php endif;?>

<?php 
$now = time();
$target = strtotime("1965-11-08"); 
$datediff = $now - $target; 
$floor = floor($datediff / (60 * 60 * 24)); 
?>

<?php 
if(!empty($_POST)){
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
}
?>

<?php if(!empty($_POST)):?>
<pre>
  <?php print_r($_POST);?>
</pre>
<?php endif;?>

<ul class="src pt-05">
  <li class="fw-600"><span>Ссылки на документацию</span></li>
  <li><a target="_blanc" href="">Name source 1</a></li>
  <li><a target="_blanc" href="">Name source 2</a></li>
</ul>
<li><a href="https://www.php.net/manual/ru/langref.php" target="_blank">Общая информация</a>
</li>

<?php if (preg_match("/oopwm/i", $_SERVER['REQUEST_URI'])):?>
<li class="mb-1"><?php require_once $root . '/template/inc/tasks/taskwm.php';?></li>
<?php endif;?>

<?php if (preg_match("/oopwm/i", $_SERVER['REQUEST_URI'])):?>
<?php require_once 'textbooks/oopwm.php';?>
<?php endif;?>
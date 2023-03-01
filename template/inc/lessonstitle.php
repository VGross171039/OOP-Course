<?php if ($_SERVER["REQUEST_URI"] == '/') :
  $title = 'Главная';
endif;

if ($_SERVER["REQUEST_URI"] == '/testing/') :
  $title = 'Тестовая страница';
endif;

if (preg_match("/oopwm/i", $_SERVER['REQUEST_URI'])):
require_once 'title/oopwm.php';
endif;

if (preg_match("/oopdel/i", $_SERVER['REQUEST_URI'])):
require_once 'title/oopdel.php';
endif;
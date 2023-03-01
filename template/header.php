<?php error_reporting(-1); ?>
<?php require_once $root . '/template/init.php'; ?>
<?php require_once $root . '/template/inc/lessonstitle.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OOP PHP | <?php echo $title; ?></title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/grid.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="page-wrap">
    <header class="header">
      <div class="container">
        <div class="col-50">
          <h1><a href="/">OOP </a>
            <?php if (preg_match("/oopdel/i", $_SERVER['REQUEST_URI'])):?>
            <span class="px-05">|</span> Course DEl
            <?php elseif (preg_match("/oopwm/i", $_SERVER['REQUEST_URI'])):?>
            <span class="px-05">|</span> WM School
            <?php endif;?>
          </h1>
          <h3 class="mydata">Если шаг за шагом медленно двигаться в одном направлении - результаты могут оказаться
            удивительными.</h3>
          <p><?php echo $title; ?></p>
        </div>
        <div class="col-50">
          <div class="testbanner">
            <a href="/testing/">Testing Page</a>
          </div>
        </div>
      </div>
    </header>
    <div class="content-wrap">
      <?php if ($_SERVER["REQUEST_URI"] == '/') : ?>
      <div class="container">
        <?php else : ?>
        <div class="col-100">
          <?php endif ;?>
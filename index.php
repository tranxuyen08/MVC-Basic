<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

  echo '<h1> MVC </h1>';

  require_once('libs/Boostrap.php');
  require_once('libs/Controller.php');
  require_once('libs/View.php');
  $boostrap = new Boostrap();
?>
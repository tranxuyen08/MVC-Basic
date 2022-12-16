<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once ('define.php');
  function __autoload($className){
    $path = 'libs/';
    require_once LIBRARY_PATH . "{$className}.php";
  }
  $boostrap = new Boostrap();
?>
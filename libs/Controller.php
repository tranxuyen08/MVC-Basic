<?php
class Controller
{
  public $db;

  public function __construct($model)
  {
    $this->view = new View();
    $this->loadModel($model);
  }

  public function loadModel($name)
  {
    $path = MODEL_PATH . $name . '_model.php';
    $modelName = ucfirst($name). '_Model';
    if (file_exists($path)) {
      require_once $path;
      $this->db = new $modelName();
    }
  }
  public function redirect($controller = 'index', $action = 'index'){
    header("location: index.php?controller=$controller&action=$action");
    exit();
  }
}


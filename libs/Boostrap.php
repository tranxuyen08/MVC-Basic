<?php
class Boostrap
{
  public function __construct()
  {
    $controllerURL = (!empty($_GET['controller'])) ? $_GET['controller'] : 'index';
    $actionURL = (!empty($_GET['action'])) ? $_GET['action'] : 'index';

    $controllerName = ucfirst($controllerURL);

    $file = 'controllers/' . $controllerURL . '.php';
    if (file_exists($file)) {
      require_once $file;
      $controller = new $controllerName();
      if (method_exists($controller, $actionURL) == true) {
        $controller->$actionURL();
        $controller->loadModel($controllerURL);
      } else {
        $this->error();
      }
    } else {
      $this->error();
    }
  }

  public function error() {
    require_once __DIR__ . '/../controllers/error.php';
    $error = new MVCError();
    $error->index();
  }
}

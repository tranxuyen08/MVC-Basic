<?php
require_once 'libs/Controller.php';
class Group extends Controller{
  public function index() {
    $this->view->render('group/index',false);
  }
}
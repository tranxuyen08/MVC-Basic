<?php
require_once 'libs/Controller.php';
class Index extends Controller{
  public function __construct()
  {
    parent::__construct();
  }
  public function index() {
    $this->view->render('index/add');
  }
  public function add() {
  }
}
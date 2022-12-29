<?php
class Index extends Controller{
  public function __construct()
  {
    parent::__construct('index');
  }
  public function index() {
    $this->view->render('index/index');
  }
}
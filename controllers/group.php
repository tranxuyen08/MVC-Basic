<?php
class Group extends Controller{
  public function __construct()
  {
    parent::__construct('group');
    Auth::checkLogin();
  }

  public function index(){
    $this->view->render('group/index');
    $list_products = $this->db->listItems();
    var_dump($list_products);
  }

}
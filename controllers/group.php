<?php
class Group extends Controller{
  public function __construct()
  {
    parent::__construct('group');
    Auth::checkLogin();
  }

  public function index(){
    $this->view->items = $this->db->listItems();
    $this->view->render('group/index');
  }

}
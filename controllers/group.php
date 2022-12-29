<?php
class Group extends Controller{
  public function __construct()
  {
    parent::__construct('group');
    Auth::checkLogin();
  }

  public function index(){
    $this->view->js = array('group/js/group.js');
    $this->view->css = array('group/css/group.css');
    $this->view->items = $this->db->listItems();
    $this->view->render('group/index');
  }
  public function delete(){
   if(isset($_POST['id']))$this->db->deleteItem($_POST['id']);

  }
}
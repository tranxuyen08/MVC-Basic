<?php
class User extends Controller
{
  public function __construct()
  {
    parent::__construct('user');
    Session::init();
  }

  public function login()
  {
    if(Session::get('loggedIn')== true){
      $this->redirect('group', 'index');
    }
    if (!empty($_POST['submit'])) {
      $source = array('username' => $_POST['username']);
      $username = $_POST['username'];
      $password = $_POST['password'];
      $validate = new Validate($source);
      $validate->addRule('username', 'existRecord', array('database' => $this->db, 'query' => "SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$password'"));
      $validate->run();
			if($validate->isValid() == true){
				Session::set('loggedIn', true);
				$this->redirect('group','index');
			}else{
				$this->view->errors = $validate->showErrors();
			}
    }
    $this->view->render('user/login');
  }
  public function logout()
  {
    $this->view->render('user/logout');
    Session::destroy();
  }
}

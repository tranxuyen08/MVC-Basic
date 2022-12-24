<?php
class User extends Controller
{
  public function __construct()
  {
    parent::__construct();
    Session::init();
  }

  public function login()
  {
    if (Session::get('loggedIn') == true) {
      $this->redirect('group', 'index');
    }
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $source = array('username' => $_POST['username']);
      $validate = new Validate($source);
      $validate->addRule('username', 'existRecord', array('database' => $this->db, 'query' => "SELECT * FROM users WHERE username = $username AND password = $password"));

      // $validate->run();
      // if($validate->isValid()==true){
      //   echo 'success';
      // }else{
      //  $this->view->errors = $validate ->showErrors();
      // }

      if ($username == 'tranxuyen' & $password == 123123) {
        Session::set('loggedIn', true);
        $this->redirect('group', 'index');
        Session::destroy();
      } else {
        echo 'error';
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

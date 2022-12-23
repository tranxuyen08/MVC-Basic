<?php
class Login extends Controller
{

  public function index()
  {
    echo Session::get('loggedIn');
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

      if($username == 'tranxuyen' & $password == 123123){
        Session::init();
        Session::set('loggedIn', true);
        header('location: index.php?controller=group&action=index');
        exit();
        Session::destroy();

      }else{
        echo 'error';
      }
    }
    $this->view->render('login/index');
  }
}

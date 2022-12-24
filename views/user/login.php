<div class="content">
  <h3>Login</h3>
  <?php
    echo $error = !empty($this->errors) ? ($this->errors) : '';
  ?>
  <form action="index.php?controller=user&action=login" method="POST" name="form-login" id="form-login">
    <div class="row">
      <p>User Name :</p>
      <input type="text" name="username" placeholder="Enter Your user Name">
    </div>
    <div class="row">
      <p>Password :</p>
      <input type="password" name="password" placeholder="Enter your password">
    </div>
    <div class="row">
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>
</div>
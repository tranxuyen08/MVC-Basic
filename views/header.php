<?php
  $cssURL = PUBLIC_URL . 'css' .DS;
  $jsURL = PUBLIC_URL . 'js' .DS;
  Session::init();

	$menu = '<a class="index" href="index.php?controller=index&action=index">Home</a>';
	if(Session::get('loggedIn') == true){
		$menu .= '<a class="group" href="index.php?controller=group&action=index">Group</a>';
		$menu .= '<a class="user" href="index.php?controller=user&action=logout">Logout</a>';
	}else{
		$menu .= '<a class="login" href="index.php?controller=user&action=login">Login</a>';
	}

	if(!empty($this->js)){
		foreach($this->js as $js) {
			$fileJs .= '<script type="text/javascript" src="'.VIEW_URL.$js.'"></script>';
		}
	}
  if(!empty($this->css)){
		foreach($this->css as $css) {
			$fileCss .= '<link rel="stylesheet" type="text/css" href="'.VIEW_URL.$css.'" >';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $cssURL ?>style.css">
  <script type="text/javascript" src="<?php echo $jsURL ?>jquery.js"></script>
  <script type="text/javascript" src="<?php echo $jsURL ?>custom.js"></script>
  <?php echo $fileJs ?>
  <?php echo $fileCss ?>
  <title>MVC</title>
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <h3>Header</h3>
     <?php echo $menu ?>
    </div>
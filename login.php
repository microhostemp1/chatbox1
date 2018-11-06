<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rest Api Chatbox</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Raleway|Roboto|Oswald:400:300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/animated.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>   
<div class="container">
<div class="row" id="pwd-container">
<div class="col-md-4 col-md-offset-4">
<section class="login-form">
<form method="POST" action="user/read.php" role="login">
<img src="img/logo-white.png" alt="MicroHost - Cloud Compute" class="dark" style="height:50px; width:200px;">
<?php
session_start();
if(!empty($_SESSION['message'])) { ?>
<div class="alert alert-danger">
  <strong><i class="fa fa-ban"></i></strong> <?php echo $_SESSION['message'];?>.
</div>
 <?php
session_destroy (); 
}
 ?>
<input type="text" name="username" placeholder="username" required class="form-control input-lg" value="" />
<input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password" required="" />
<div class="pwstrength_viewport_progress"></div>
<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
</form>
</section>  
</div>
</div>    
</div>
</body>
</html>
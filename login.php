<?php include('server.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet " href="css/login.css">
  <title>Que - Register</title>
</head>
<body>
<header class="showcase">
  <nav class="showcase-top">
    <img src="https://i.ibb.co/PhV9DKs/logo.png" alt="Que">
    <a href="index.php" class="btn btn-rounded">Home <i class="fas fa-home"></i></a>
  </nav>

<div class="container container-flex" id="container">
  <div class="form-container sign-up container">
    <form method="post" action="valid.php">
    <!-- validation errors-->
    <?php include('errors.php'); ?>
<h1>Login</h1>
    <div class="social-container">
      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <span>or use your account</span>
    <input type="text" class="input" name="username" placeholder="Full Name" >
    <input type="password" class="input" name="password" placeholder="Password"> &nbsp;
    <button type="submit" value="Login" name="login">Login</button>
    <p align="center">New here? <a href = "register.php">Register</a></p>
    </div>
</div>

</form>
</body>
</html>
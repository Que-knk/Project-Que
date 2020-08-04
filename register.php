<?php include('server.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet " href="css/style.css">
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
    <form method="post" action="register.php">
    <!-- validation errors-->
    <?php include('errors.php'); ?>
    <h1>Registration Form</h1>
    <div class="social-container">
      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <span>or use your email for registration</span>
    
      <input type="text" class="input" name="username" value="<?php echo $username; ?>" placeholder="Full Name">
      <input type="password" class="input" name="password_1" placeholder="Password">
      <input type="password" class="input" name="password_2" placeholder="Confirm Password">
      <input type="text" class="input" name ="email" value="<?php echo $email; ?>" placeholder="Email">
      <input type="text" class="input" name="phone" placeholder="Phone Number">
      <input type="text" class="input" name="postal" placeholder="Postal Code"> &nbsp;
      <button type="submit" value="Register" name="register">Register</button>
      <p align="center">Already a user? <a href = "login.php">Login here</a></p>
    </form>
  </div>
</div>
</header>
</body>
</html>
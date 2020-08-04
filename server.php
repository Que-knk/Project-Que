<?php 
	session_start();

	$username = "";
	$email = "";
	$errors = array();
	// connecting the db
	$db = mysqli_connect('localhost', 'root', '', 'queregistration');

	//register click
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		$phone = $_POST['phone']; 
		$postal = $_POST['postal']; 

		//required and stuff
		if(empty($username)){
			array_push($errors, "Username is required");
		}
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		if(empty($password_1)){
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2){
			array_push($errors, "Confirmed password doesn't matches");
		}
		if(empty($phone)){
			array_push($errors, "Phone is required");
		}
		if(empty($postal)){
			array_push($errors, "Postal is required");
		}


		//if no error, save to db
		if(count($errors)==0){
			$password = md5($password_1); //encryption
			$sql = "INSERT INTO users (username, email, password, phone, postal)
						VALUES ('$username', '$email', '$password', '$phone', '$postal')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "you are logged in";
			header('location: valid.php'); //redirect to homepage
		}
	}

	//login from login page
	
	if (isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		//required and stuff
		if(empty($username)){
			array_push($errors, "Username is required");
		}
		if(empty($password)){
			array_push($errors, "Password is required");
		}

		if(count($errors) == 0){
			$password = md5($password); //encryption
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){ 
				//login
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "you are logged in";
				header('location: valid.php'); //redirect
			}
			else{
				array_push($errors, "incorrect credentials");
				
			}
 		}
	}

	//logout
	if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
 ?>
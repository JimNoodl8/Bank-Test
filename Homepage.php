<?php 
session_start();

	include("Connection.php");
	include("Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result) {
				if($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password) {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Statuspage.php");
						die;
					}
				}
			}
			
			echo "<p id='error'>" . "<b>" . "Incorrect username or password." . "</b>" . "</p>";
		} else {
			echo "<p id='error'>" . "<b>" . "Please fill in the text fields." . "</b>" . "</p>";
		}
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
		<img id="logohome" src="Images/Logo.png" alt="Icon" class="icon" width="392.242" height="220">
		<div id="rectanglehome" class="round"></div>
		<a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>

		<input id="checkbox" type="checkbox" onclick="myFunction()"> <p id="showpass">Show Password</p>
		<script>
		function myFunction() {
			var x = document.getElementById("pass");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
		</script>
		
		<div>
			<form method="post">
				<input id="user" type="text" name="user_name" placeholder="Username">
				<input id="pass" type="password" name="password" placeholder="Password">
				<input id="login" type="submit" value="Login">
			</form>
		</div>

		<div>
			<form action="Register.php">
				<input id="createaccount" type="submit" value="Create Account">
			</form>
		</div>
		
	</body>	

</html>
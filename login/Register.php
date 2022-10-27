<?php 
session_start();

	include("Connection.php");
	include("Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$firstlastname = $_POST['firstlastname'];

		if(!empty($user_name) && !empty($password) && !empty($firstlastname) && !is_numeric($user_name)) {
			$user_id = random_num10(10);
			$pin = random_num4(4);
			$checkingroute = random_num16(16);
			$query = "insert into users (user_id,user_name,password,firstlastname,pin,checkingroute) values ('$user_id','$user_name','$password','$firstlastname','$pin','$checkingroute')";

			mysqli_query($con, $query);

			header("Location: Homepage.php");
			die;
		} else {
			echo "<p id='regerror'>" . "<b>" . 
			"Please fill in the text fields." . "</b>" . "</p>";
		}
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Signup</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<img id="background" src="Images/Background.png" alt="Background" class="background" width="1850" height="1040.625">
		<img id="logomid" src="Images/Logo.png" alt="Icon" class="icon" width="326" height="179">
		<div id="rectanglereg" class="round"></div>
		<a href="Homepage.php"><img id="headericon" src="Images/Logo.png" alt="Icon" class="icon" width="127.486" height="70"></a>
		<div id="header" class=""></div>

		<div>
			<form method="post">
				<input id="flname" type="text" name="firstlastname" placeholder="First and Last Name">
				<input id="reguser" type="text" name="user_name" placeholder="Create Username">
				<input id="regpass" type="text" name="password" placeholder="Create Password">
				<input id="register" type="submit" value="Register">
			</form>
		</div>

	</body>

</html>
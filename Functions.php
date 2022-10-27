<?php

function check_login($con) {

	if(isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	header("Location: Homepage.php");
	die;

}

function random_num4($length) {
	$text = "";
	if($length = 4) {
		$text .= rand(1000,9999);
	}
	return $text;
}

function random_num10($length) {
	$text = "";
	if($length = 10) {
		$text .= rand(1111111111,9999999999);
	}
	return $text;
}

function random_num16($length) {
	$text = "";
	if($length = 16) {
		$text .= rand(1111111111111111,9999999999999999);
	}
	return $text;
}
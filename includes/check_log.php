<?php
session_start();
include "db_connect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {


	$email = $_POST['email'];
	$password = $_POST['password'];

if (empty($email)) {
	header("Location: ../login.php?error=Email is Required");
} elseif (empty($password)) {
	header("Location: ../login.php?error=Password is Required");
} else {

	$sql = "SELECT * FROM users WHERE ( email = '$email') AND password='$password'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) === 1) {
		// the user name must be unique
		$row = mysqli_fetch_assoc($result);
		if ($row['password'] === $password) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];	
			$_SESSION['email'] = $row['email'];
			$_SESSION['role'] = $row['role'];

			header("Location: ../index-2.php");
		} else {
			header("Location: ../login.php?error=Incorect User name or password");
		}
	}
	else {
		header("Location: ../login.php?error=Incorect Email or password");
	}
}

}
	
?>
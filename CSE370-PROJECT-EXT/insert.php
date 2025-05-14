<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
	// write the query to check if this username and password exists in our database
	$u = $_POST['name'];
	$p = $_POST['email'];
	$c = $_POST['phone'];
	$a = $_POST['username'];
	$b = $_POST['password'];
	$d = $_POST['confirmPassword'];

	$s = " INSERT INTO user  VALUES ('$a', '$u', '$p', '$c') ";
	$sql = " INSERT INTO auth VALUES( '$a', '$b') ";

	if ($b == $d) {
		//Execute the query 
		$result = mysqli_query($conn, $s);
		$r = mysqli_query($conn, $sql);

		//check if this insertion is happening in the database
		if (mysqli_affected_rows($conn)) {

			echo "Account Creation Successful";
			// header("Location: login.php");
		} else {
			echo "Account Creation Failed";
		}
	} else {
		echo "Passwords do not match";
	}
}

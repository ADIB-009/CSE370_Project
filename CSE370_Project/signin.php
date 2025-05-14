<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['username']) && isset($_POST['password'])) {
	// write the query to check if this username and password exists in our database
	$u = $_POST['username'];
	$p = $_POST['password'];
	$sql = "SELECT * FROM auth WHERE user_id = '$u' AND password = '$p'";

	//Execute the query 
	$result = mysqli_query($conn, $sql);

	//check if it returns an empty set
	if ($u == "adminnn") {
		if (mysqli_num_rows($result) != 0) {

			// echo "LET HIM ENTER";
			header("Location: adminpanel.php");
		} else {
			echo "Username or Password is invalid\nCreate an account if you don't have one";
			// header("Location: login.php");
		}
	} else {
		if (mysqli_num_rows($result) != 0) {

			// echo "LET HIM ENTER";
			header("Location: build.php");
		} else {
			echo "Username or Password is invalid\nCreate an account if you don't have one";
			// header("Location: login.php");
		}
	}
}

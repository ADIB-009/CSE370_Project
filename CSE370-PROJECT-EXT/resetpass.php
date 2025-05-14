<?php
require_once('dbconnect.php');
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
    // write the query to check if this username and password exists in our database
    $u = $_POST['username'];
    $p = $_POST['password'];
    $x = $_POST['cpassword'];

    
    
    //Execute the query 
    if ($p == $x) {
        $sql = "UPDATE auth SET password = '$p' WHERE user_id = '$u'";
        $result = mysqli_query($conn, $sql);

        //check if it returns an empty set
        echo "Password Updated";
        // header("Location: build.php");
    } else {
        echo "Passwords does not match";
        // header("Location: login.php");
    }

}



?>
<?php
require_once('dbconnect.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    // write the query to check if this username and password exists in our database
    $u = $_POST['username'];
    $p = $_POST['password'];
    $sql = "delete from auth where user_id = '$u' and password = '$p'";
    $s = "delete from user where user_id = '$u'";


    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $s);

    //Execute the query 
    if ($result) {

        //check if it returns an empty set
        echo "Account Deleted";
        // header("Location: build.php");
    } else {
        echo "Deletion Failed";
        // header("Location: login.php");
    }

}



?>
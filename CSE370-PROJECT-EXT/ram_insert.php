<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['ram_sku']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['memory_type']) && isset($_POST['frequency']) && isset($_POST['latency']) && isset($_POST['capacity'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['ram_sku'];
    $u = $_POST['brand'];
    $p = $_POST['price'];
    $c = $_POST['memory_type'];
    $b = $_POST['frequency'];
    $d = $_POST['latency'];
    $e = $_POST['capacity'];   

    $s = " INSERT INTO ram  VALUES ('$a', '$u', '$p', '$c', '$b', '$d', '$e') ";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "New RAM Added!!";
        // header("Location: login.php");
    } else {
        echo "RAM Insertion Failed";
    }
}

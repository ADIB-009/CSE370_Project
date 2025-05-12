<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['cpu_sku']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['core']) && isset($_POST['thread']) && isset($_POST['base_clock']) && isset($_POST['boost_clock'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['cpu_sku'];
    $u = $_POST['brand'];
    $p = $_POST['price'];
    $c = $_POST['core'];
    $b = $_POST['thread'];
    $d = $_POST['base_clock'];
    $e = $_POST['boost_clock'];   

    $s = " INSERT INTO cpu  VALUES ('$a', '$u', '$p', '$c', '$b', '$d', '$e') ";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "New CPU Added!!";
        // header("Location: login.php");
    } else {
        echo "CPU Insertion Failed";
    }
}

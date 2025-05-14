<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['s_sku']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['type']) && isset($_POST['read_speed']) && isset($_POST['write_speed']) && isset($_POST['capacity'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['s_sku'];
    $u = $_POST['brand'];
    $p = $_POST['price'];
    $c = $_POST['type'];
    $b = $_POST['read_speed'];
    $d = $_POST['write_speed'];
    $e = $_POST['capacity'];   

    $s = " INSERT INTO storage  VALUES ('$a', '$u', '$p', '$c', '$b', '$d', '$e') ";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "New Storage Added!!";
        // header("Location: login.php");
    } else {
        echo "Storage Insertion Failed";
    }
}

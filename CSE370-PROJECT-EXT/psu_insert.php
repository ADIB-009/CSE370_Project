<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['pwr_sku']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['capacity']) && isset($_POST['modular_type']) && isset($_POST['efficiency'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['pwr_sku'];
    $u = $_POST['brand'];
    $p = $_POST['price'];
    $c = $_POST['capacity'];
    $b = $_POST['modular_type'];
    $d = $_POST['efficiency'];

    $s = " INSERT INTO power_supply  VALUES ('$a', '$u', '$p', '$c', '$b', '$d') ";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "New PSU Added!!";
        // header("Location: login.php");
    } else {
        echo "PSU Insertion Failed";
    }
}

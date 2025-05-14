<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['mobo_sku']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['chipset']) && isset($_POST['ram_type']) && isset($_POST['form_factor']) && isset($_POST['cpu_brand'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['mobo_sku'];
    $u = $_POST['brand'];
    $p = $_POST['price'];
    $c = $_POST['chipset'];
    $b = $_POST['ram_type'];
    $d = $_POST['form_factor'];
    $e = $_POST['cpu_brand'];   

    $s = " INSERT INTO motherboard  VALUES ('$a', '$u', '$p', '$c', '$b', '$d', '$e') ";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "New Motherboard Added!!";
        // header("Location: login.php");
    } else {
        echo "Motherboard Insertion Failed";
    }
}

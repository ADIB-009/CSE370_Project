<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['gpu_sku']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['vram']) && isset($_POST['game_clock'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['gpu_sku'];
    $u = $_POST['brand'];
    $p = $_POST['price'];
    $c = $_POST['vram'];
    $b = $_POST['game_clock'];


    $s = " INSERT INTO gpu  VALUES ('$a', '$u', '$p', '$c', '$b') ";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "New GPU Added!!";
        // header("Location: login.php");
    } else {
        echo "GPU Insertion Failed";
    }
}

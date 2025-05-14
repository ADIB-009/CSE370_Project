<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['cpu_sku']) && isset($_POST['price'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['cpu_sku'];
    $p = $_POST['price'];
 
    $s = "UPDATE cpu SET price = '$p' WHERE cpu_sku = '$a'";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "CPU Price is updated!!";
        // header("Location: login.php");
    } else {
        echo "CPU Price Update Failed";
    }
}

<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if (isset($_POST['mobo_sku']) && isset($_POST['price'])) {
    // write the query to check if this username and password exists in our database
    $a = $_POST['mobo_sku'];
    $p = $_POST['price'];
 
    $s = "UPDATE motherboard SET price = '$p' WHERE mobo_sku = '$a'";


    //Execute the query 
    $result = mysqli_query($conn, $s);

    //check if this insertion is happening in the database
    if (mysqli_affected_rows($conn)) {

        echo "Motherboard Price is updated!!";
        // header("Location: login.php");
    } else {
        echo "Motherboard Price Update Failed";
    }
}

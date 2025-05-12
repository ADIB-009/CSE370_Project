<?php
require_once('dbconnect.php');
if (isset($_POST['ram_sku'])) {
    $u = $_POST['ram_sku'];
    $s = "DELETE FROM ram WHERE ram_sku = '$u'";


    $result = mysqli_query($conn, $s);

    if ($result) {

        echo "RAM Deleted";
    } else {
        echo "Deletion Failed";
    }
}

?>

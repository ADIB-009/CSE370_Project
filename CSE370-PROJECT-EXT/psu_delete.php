<?php
require_once('dbconnect.php');
if (isset($_POST['pwr_sku'])) {
    $u = $_POST['pwr_sku'];
    $s = "DELETE FROM power_supply WHERE pwr_sku = '$u'";


    $result = mysqli_query($conn, $s);

    if ($result) {

        echo "PSU Deleted";
    } else {
        echo "Deletion Failed";
    }
}

?>

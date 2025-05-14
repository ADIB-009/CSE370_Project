<?php
require_once('dbconnect.php');
if (isset($_POST['cpu_sku'])) {
    $u = $_POST['cpu_sku'];
    $s = "DELETE FROM cpu WHERE cpu_sku = '$u'";


    $result = mysqli_query($conn, $s);

    if ($result) {

        echo "CPU Deleted";
    } else {
        echo "Deletion Failed";
    }
}

?>

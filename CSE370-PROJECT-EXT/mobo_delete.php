<?php
require_once('dbconnect.php');
if (isset($_POST['mobo_sku'])) {
    $u = $_POST['mobo_sku'];
    $s = "DELETE FROM motherboard WHERE mobo_sku = '$u'";


    $result = mysqli_query($conn, $s);

    if ($result) {

        echo "Motherboard Deleted";
    } else {
        echo "Deletion Failed";
    }
}

?>

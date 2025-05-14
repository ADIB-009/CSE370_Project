<?php
require_once('dbconnect.php');
if (isset($_POST['gpu_sku'])) {
    $u = $_POST['gpu_sku'];
    $s = "DELETE FROM gpu WHERE gpu_sku = '$u'";


    $result = mysqli_query($conn, $s);

    if ($result) {

        echo "GPU Deleted";
    } else {
        echo "Deletion Failed";
    }
}

?>

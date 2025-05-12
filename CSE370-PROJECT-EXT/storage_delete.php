<?php
require_once('dbconnect.php');
if (isset($_POST['s_sku'])) {
    $u = $_POST['s_sku'];
    $s = "DELETE FROM storage WHERE s_sku = '$u'";


    $result = mysqli_query($conn, $s);

    if ($result) {

        echo "Storage Deleted";
    } else {
        echo "Deletion Failed";
    }
}

?>

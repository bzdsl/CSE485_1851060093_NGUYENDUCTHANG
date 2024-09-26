<?php
include '../config/config.php';
if (isset($_REQUEST['id']) and $_REQUEST['id'] != "") {
    $idkhach = $_GET['id'];
    $sql = "DELETE FROM tbl_user WHERE id='$idkhach'";
    if ($conn->query($sql) === TRUE) {
        header('location: success.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

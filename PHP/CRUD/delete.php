<?php
include 'connectdb.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE from formvalidation where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
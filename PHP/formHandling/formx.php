<?php
include 'connectDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO formhandling(name,email) VALUES('$name','$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: display.php?status=success");
        exit();
    } else {
        header("Location: display.php?status=error");
        exit();
    }
}
?>
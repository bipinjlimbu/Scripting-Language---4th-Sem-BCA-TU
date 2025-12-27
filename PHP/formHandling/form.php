<?php
include 'connectDB.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO formhandling(name,email) VALUES('$name','$email')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Inserted Successfully";
} else {
    echo "Not Inserted";
}
?>
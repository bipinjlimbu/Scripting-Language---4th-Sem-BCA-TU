<?php
$conn = mysqli_connect("localhost", "root", "", "scripringlanguage");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    $sql = "SELECT * FROM formvalidation WHERE mobile = '$phone'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Phone number already exists.";
    } else {
        echo "Phone number does not exist.";
    }
}
?>
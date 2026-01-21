<?php
$conn = mysqli_connect("localhost", "root", "", "scripringlanguage");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Feedback Form</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email">
        <br><br>
        <label>Message:</label>
        <textarea name="message"></textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Feedback submitted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
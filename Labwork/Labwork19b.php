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
    <form method="post">
        <label>Full Name:</label>
        <input type="text" id="fullname" name="fullname">
        <label>Username:</label>
        <input type="text" id="username" name="username">
        <label>Email:</label>
        <input type="email" id="email" name="email">
        <label>Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $fullnamePattern = "/^[a-zA-Z\s]{1,40}$/";
    $usernamePattern = "/^[a-zA-Z]{1,10}[0-9_]{5,10}$/";
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $passwordPattern = "/^[a-zA-Z0-9!@#$%^&*()_+]{8,20}$/";

    if (preg_match($fullnamePattern, $fullname)) {
        echo "Full Name is valid.<br>";
    } else {
        echo "Full Name is invalid.<br>";
    }

    if (preg_match($usernamePattern, $username)) {
        echo "Username is valid.<br>";
    } else {
        echo "Username is invalid.<br>";
    }

    if (preg_match($emailPattern, $email)) {
        echo "Email is valid.<br>";
    } else {
        echo "Email is invalid.<br>";
    }

    if (preg_match($passwordPattern, $password)) {
        echo "Password is valid.<br>";
    } else {
        echo "Password is invalid.<br>";
    }

    $sql = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname', '$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
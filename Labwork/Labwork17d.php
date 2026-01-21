<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    setcookie('visited', 'yes', time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_COOKIE['visited']) && isset($_SESSION['name'])) {
    echo "Welcome back, " . $_SESSION['name'] . "! It’s great to see you again!";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enter Name</title>
    </head>

    <body>
        <form method="post" action="">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="Submit">
        </form>
    </body>

    </html>
    <?php
}
?>
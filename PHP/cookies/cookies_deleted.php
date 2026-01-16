<?php
echo "Cookies Deleted Page <br>";
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cookies Deleted Example</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' has been deleted!";
    } else {
        echo "Cookie '" . $cookie_name . "' is still set!<br>";
        echo "Value: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>
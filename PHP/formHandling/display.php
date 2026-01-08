<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <table>
        <thead>
            <th> ID </th>
            <th> Name </th>
            <th> Email </th>
        </thead>
        <tbody>
            <?php
            include 'connectDB.php';
            $sql = 'SELECT * FROM formhandling';
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];

                    echo "<tr>
                            <td>" . $id . "</td>
                            <td>" . $name . "</td>
                            <td>" . $email . "</td>
                            </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>
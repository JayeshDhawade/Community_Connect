<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "community";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Register user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $O_name = $_POST["name"];
    $O_email = $_POST["email"];
    $O_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $O_hobbies = $_POST["hobbies"];

    $sql = "INSERT INTO organisation_register (name, email, password, hobbies) VALUES ('$O_name', '$O_email', '$O_password', '$O_hobbies')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
        header( "Location: Organisation_login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Register</title>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="container">
        <form action="Organisation_register.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <label for="hobbies">Hobbies:</label>
            <textarea name="hobbies"></textarea><br><br>

            <button type="submit">Register</button>
        </form>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>

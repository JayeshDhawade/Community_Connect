<?php
// Database connection
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "community";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $O_email = $_POST["email"];
    $O_password = $_POST["password"];

    $sql = "SELECT * FROM organisation_register WHERE email='$O_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($O_password, $row["password"])) {
            echo "Login successful";
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
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
    <title>Login</title>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="container">
        <form action="Organisation_login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <button type="submit">Login</button>
            <h5>New to Community connect then <a href="Organisation_register.php">register</a></h5>
        </form>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>

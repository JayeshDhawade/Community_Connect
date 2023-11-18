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

// Login user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $V_email = $_POST["email"];
    $V_password = $_POST["password"];

    $sql = "SELECT * FROM volunteer_register WHERE email='$V_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($V_password, $row["password"])) {
            $_SESSION['email']= $V_email;
            echo $_SESSION['email'];
            echo "Login successful";
            $_SESSION['email'] = $V_email;
            header( "Location: Volunteer_1.php");
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
        <form action="Volunteer_login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <button type="submit">Login</button>
            <h5>New to Community connect then <a href="Volunteer_register.php">register</a></h5>
        </form>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>

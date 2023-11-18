<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "community";

$conn = new mysqli($servername, $username, $password, $dbname);
$V_email=$_SESSION['email']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Volunteer</title>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <a href="logout.php">Logout</a>
        </ul>
        <h4>Welcome <?php echo $V_email; ?></h4><br>  
        <h3>Suggestion with respect to your hobbies</h3>
        <?php 
        $sql = "SELECT * FROM volunteer_register WHERE email='$V_email'";
        $result = $conn->query($sql);
        $Volunteer = $result->fetch_assoc();
        $V_hobbies = $Volunteer["hobbies"];

        
        $sql2 = "SELECT * FROM organisation_register WHERE hobbies='$V_hobbies'";
        
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0)
        {
            while($Organisation = $result2->fetch_assoc())
            echo "<b> Organisation name: </b>".$Organisation['name']. "<b>  Email ID: </b>".$Organisation['email']."<br>";
        }
        else
        {       
            echo "OOPS!! We dont have any Organisation now similar to your skills but dont worry check the other Organisation details";
        }
        echo "<h3> All </h3>";
        $sql3 = "SELECT * FROM organisation_register";
        $result3 = $conn->query($sql3);
        if($result3->num_rows > 0)
        {
            while($Organisation = $result3->fetch_assoc())
            echo "<b>Organisation name: </b> ".$Organisation['name']. " <b> Email ID: </b>".$Organisation['email']."<b>  Hobbies  </b>".$Organisation['hobbies']."<br><br>";
        }
       
        ?>
        

        <?php
       // $sql3 = "SELECT * FROM organisation_register EXCEPT hobbies='$V_hobbies'";
        //$result3 = $conn->query($sql3);
        //if($result->num_rows > 0){
           // while($Organisation = $result2->fetch_assoc())
           // echo " Name: ".$Organisation['name']. " -Email ID: ".$Organisation['email']."<br>";
        //}
        ?>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
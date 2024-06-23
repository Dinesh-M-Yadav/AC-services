<?php

$name=$_POST["name"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];

// Replace these variables with your own database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ac";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    
}



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    
    
    // Perform insert query
    $query = "INSERT INTO `register` (`id`, `name`, `username`, `password`) VALUES (NULL,'$name', '$uname', '$pass')";
    
    if (mysqli_query($conn, $query)) {
        header("Location:mailer.php");
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

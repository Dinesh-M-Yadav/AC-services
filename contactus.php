<?php
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
    // Get form data
    
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Insert data into the database
    $sql = "INSERT INTO `contactus` (`id`, `name`, `Email`, `subject`, `message`) VALUES (NULL, `name`, `Email`, `subject`, `message`) ";

    if (mysqli_query($conn, $sql)) {
      header("Location:thanks.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>

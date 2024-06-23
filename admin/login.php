<?php

session_start();
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
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // SQL query to check if the username and password match
    $sql = "SELECT * FROM admin WHERE Username = '$username' AND Password = '$password'";

    // Perform the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Login successful, redirect to a welcome page or perform other actions
                        // Fetch user data
                        $userData = mysqli_fetch_assoc($result);

                        // Set session variables
                        $_SESSION['user_id'] = $userData['user_id'];
                        $_SESSION['username'] = $userData['Username'];
     header("Location: index.html");
        } else {
            // Login failed, display an error message or redirect to a login page
            echo "Invalid username or password!";
        }
    } else {
        // Query failed, display an error message
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

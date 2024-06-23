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


// Fetch user details from the database
$sql = "SELECT * FROM regiter";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <tbody>';

        // Loop through each row and display user details
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['Name'] . '</td>
                    <td>' . $row['Username'] . '</td>
                    <td>' . $row['Password'] . '</td>
                    <td></td>
                    <!-- Add more cells based on your user table structure -->
                  </tr>';
        }

        echo '</tbody></table>';
    } else {
        echo 'No users found.';
    }
} else {
    // Query failed, display an error message
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

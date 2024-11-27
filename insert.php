<?php
// Database connection settings
$host = "localhost";         // Hostname (use 'localhost' for XAMPP)
$username = "root";          // Default XAMPP username
$password = "";              // Default XAMPP password (empty for root user)
$db_name = "login";          // Name of your database
$port = 3307;                // MySQL port (change only if different in your setup)

// Attempt to connect to MySQL with a specific port
$conn = mysqli_connect($host, $username, $password, $db_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "You are connected!<br>";
}

// SQL Query to insert data into the logintable
$sql = "INSERT INTO logintable (user, password) VALUES ('ygbdred', 'fgrdfeses988')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully!<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

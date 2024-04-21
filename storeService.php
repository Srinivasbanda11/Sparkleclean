<?php
// Database credentials
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "activity"; // Change this to your database name
$user_no = $_SESSION['user_no'];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted and the service_type is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["service_type"])) {
    $serviceType = $_POST["service_type"];

    // SQL query to insert the service type into the database
    $sql = "INSERT INTO `home_tasks` VALUES (NULL, '$user_no', 'abc', '$serviceType', 'nb', 'nb', '0')";
	

    if ($conn->query($sql) === TRUE) {
        echo "Service type stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<?php
include 'example.php';

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Code to fetch data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    // Handle the case when the query fails
    echo "Query failed: " . $conn->error;
} else {
    // Process the data as needed
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['user_name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";

    }
}

// Close the database connection
$conn->close();
?>



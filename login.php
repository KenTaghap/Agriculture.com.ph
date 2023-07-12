<?php
// Replace with your MongoDB Atlas connection details
$host = 'atlascluster.qrj9egp.mongodb.net';
$username = 'kenUser';
$password = 'KenPassword';
$database = 'Agriculture';

// Connect to MongoDB Atlas
$mongoClient = new MongoDB\Driver\Manager("mongodb+srv://kenUser:KenPassword@atlascluster.qrj9egp.mongodb.net/");

// Get the submitted email and password
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database to check if the user exists
$filter = ['UserName' => $email, 'Password' => $password];
$query = new MongoDB\Driver\Query($filter);
$result = $mongoClient->executeQuery('your_database.your_collection', $query);

// Check if the user exists
if (count($result->toArray()) > 0) {
    // User exists, redirect to the home page or perform any other action
    echo "Login Success!";
} else {
    // User doesn't exist, display an error message or perform any other action
    echo "Invalid email or password.";
}
?>

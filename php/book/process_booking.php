<?php
// Connection details, replace with your actual database credentials
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "live_ott_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$movie = $_POST['movie'];
$timing = $_POST['timing'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
$booking_id = $_POST['booking_id']; // Added hidden input field in the form

// Insert data into the database
$sql = "INSERT INTO bookings (movie, timing, name, email, phone, payment, booking_id)
        VALUES ('$movie', '$timing', '$name', '$email', '$phone', '$payment', '$booking_id')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

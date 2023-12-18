<?php
// check_booking.php

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the booking ID from the form
    $bookingId = $_POST["booking-id"];

    // Validate the input (you can add more validation if needed)

    // Connect to the MySQL database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "live_ott_book";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM bookings WHERE booking_id = '$bookingId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Booking ID exists, send JSON response for success
        echo json_encode(["success" => true]);
    } else {
        // Booking ID does not exist, send JSON response for error
        echo json_encode(["success" => false, "message" => "Booking ID is wrong."]);
    }

    $conn->close();
}
?>

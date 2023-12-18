<?php
// Replace these variables with your actual database credentials
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to store the error message
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entered booking ID
    $entered_booking_id = $_POST["booking-id"];

    // Query to check if the booking ID exists in the database
    $sql = "SELECT * FROM bookings WHERE booking_id = '$entered_booking_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Booking ID exists, allow the user to proceed to another page
        header("Location: another_page.php");
        exit();
    } else {
        // Booking ID does not exist, set an error message
        $error_message = "Invalid Booking ID. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Watch Movie</title>
</head>
<body>
    <header>
        <!-- Your header content here (same as in index.html) -->
    </header>

    <section class="watch-section">
        <div class="watch-container">
            <h2>Watch Movie</h2>
            <p>Enter your booking ID to start watching:</p>

            <form id="watch-form" class="watch-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="booking-id">Booking ID:</label>
                    <input type="text" id="booking-id" name="booking-id" required>
                </div>

                <button type="submit" class="watch-button">Start Watching</button>
            </form>

            <p class="error-message"><?php echo $error_message; ?></p>
        </div>
    </section>

    <footer>
        <!-- Your footer content here (same as in index.html) -->
    </footer>

    <script src="script.js"></script>
</body>
</html>

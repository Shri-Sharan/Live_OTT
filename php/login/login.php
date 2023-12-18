<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user credentials
    // (you should use prepared statements to prevent SQL injection)
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Successful login
        echo "Login successful!";
    } else {
        // Invalid login credentials
        echo "Invalid email or password";
    }
}

$conn->close();
?>

<?php
// Replace these values with your actual database credentials
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'live_ott_book';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

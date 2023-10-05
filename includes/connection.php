<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'food';

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbName);

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
}

function sanitize($connection, $data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = mysqli_real_escape_string($connection, $data);
    return $data;
}
?>

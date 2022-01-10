<?php

// Database Connection
include 'koneksi.php';

// Fetch Data
$Username = $_POST['Username'];
$CustomerPassword = $_POST['CustomerPassword'];
$CustomerName = $_POST['CustomerName'];
$CustomerGender = $_POST['CustomerGender'];
$CustomerPhone = $_POST['CustomerPhone'];
$CustomerEmail = $_POST['CustomerEmail'];
$CustomerAddress = $_POST['CustomerAddress'];


// Input Data to Database
mysqli_query($conn, "INSERT INTO customer VALUE('$Username', '$CustomerPassword', '$CustomerName', '$CustomerGender', '$CustomerPhone', '$CustomerEmail', '$CustomerAddress'");

// Back to customer Page
header("location:customer.php");

?>
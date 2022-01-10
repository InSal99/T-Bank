<?php

// Database Connection
include 'koneksi.php';

// Fetch Data
$TransactionId = $_POST['TransactionId'];
$TransactionDate = $_POST['TransactionDate'];
$Username = $_POST['Username'];
$LicensePlate = $_POST['LicensePlate'];
$ItemTransactionId = $_POST['ItemTransactionId'];
$TransactionStatus = $_POST['TransactionStatus'];

// Input Data to Database
mysqli_query($conn, "INSERT INTO transaction VALUE('$TransactionId', '$TransactionDate', '$Username', '$LicensePlate', '$ItemTransactionId', '$TransactionStatus'");

// Back to customer Page
header("location:transaction.php");

?>
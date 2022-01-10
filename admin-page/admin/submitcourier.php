<?php

// Database Connection
include 'koneksi.php';

// Fetch Data
$LicensePlate = $_POST['LicensePlate'];
$CourierPassword = $_POST['CourierPassword'];
$CourierName = $_POST['CourierName'];
$CourierGender = $_POST['CourierGender'];
$CourierPhone = $_POST['CourierPhone'];
$CourierEmail = $_POST['CourierEmail'];

// Input Data to Database
mysqli_query($conn, "INSERT INTO courier VALUE('$LicensePlate', '$CourierPassword', '$CourierName', '$CourierGender', '$CourierPhone', '$CourierEmail')");

// Back to customer Page
header("location:courier.php");

?>
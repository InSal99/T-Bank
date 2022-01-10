<?php

// Database Connection
include 'koneksi.php';

// Fetch Data
$WasteBankId = $_POST['WasteBankId'];
$WasteBankName = $_POST['WasteBankName'];
$WasteBankLocation = $_POST['WasteBankLocation'];
$WasteBankContact = $_POST['WasteBankContact'];
$WasteBankDesc = $_POST['WasteBankDesc'];

// Input Data to Database
mysqli_query($conn, "INSERT INTO wastebank VALUE('$WasteBankId', '$WasteBankName', '$WasteBankLocation', '$WasteBankContact', '$WasteBankDesc')");

// Back to customer Page
header("location:waste-bank.php");

?>
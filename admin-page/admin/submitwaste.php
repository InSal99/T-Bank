<?php

// Database Connection
include 'koneksi.php';

// Fetch Data
$WasteId = $_POST['WasteId'];
$WasteName = $_POST['WasteName'];
$WasteTypeId = $_POST['WasteTypeId'];
$WastePrice = $_POST['WastePrice'];
$WasteDesc = $_POST['WasteDesc'];
$WastePict= $_POST['WastePict'];


// Input Data to Database
mysqli_query($conn, "INSERT INTO waste VALUE('$WasteId', '$WasteName', '$WasteTypeId', '$WastePrice', '$WasteDesc', '$WastePict')");

// Back to customer Page
header("location:waste.php");

?>
<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updatecustomer'])) {
    $Username = $_POST['Username'];
    $CustomerPassword = $_POST['CustomerPassword'];
    $CustomerName = $_POST['CustomerName'];
    $CustomerGender = $_POST['CustomerGender'];
    $CustomerPhone = $_POST['CustomerPhone'];
    $CustomerEmail = $_POST['CustomerEmail'];
    $CustomerAddress = $_POST['CustomerAddress'];

    mysqli_query($conn, "UPDATE customer SET Username='$Username', CustomerPassword='$CustomerPassword', CustomerName='$CustomerName', CustomerGender='$CustomerGender', CustomerPhone='$CustomerPhone', CustomerEmail='$CustomerEmail', CustomerAddress='$CustomerAddress' WHERE Username = '$Username'");
    header("location:customer.php");
}

if (isset($_POST['insertcustomer'])) {
    $Username = $_POST['Username'];
    $CustomerPassword = $_POST['CustomerPassword'];
    $CustomerName = $_POST['CustomerName'];
    $CustomerGender = $_POST['CustomerGender'];
    $CustomerPhone = $_POST['CustomerPhone'];
    $CustomerEmail = $_POST['CustomerEmail'];
    $CustomerAddress = $_POST['CustomerAddress'];

    mysqli_query($conn, "INSERT INTO customer (Username, CustomerPassword, CustomerName, CustomerGender, CustomerPhone, CustomerEmail, CustomerAddress) VALUE('$Username', '$CustomerPassword', '$CustomerName', '$CustomerGender', '$CustomerPhone', '$CustomerEmail', '$CustomerAddress')");
    header("location:customer.php");
}


$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM customer WHERE Username = '$id'");

header("location:customer.php");

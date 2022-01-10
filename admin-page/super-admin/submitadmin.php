<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updateadmin'])) {
    $AdminId = $_POST['AdminId'];
    $AdminPassword = $_POST['AdminPassword'];
    $AdminName = $_POST['AdminName'];
    $AdminGender = $_POST['AdminGender'];
    $AdminPhone = $_POST['AdminPhone'];
    $AdminEmail = $_POST['AdminEmail'];
    $AdminRole = $_POST['AdminRole'];

    mysqli_query($conn, "UPDATE admin SET AdminId='$AdminId', AdminPassword='$AdminPassword', AdminName='$AdminName', AdminGender='$AdminGender', AdminPhone='$AdminPhone', AdminEmail='$AdminEmail', AdminRole='$AdminRole' WHERE AdminId='$AdminId'");
    header("location:admin.php");
}

if (isset($_POST['insertadmin'])) {
    $AdminId = $_POST['AdminId'];
    $AdminPassword = $_POST['AdminPassword'];
    $AdminName = $_POST['AdminName'];
    $AdminGender = $_POST['AdminGender'];
    $AdminPhone = $_POST['AdminPhone'];
    $AdminEmail = $_POST['AdminEmail'];
    $AdminRole = $_POST['AdminRole'];

    mysqli_query($conn, "INSERT INTO admin (AdminId, AdminPassword, AdminName, AdminGender, AdminPhone, AdminEmail, AdminRole) VALUE('$AdminId', '$AdminPassword', '$AdminName', '$AdminGender', '$AdminPhone', '$AdminEmail', '$AdminRole')");
    header("location:admin.php");
}


$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM admin WHERE AdminId = '$id'");
header("location:admin.php");
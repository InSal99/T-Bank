<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updatecourier'])) {
    $LicensePlate = $_POST['LicensePlate'];
    $CourierPassword = $_POST['CourierPassword'];
    $CourierName = $_POST['CourierName'];
    $CourierGender = $_POST['CourierGender'];
    $CourierPhone = $_POST['CourierPhone'];
    $CourierEmail = $_POST['CourierEmail'];

    mysqli_query($conn, "UPDATE courier SET LicensePlate='$LicensePlate, CourierPassword='$CourierPassword', CourierName='$CourierName', CourierGender='$CourierGender', CourierPhone='$CourierPhone', CourierEmail='$CourierEmail', WHERE LicensePlate='$LicensePlate'");
    header("location:courier.php");
}

if (isset($_POST['insertcourier'])) {
    $LicensePlate = $_POST['LicensePlate'];
    $CourierPassword = $_POST['CourierPassword'];
    $CourierName = $_POST['CourierName'];
    $CourierGender = $_POST['CourierGender'];
    $CourierPhone = $_POST['CourierPhone'];
    $CourierEmail = $_POST['CourierEmail'];

    mysqli_query($conn, "INSERT INTO courier VALUE('$LicensePlate', '$CourierPassword', '$CourierName', '$CourierGender', '$CourierPhone', '$CourierEmail')");
    header("location:courier.php");
}


$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM courier WHERE LicensePlate = '$id'");
header("location:courier.php");

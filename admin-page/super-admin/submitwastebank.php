<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updatewastebank'])) {
    $WasteBankId = $_POST['WasteBankId'];
    $WasteBankName = $_POST['WasteBankName'];
    $WasteBankLocation = $_POST['WasteBankLocation'];
    $WasteBankContact = $_POST['WasteBankContact'];
    $WasteBankDesc = $_POST['WasteBankDesc'];

    mysqli_query($conn, "UPDATE wastebank SET WasteBankName='$WasteBankName', WasteBankLocation='$WasteBankLocation', WasteBankContact='$WasteBankContact', WasteBankDesc='$WasteBankDesc' WHERE WasteBankId='$WasteBankId'");
    header("location:waste-bank.php");
}

if (isset($_POST['insertwastebank'])) {
    $WasteBankId = $_POST['WasteBankId'];
    $WasteBankName = $_POST['WasteBankName'];
    $WasteBankLocation = $_POST['WasteBankLocation'];
    $WasteBankContact = $_POST['WasteBankContact'];
    $WasteBankDesc = $_POST['WasteBankDesc'];
    echo 'ngga';

    mysqli_query($conn, "INSERT INTO wastebank VALUE('$WasteBankId', '$WasteBankName', '$WasteBankLocation', '$WasteBankContact', '$WasteBankDesc')");
    echo 'masuk';
    //header("location:waste-bank.php");
}

echo 'kedelete';
/*$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM wastebank WHERE WasteBankId = '$id'");
header("location:waste-bank.php");*/

?>
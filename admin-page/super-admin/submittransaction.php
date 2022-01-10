<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updatetransaction'])) {
    $TransactionId = $_POST['TransactionId'];
    $Username = $_POST['Username'];
    $LicensePlate = $_POST['LicensePlate'];
    $ItemTransactionId = $_POST['ItemTransactionId'];
    $TransactionStatus = $_POST['TransactionStatus'];


    mysqli_query($conn, "UPDATE transaction SET TransactionId='$TransactionId' Username='$Username', LicensePlate='$LicensePlate', ItemTransactionId='$ItemTransactionId', TransactionStatus='$TransactionStatus' WHERE TransactionId = '$TransactionId'");
    //header("location:transaction.php");
    if(mysqli_query($conn, "UPDATE transaction SET TransactionId='$TransactionId' Username='$Username', LicensePlate='$LicensePlate', ItemTransactionId='$ItemTransactionId', TransactionStatus='$TransactionStatus' WHERE TransactionId = '$TransactionId'")) {
        echo 'masuk';
    } else {
        echo 'ngga masuk';
        echo mysqli_connect_error();
    }
}

if (isset($_POST['inserttransaction'])) {
    $TransactionId = $_POST['TransactionId'];
    $Username = $_POST['Username'];
    $LicensePlate = $_POST['LicensePlate'];
    $ItemTransactionId = $_POST['ItemTransactionId'];
    $TransactionStatus = $_POST['TransactionStatus'];

    mysqli_query($conn, "INSERT INTO transaction VALUE('$TransactionId', '$Username', '$LicensePlate', '$ItemTransactionId', '$TransactionStatus'");
    //header("location:transaction.php");
    if(mysqli_query($conn, "INSERT INTO transaction VALUE('$TransactionId', '$Username', '$LicensePlate', '$ItemTransactionId', '$TransactionStatus'")) {
        echo 'masuk';
    } else {
        echo 'ngga masuk';
        echo mysqli_connect_error();
    }
}

echo 'hai';
/*$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM transaction WHERE TransactionId = '$id'");

header("location:transaction.php");*/

?>
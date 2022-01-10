<?php
include 'koneksi.php';
/*if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $lecenseplate = $content['LicensePlate'];
    $sql="DELETE FROM courier WHERE LicensePlate = $licenseplate";
    $result= mysqli_query($conn, $sql) ;
    if($result) {
        echo "Deleted Succesfully";
    } else {
        die(mysqli_error($conn));
    }
} else {
    $deleteid = "";
}*/
if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $lecenseplate = $content['LicensePlate'];
if($deleteid == 'delete') {
    $id = $_GET['LicensePlate'];
    $sql="DELETE FROM courier WHERE LicensePlate='$id'";
    $result=mysqli_query($conn, $sql);
    if($result) {
        $sukses = "Deleted Succesfully";
    } else {
        $error = "Delete Failed";
    }
}}
?>
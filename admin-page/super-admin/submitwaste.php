<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updatewaste'])) {
    $WasteId = $_POST['WasteId'];
    $WasteName = $_POST['WasteName'];
    $WasteTypeId = $_POST['WasteTypeId'];
    $WastePrice = $_POST['WastePrice'];
    $WasteDesc = $_POST['WasteDesc'];
    $WastePict= $_FILES['WastePict']['name'];

    $img_ext = array('image/jpg', 'image/jpeg', 'image/png');
    $ext_validation = in_array($_FILES['WastePict']['type'], $img_ext);
    
    if($ext_validation) {
        $query = "SELECT * FROM waste WHERE WasteId = '$WasteId'";
        $result_query = mysqli_query($conn, $query);
        foreach($result_query as $row) {
            //echo $row['WastePict'];
            if($WastePict == NULL) {
                //update with existing img
                $image_data = $row['WastePict'];
            } else {
                //update with new img n delete with old img
                if($img_dir = "../pict/".$row["WastePict"]) {
                    unlink($img_dir);
                    $image_data = $WastePict;
                }
            }
        }
    } else {
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Gambar bukan PNG, JPG, atau JPEG!')";  
        echo "</script>";  
        header("location:waste.php");
    }

    $result = mysqli_query($conn, "UPDATE waste SET WasteId='$WasteId', WasteName='$WasteName', WasteTypeId='$WasteTypeId', WastePrice='$WastePrice', WasteDesc='$WasteDesc', WastePict='$image_data' WHERE WasteId='$WasteId'");
     
    if($result) {
        if($WastePict == NULL) {
            //update with existing img
            echo "<script type ='text/JavaScript'>alert('Data berhasil diperbarui.');</script>";
            header("location:waste.php");
        } else {
            //update with new img n delete with old img
            $dir = "../pict/".$_FILES["WastePict"]["name"];
            move_uploaded_file($_FILES["WastePict"]["tmp_name"], $dir);
            echo "<script type ='text/JavaScript'>alert('Data berhasil diperbarui.');</script>";
            header("location:waste.php");
        }  
    } else {
        echo "<script type ='text/JavaScript'>alert('Data gagal diperbarui!');</script>";
        header("location:waste.php"); 
    }
}

if (isset($_POST['insertwaste'])) {
    $WasteId = $_POST['WasteId'];
    $WasteName = $_POST['WasteName'];
    $WasteTypeId = $_POST['WasteTypeId'];
    $WastePrice = $_POST['WastePrice'];
    $WasteDesc = $_POST['WasteDesc'];
    $WastePict= $_FILES['WastePict']['name'];

    /*$ext_validation = $_FILES['WastePict']['type'] == "image/jpg" ||
                      $_FILES['WastePict']['type'] == "image/jpeg" ||
                      $_FILES['WastePict']['type'] == "image/png" ;
    */
    $img_ext = array('image/jpg', 'image/jpeg', 'image/png');
    $ext_validation = in_array($_FILES['WastePict']['type'], $img_ext);
    
    if($ext_validation) {
        if(file_exists("../pict/".$_FILES["WastePict"]["name"])) {
            $store = $_FILES["WastePict"]["n ame"];
            echo "<script type ='text/JavaScript'>alert('Gambar telah digunakan!');</script>";
            header("location:waste.php");
            } else {
                $result = mysqli_query($conn, "INSERT INTO waste VALUE('$WasteId', '$WasteName', '$WasteTypeId', '$WastePrice', '$WasteDesc', '$WastePict')");
            
                if($result) {
                    move_uploaded_file($_FILES["WastePict"]["tmp_name"], "../pict/".$_FILES["WastePict"]["name"]);
                    echo "<script type ='text/JavaScript'>alert('Data berhasil ditambahkan.');</script>";
                    header("location:waste.php");
                } else {
                    echo "<script type ='text/JavaScript'>alert('Data gagal ditambahkan!');</script>";
                    header("location:waste.php");
                } 
            }
    } else {
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Gambar bukan PNG, JPG, atau JPEG!')";  
        echo "</script>";  
        header("location:waste.php");
    }

    
    
}

$id = $_GET['id'];
$query_run = mysqli_query($conn, "DELETE FROM waste WHERE WasteId = '$id'");

if($query_run) {
    echo "<script>alert('Data berhasil dihapus.');</script>";
    header("location:waste.php");
} else {
    echo "<script>alert('Data gagal dihapus!');</script>";
    header("location:waste.php");
}



?>
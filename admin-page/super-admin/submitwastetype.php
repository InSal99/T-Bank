<?php

// Database Connection
include 'koneksi.php';

if (isset($_POST['updatewastetype'])) {
    $WasteTypeId = $_POST['WasteTypeId'];
    $WasteTypeName = $_POST['WasteTypeName'];
    $WasteTypeDesc = $_POST['WasteTypeDesc'];
    $WasteTypePict= $_FILES['WasteTypePict']['name'];

    $img_ext = array('image/jpg', 'image/jpeg', 'image/png');
    $ext_validation = in_array($_FILES['WasteTypePict']['type'], $img_ext);
    
    if($ext_validation) {
        $query = "SELECT * FROM wastetype WHERE WasteTypeId = '$WasteTypeId'";
        $result_query = mysqli_query($conn, $query);
        foreach($result_query as $row) {
            //echo $row['WastePict'];
            if($WasteTypePict == NULL) {
                //update with existing img
                $image_data = $row['WasteTypePict'];
            } else {
                //update with new img n delete with old img
                if($img_dir = "../pict/".$row["WasteTypePict"]) {
                    unlink($img_dir);
                    $image_data = $WasteTypePict;
                }
            }
        }
    } else {
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Gambar bukan PNG, JPG, atau JPEG!')";  
        echo "</script>";  
        //header("location:waste-type.php");
    }

    $result = mysqli_query($conn, "UPDATE wastetype SET WasteTypeId='$WasteTypeId', WasteTypeName='$WasteTypeName', WasteTypeDesc='$WasteTypeDesc', WasteTypePict='$image_data' WHERE WasteTypeId='$WasteTypeId'");
     
    if($result) {
        if($WasteTypePict == NULL) {
            //update with existing img
            echo "<script type ='text/JavaScript'>alert('Data berhasil diperbarui.');</script>";
            //header("location:waste-type.php");
        } else {
            //update with new img n delete with old img
            $dir = "../pict/".$_FILES["WasteTypePict"]["name"];
            move_uploaded_file($_FILES["WasteTypePict"]["tmp_name"], $dir);
            echo "<script type ='text/JavaScript'>alert('Data berhasil diperbarui.');</script>";
            //header("location:waste-type.php");
        }  
    } else {
        echo "<script type ='text/JavaScript'>alert('Data gagal diperbarui!');</script>";
        //header("location:waste-type.php"); 
    }
}

if (isset($_POST['insertwasteType'])) {
    $WasteTypeId = $_POST['WasteTypeId'];
    $WasteTypeName = $_POST['WasteTypeName'];
    $WasteTypeDesc = $_POST['WasteTypeDesc'];
    $WasteTypePict= $_FILES['WasteTypePict']['name'];

    /*$ext_validation = $_FILES['WastePict']['type'] == "image/jpg" ||
                      $_FILES['WastePict']['type'] == "image/jpeg" ||
                      $_FILES['WastePict']['type'] == "image/png" ;
    */
    $img_ext = array('image/jpg', 'image/jpeg', 'image/png');
    $ext_validation = in_array($_FILES['WasteTypePict']['type'], $img_ext);
    
    if($ext_validation) {
        if(file_exists("../pict/".$_FILES["WasteTypePict"]["name"])) {
            $store = $_FILES["WasteTypePict"]["n ame"];
            echo "<script type ='text/JavaScript'>alert('Gambar telah digunakan!');</script>";
            //header("location:waste-type.php");
            } else {
                $result = mysqli_query($conn, "INSERT INTO wastetype VALUE('$WasteTypeId', '$WasteTypeName', '$WasteTypeDesc', '$WasteTypePict')");
            
                if($result) {
                    move_uploaded_file($_FILES["WasteTypePict"]["tmp_name"], "../pict/".$_FILES["WasteTypePict"]["name"]);
                    echo "<script type ='text/JavaScript'>alert('Data berhasil ditambahkan.');</script>";
                    //header("location:waste-type.php");
                } else {
                    echo "<script type ='text/JavaScript'>alert('Data gagal ditambahkan!');</script>";
                    //header("location:waste-type.php");
                } 
            }
    } else {
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Gambar bukan PNG, JPG, atau JPEG!')";  
        echo "</script>";  
        //header("location:waste-type.php");
    }

    
    
}

/*$id = $_GET['id'];
$query_run = mysqli_query($conn, "DELETE FROM wastetype WHERE WasteTypeId = '$id'");

if($query_run) {
    echo "<script>alert('Data berhasil dihapus.');</script>";
    //header("location:waste-type.php");
} else {
    echo "<script>alert('Data gagal dihapus!');</script>";
    //header("location:waste-type.php");
}*/



?>
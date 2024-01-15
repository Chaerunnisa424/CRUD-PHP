<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $id_kamar = $_POST['id_kamar'];
        $nomor_kamar = $_POST['nomor_kamar'];
        $lantai = $_POST['lantai'];

        $insert = mysqli_query($conn,"INSERT INTO kamar
        (id_kamar, nomor_kamar, lantai)
        VALUES ('$id_kamar', '$nomor_kamar', '$lantai')");
 
        if (!$insert) {
            $error_message = mysqli_error($conn);
            header("Location: ../index.php?kamar=error");
        }
        else
        {
            echo "Records added successfully.";
            header("Location: ../index.php?kamar=success");
        }
    }
?>

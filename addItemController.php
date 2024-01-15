<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $id_tamu = $_POST['id_tamu'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nomor_kontak = $_POST['nomor_kontak'];

        $insert = mysqli_query($conn,"INSERT INTO tamu
        (id_tamu, nama, alamat, nomor_kontak)
        VALUES ('$id_tamu', '$nama', '$alamat', '$nomor_kontak')");
 
        if (!$insert) {
            $error_message = mysqli_error($conn);
            header("Location: ../index.php?tamu=error");
        }
        else
        {
            echo "Records added successfully.";
            header("Location: ../index.php?tamu=success");
        }
    }
?>

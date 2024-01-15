<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $id_penyewaan = $_POST['id_penyewaan'];
        $tanggal = $_POST['tanggal'];
        $tarif = $_POST['tarif'];
        $tamu_id_tamu = $_POST['tamu_id_tamu'];

        $insert = mysqli_query($conn,"INSERT INTO penyewaan
        (id_penyewaan, tanggal, tarif, tamu_id_tamu)
        VALUES ('$id_penyewaan', '$tanggal', '$tarif', '$tamu_id_tamu')");
 
        if (!$insert) {
            $error_message = mysqli_error($conn);
            header("Location: ../index.php?penyewaan=error");
        }
        else
        {
            echo "Records added successfully.";
            header("Location: ../index.php?penyewaan=success");
        }
    }
?>

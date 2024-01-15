<?php
include_once "../config/dbconnect.php";

$id_tamu = mysqli_real_escape_string($conn, $_POST['id_tamu']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$nomor_kontak = mysqli_real_escape_string($conn, $_POST['nomor_kontak']);

$updateItem = mysqli_query($conn, "UPDATE tamu SET 
    nama='$nama', 
    alamat='$alamat', 
    nomor_kontak='$nomor_kontak'
    WHERE id_tamu='$id_tamu'");

if ($updateItem) {
    echo "true";
} else {
    echo mysqli_error($conn);
}
?>

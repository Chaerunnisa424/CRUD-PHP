<?php

    include_once "../config/dbconnect.php";
    
    $id_penyewaan=$_POST['record'];
    $query="DELETE FROM penyewaan where id_penyewaan='$id_penyewaan'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Penyewaan Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
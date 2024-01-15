<?php

    include_once "../config/dbconnect.php";
    
    $id_tamu=$_POST['record'];
    $query="DELETE FROM tamu where id_tamu='$id_tamu'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Tamu Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
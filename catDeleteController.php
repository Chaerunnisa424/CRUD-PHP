<?php

    include_once "../config/dbconnect.php";
    
    $id_kamar=$_POST['record'];
    $query="DELETE FROM kamar where id_kamar='$id_kamar'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"variation Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
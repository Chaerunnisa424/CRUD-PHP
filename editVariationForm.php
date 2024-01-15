<div class="container p-5">

<h4>Edit Penyewaan</h4>
<?php
    include_once "../config/dbconnect.php";
	$id_penyewaan=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from penyewaan Where id_penyewaan='$id_penyewaan'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $pID=$row1["id_penyewaan"];
      
?>
 <form id="update-Items" onsubmit="return updateVariations()" enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="id_penyewaan">ID Penyewaan:</label>
                    <input type="text" class="form-control" name="id_penyewaan" value="<?php echo $row1['id_penyewaan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Penyewaan:</label>
                    <input type="text" class="form-control" name="tanggal" value="<?php echo $row1['tanggal']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif Penyewaan:</label>
                    <input type="text" class="form-control" name="tarif" value="<?php echo $row1['tarif']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tamu_id_tamu">ID Tamu:</label>
                    <input type="text" class="form-control" name="tamu_id_tamu" value="<?php echo $row1['tamu_id_tamu']; ?>" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="update" style="height:40px">Perbarui Variasi</button>
                </div>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>
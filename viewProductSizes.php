
<div >
  <h2>Data Penyewaan</h2>
  <table class="table ">
    <thead>
      <tr>
      <th class="text-center">Nomor</th>
        <th class="text-center">id_penyewaan</th>
        <th class="text-center">tanggal</th>
        <th class="text-center">tarif</th>
        <th class="text-center">tamu_id_tamu</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from penyewaan ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["id_penyewaan"]?></td>
      <td><?=$row["tanggal"]?></td>
      <td><?=$row["tarif"]?></td>      
      <td><?=$row["tamu_id_tamu"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="variationEditForm('<?=$row['id_penyewaan']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="variationDelete('<?=$row['id_penyewaan']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Tambah Penyewaan
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Penyewaan Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addVariationController.php" method="POST">
            
          <div class="form-group">
          <label for="id_penyewaan">ID Penyewaan:</label>
              <input type="text" class="form-control" name="id_penyewaan" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal Penyewaan:</label>
              <input type="text" class="form-control" name="tanggal" required>
            </div>
            <div class="form-group">
              <label for="tarif">Tarif Penyewaan:</label>
              <input type="text" class="form-control" name="tarif" required>
            </div>
            <div class="form-group">
              <label for="tamu_id_tamu">ID Tamu:</label>
              <input type="text" class="form-control" name="tamu_id_tamu" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Penyewaan</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   
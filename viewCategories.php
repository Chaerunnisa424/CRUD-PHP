
<div >
  <h2>Data Kamar</h2>
  <table class="table ">
    <thead>
      <tr>
      <th class="text-center">Nomor</th>
        <th class="text-center">ID Kamar</th>
        <th class="text-center">Nomor Kamar</th>
        <th class="text-center">Lantai</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from kamar ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["id_kamar"]?></td>
      <td><?=$row["nomor_kamar"]?></td>
      <td><?=$row["lantai"]?></td>        
      <td><button class="btn btn-danger" style="height:40px"  onclick="categoryDelete('<?=$row['id_kamar']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add kamar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Kamar Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
          <div class="form-group">
          <label for="id_kamar">ID Kamar:</label>
              <input type="text" class="form-control" name="id_kamar" required>
            </div>
            <div class="form-group">
              <label for="nomor_kamar">Nomor Kamar:</label>
              <input type="text" class="form-control" name="nomor_kamar" required>
            </div>
            <div class="form-group">
              <label for="lantai">Lantai:</label>
              <input type="text" class="form-control" name="lantai" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Tambah Kamar</button>
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
   
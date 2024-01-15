
<div id="ordersBtn">
  <h2>Detail Penyewaan</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Detail Penyewaan</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Tarif per Hari</th>
        <th>ID Penyewaan</th>
        <th>ID Kamar</th>
        <th>More Details</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * FROM detail_penyewaan";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?= $row["id_detail_penyewaan"] ?></td>
          <td><?= $row["check_in"] ?></td>
          <td><?= $row["check_out"] ?></td>
          <td><?= $row["tarif"] ?></td>
          <td><?= $row["penyewaan_id_penyewaan"] ?></td>
          <td><?= $row["kamar_id_kamar"] ?></td>
          <td><a class="btn btn-primary openPopup" data-href="./controller/viewEachDetailPenyewaan.php?idDetail=<?= $row['id_detail_penyewaan'] ?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
      }
    }
    ?>
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Penyewaan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="order-view-modal modal-body">

      </div>
    </div><!--/ Modal content-->
  </div><!-- /Modal dialog-->
</div>
<script>
  //for view detail penyewaan modal  
  $(document).ready(function() {
    $('.openPopup').on('click', function() {
      var dataURL = $(this).attr('data-href');

      $('.order-view-modal').load(dataURL, function() {
        $('#viewModal').modal({
          show: true
        });
      });
    });
  });
</script>
<div class="container p-5">

    <h4>Edit Product Detail</h4>
    <?php
    include_once "../config/dbconnect.php";
    $ID = $_POST['record'];
    $qry = mysqli_query($conn, "SELECT * FROM tamu WHERE id_tamu='$ID'");
    $numberOfRow = mysqli_num_rows($qry);
    if ($numberOfRow > 0) {
        while ($row1 = mysqli_fetch_array($qry)) {
    ?>
            <form id="update-Items" onsubmit="updateItems(event)" enctype='multipart/form-data'>
                <div class="form-group">
                    <input type="text" class="form-control" id="id_tamu" value="<?= $row1['id_tamu'] ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" value="<?= $row1['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" value="<?= $row1['alamat'] ?>">
                </div>
                <div class="form-group">
                    <label for="nomor_kontak">Nomor Kontak:</label>
                    <input type="text" class="form-control" id="nomor_kontak" value="<?= $row1['nomor_kontak'] ?>">
                </div>

                <div class="form-group">
                    <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
                </div>
            </form>
    <?php
        }
    }
    ?>
</div>
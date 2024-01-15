<!-- viewEachDetailPenyewaan.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penyewaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #000; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #000; 
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            margin: 0;
            padding: 5px 0;
            color: #000; 
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include_once "../config/dbconnect.php";

        if (isset($_GET['idDetail'])) {
            $idDetail = $_GET['idDetail'];

            $sql = "SELECT * FROM detail_penyewaan WHERE id_detail_penyewaan = $idDetail";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Menghitung jumlah hari menginap
                $checkIn = new DateTime($row["check_in"]);
                $checkOut = new DateTime($row["check_out"]);
                $diff = $checkIn->diff($checkOut);
                $jumlahHariMenginap = $diff->days;

                // Menghitung tarif sesuai dengan jumlah hari menginap
                $tarifTotal = $jumlahHariMenginap * $row["tarif"];
        ?>
                <h3>Detail Penyewaan</h3>
                <table>
                    <tr>
                        <th>ID Detail Penyewaan</th>
                        <td><?= $row["id_detail_penyewaan"] ?></td>
                    </tr>
                    <tr>
                        <th>Check In</th>
                        <td><?= $row["check_in"] ?></td>
                    </tr>
                    <tr>
                        <th>Check Out</th>
                        <td><?= $row["check_out"] ?></td>
                    </tr>
                    <tr>
                        <th>Tarif (per hari)</th>
                        <td><?= $row["tarif"] ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Hari Menginap</th>
                        <td><?= $jumlahHariMenginap ?></td>
                    </tr>
                    <tr>
                        <th>Total Tarif</th>
                        <td><?= $tarifTotal ?></td>
                    </tr>
                    <tr>
                        <th>ID Penyewaan</th>
                        <td><?= $row["penyewaan_id_penyewaan"] ?></td>
                    </tr>
                    <tr>
                        <th>ID Kamar</th>
                        <td><?= $row["kamar_id_kamar"] ?></td>
                    </tr>
                    
                </table>
        <?php
            } else {
                echo "Detail Penyewaan tidak ditemukan.";
            }
        } else {
            echo "ID Detail Penyewaan tidak valid.";
        }
        ?>
    </div>
</body>

</html>
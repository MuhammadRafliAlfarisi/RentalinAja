<?php
include '../lib/library.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM rental LEFT JOIN motor ON rental.motor = motor.id WHERE rental.id = " . $id;

    $getData = $mysqli->query($sql) or die($mysqli->error);
    $data = mysqli_fetch_assoc($getData);
    // var_dump($data);
} else {
    header('location:dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        @media print {
            .noPrint {
                display: none;
            }
        }
    </style>
</head>

<body>
    <h1>Detail Pinjam</h1>

    <div>
        <table class="table border">
            <tr>
                <th>Nama Peminjam</th>
                <td><?= $data['nama_peminjam'] ?></td>
            </tr>
            <tr>
                <th>No Handphone</th>
                <td><?= $data['no_handphone'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $data['email'] ?></td>
            </tr>
            <tr>
                <th>Motor</th>
                <td><?= $data['nama_motor'] ?></td>
            </tr>
            <tr>
                <th>Tanggal Pinjam</th>
                <td><?= $data['tgl_pinjam'] ?></td>
            </tr>
            <tr>
                <th>Tanggal Kembali</th>
                <td><?= $data['tgl_kembali'] ?></td>
            </tr>
            <tr>
                <th>Durasi Pinjam</th>
                <td><?= $data['durasi_pinjam'] ?> hari</td>
            </tr>
            <tr>
                <th>Total Harga</th>
                <td>Rp<?= number_format($data['harga'] * $data['durasi_pinjam'], 0, ',', '.'); ?></td>
            </tr>
        </table>
    </div>

    <div class="noPrint d-flex justify-content-end gap-2">
        <a class="btn btn-danger noPrint" href="./dashboard.php">
            Kembali ke dashboard
        </a>
        <button onclick="window.print();" class="btn btn-success noPrint">
            Print
        </button>
    </div>
</body>

</html>
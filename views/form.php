<?php
include '../lib/library.php';
$sql = " SELECT * FROM motor";

$getData = $mysqli->query($sql) or die($mysqli->error);

$data_motor = mysqli_fetch_all($getData, MYSQLI_ASSOC);

// var_dump($_SESSION);die();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_peminjam = $_POST['nama_peminjam'];
    $no_handphone = $_POST['no_handphone'];
    $email = $_POST['email'];
    $motor = $_POST['motor'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    $durasi_pinjam = ((strtotime($tgl_kembali) - strtotime($tgl_pinjam)) / (60 * 60 * 24));

    $sql_insert = "INSERT INTO rental (nama_peminjam, no_handphone, email, motor, tgl_pinjam, tgl_kembali, durasi_pinjam) VALUES ('".$nama_peminjam."', '".$no_handphone."', '".$email."', '".$motor."', '".$tgl_pinjam."', '".$tgl_kembali."', '".$durasi_pinjam."')";

    $insert = $mysqli->query($sql_insert) or die($mysqli->error);

    $id = $mysqli->insert_id;

    header('location:./print_form.php?id='.$id);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/book.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    
    <form id="bookform" action="" method="POST">
    <a href="dashboard.php" class="mt-2">Back to home</a>
        <h2 style="font-family: montserrat">Booking Form</h2>
        <div id="name">
            <label for="FName">Full Name</label><br>
            <input type="text" name="nama_peminjam" placeholder="your name" required>
        </div><br>
        <div>
            <label for="">Phone Number</label><br>
            <input type="number" placeholder="085614287785" required name="no_handphone">
        </div><br>
        <div>
            <label for="">Email</label><br>
            <input type="email" placeholder="test@gmail.com" required name="email">
        </div><br>
        <div>
            <label for="">Pilih Motor</label><br>
            <select name="motor" required>
                <option value="" disabled selected>Silakan Pilih</option>
                <?php
                foreach ($data_motor as $k => $v) { ?>
                    <option value="<?= $v['id']; ?>"><?= $v['nama_motor']; ?> (Rp<?= number_format($v['harga'], 0, ',', '.'); ?>)</option>
                <?php
                }
                ?>
            </select>
        </div><br>

        <div>
            <label for="">Pilih Tanggal Pinjam</label><br>
            <input type="date" placeholder="" required name="tgl_pinjam">
        </div><br>
        <div>
            <label for="">Pilih Tanggal Kembali</label><br>
            <input type="date" name="tgl_kembali" required>
        </div><br>
        <div><input type="submit"></div>
    </form>

</body>

</html>
<?php
include '../lib/library.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM motor WHERE id = " . $id;

    $getData = $mysqli->query($sql) or die($mysqli->error);
    $rental = mysqli_fetch_assoc($getData);
    // var_dump($data);
} else {
    header('location:dashboard.php');
    exit();
}

//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    // Cek apakah data sudah berhasil di ubah atau belum
    // var_dump($_POST);die();
    if (ubah($_POST)) {
        echo
        "<script>
            alert('Data berhasil diubah');
            window.location.href = 'admin.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal diubah :( ');
        </script>";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah List Motor</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="d-flex justify-content-center align-items-center flex-column">
    <div class="judul1">
        <h1>Ubah List Motor</h1>
    </div>

    <div class="form">
        <form action="" method="post">
            <table>
                <input type="hidden" name="id" value="<?= $rental["id"] ?>">
                <tr>
                    <td><label for="nama_motor">Nama Motor</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi nama" name="nama_motor" id="nama_motor" required class="form-control" value="<?= $rental["nama_motor"] ?>"></td>
                </tr>
                <tr>
                    <td><label for="jenis">Jenis</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi jenis" name="jenis" id="jenis" required class="form-control" value="<?= $rental["jenis"] ?>"></td>
                </tr>
                <tr>
                    <td><label for="harga">Harga</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi harga" name="harga" id="harga" required class="form-control" value="<?= $rental["harga"] ?>"></td>
                </tr>
                <tr>
                    <td><a href="admin.php" class=" btn-primary"><i class="fa-solid fa-backward"></i></a></td>
                    <td></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Ubah data</button></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
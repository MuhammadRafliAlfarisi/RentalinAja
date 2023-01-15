<?php 
    require '../lib/library.php';

    //Cek apakah tombo l sudah ditekan atau belom
    if (isset($_POST["submit"])) {
    
        if (tambah($_POST) > 0) {
            echo
            "<script>
                alert('Data berhasil ditambahkan');
                window.location.href = 'admin.php';
            </script>";
        } else {
            echo
            "<script>
                alert('Data gagal ditambahkan :( ');
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
    <title>Tambah Data Motor</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<style>
    body {
        height: 100vh;
    }

    table td {
        padding: .5em;
    }

</style>

<body class="d-flex justify-content-center align-items-center flex-column">
    <div class="judul1">
        <h1>Tambah Data Motor</h1>
    </div>

    <div class="form">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="nama_motor">Nama Motor</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi nama" name="nama_motor" id="nama_motor" require class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="jenis">Jenis</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi jenis" name="jenis" id="jenis" require class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="harga">Harga</label></td>
                    <td>:</td>
                    <td><input type="text" placeholder="isi harga" name="harga" id="harga" require class="form-control"></td>
                </tr>
                <tr>
                    <td><a href="admin.php" class=" btn-primary"><i class="fa-solid fa-backward"></i></a></td>
                    <td></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Tambah data</button></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>.
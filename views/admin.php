<?php
require '../lib/library.php';



$sql = "SELECT * FROM motor";

$getData = $mysqli->query($sql) or die($mysqli->error);
$data = mysqli_fetch_all($getData, MYSQLI_ASSOC);
// var_dump($data);die();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style>
    table td {
        border: 1px solid black;
    }

    body {
        background-color: #1d1d1d;
    }

    table th {
        border: 1px solid black;

    }
</style>

<body>

    <nav class="navbar navbar-expand-lg text-black bg-dark fw-bold navbar-custom mb-5">
        <div class="container d-flex ">
            <a class="navbar-brand text-white" href="#">RentalinAja</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <button type="button" data-bs-toggle="modal" data-bs-target="#logout" class="btn btn-danger">Logout</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 class="text-center text-light">List Motor Rentalin Aja</h2>



    <div class="data p-5 text-light">

        <table class="table text-center text-light">
            <thead>
                <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama Motor</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data as $rental) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $rental["nama_motor"]; ?></td>
                        <td><?= $rental["jenis"]; ?></td>
                        <td><?= $rental["harga"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $rental["id"]; ?>">
                                <i class="fa-solid fa-pen-to-square text-primary"></i> ||
                            </a>
                            <a href="hapus.php?id=<?= $rental["id"]; ?>">
                                <i class="fa-solid fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-end me-3 mb-3">
            <a href="tambah.php">
                <img src="../img/icons8-add-new-60.png" alt="">
            </a>
        </div>
        </a>
    </div>
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog text-dark">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin Log Out?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="../model/logout.php" class="btn btn-primary">Konfirmasi</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
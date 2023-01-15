<?php
require '../lib/library.php';



$sql = "SELECT * FROM motor WHERE jenis = 'Matic'";

$getData = $mysqli->query($sql) or die($mysqli->error);
$data = mysqli_fetch_all($getData, MYSQLI_ASSOC);
// var_dump($data);die();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/data.css">
    <title>RentalinAja</title>
</head>

<body>

<nav class="navbar navbar-expand-lg text-black bg-dark fw-bold navbar-custom mb-5 bg-opacity-75">
        <div class="container d-flex ">
            <a class="navbar-brand text-white" href="#">RentalinAja</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 me-5">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="./dashboard.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="nav justify-content-center p-5 fs-3">
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="./l_vespa.php">Vespa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="./l_kopling.php">Kopling</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="./l_manual.php">Manual</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark text-decoration-underline" href="./l_matic.php">Matic</a>
  </li>
</ul>

<div class="cream-bg">
        <div class="container">
            <div class="row g-5 justify-content-evenly">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="row g-0">
                            <?php foreach ($data as $motor) { ?>
                                <div class="col-6 col-md-7">
                                    <div class="card-body d-flex flex-column">
                                        <div class="h-100">
                                            <h2 class="card-title"><?= $motor['nama_motor']; ?></h2>
                                            <h4 class="card-title mb-3">Rp<strong><?= number_format((int)$motor['harga'], 0, ',', '.'); ?></strong></h4>
                                        </div>
                                        <div>
                                            <a href="./form.php" class="btn btn-dark">Purchase Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
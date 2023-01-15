<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentalinAja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                        <a class="nav-link active text-white" aria-current="page" href="l_vespa.php">Vespa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="l_kopling.php">Kopling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="l_manual.php">Manual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="l_matic.php">Matic</a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-end">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <button type="button" data-bs-toggle="modal" data-bs-target="#logout" class="btn btn-danger">Logout</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 class="text-center">Selamat Datang diRentalinAja</h2>
    <h5 class="text-center mt-2">Terdapat beberapa jenis motor disini dan terdapat banyak merk merk motor.<br> Silahkan pilih dan langsung rental saja!</h3>

        <!-- <ul class="nav nav-pills nav-fill p-5">
            <li class="nav-item">
                <a class="nav-link text-dark fw-bold" aria-current="page" href="#">Matic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-bold" href="#">Manual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-bold" href="#">Kopling</a>
            </li>
        </ul> -->

        <div class="row align-items-center mt-3 p-5">
            <div class="col">
                <h3 class="text-center">Matic</h3>
                <img src="../img/matic.jpg" width="100%" alt="">
                <p class="text-center fw-bold mt-2">Jika ingin motor yang simple dan mudah dipakai bisa memilih motor matic</p>
                <a href="l_matic.php">
                    <button style="width: 100%" type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-primary">Selengkapnya</button>
                </a>
            </div>
            <div class="col">
                <h3 class="text-center">Manual</h3>
                <img src="../img/revo.jpg" width="100%" alt="">
                <p class="text-center fw-bold">Jika ingin motor yang simple dan irit bensin bisa memakai motor manual</p>
                <a href="l_manual.php">
                    <button style="width: 100%" type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-primary">Selengkapnya</button>
                </a>
            </div>
        </div>
        <div class="row align-items-center mt-3 p-5">
            <div class="col">
                <h3 class="text-center">Kopling</h3>
                <img src="../img/ninja.jpg" width="100%" alt="" class="mb-4">
                <p class="text-center fw-bold mt-3">Jika ingin motor yang memiliki bentuk keren dan laju yang cepat bisa memilih motor kopling</p>
                <a href="l_kopling.php">
                    <button style="width: 100%" type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-primary">Selengkapnya</button>
                </a>
            </div>
            <div class="col">
                <h3 class="text-center">Vespa</h3>
                <img src="../img/pespa (2).jpg" width="100%" style="height: 344px;" alt="" class="mb-4">
                <p class="text-center fw-bold mt-3">Jika ingin motor yang memiliki bentuk keren dan nyaman untuk dikendarai pilihlah vespa</p>
                <a href="l_vespa.php">
                    <button style="width: 100%" type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-primary">Selengkapnya</button>
                </a>
            </div>
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
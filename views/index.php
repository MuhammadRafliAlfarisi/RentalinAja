<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentalinAja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div class="dashboard">
        <nav class="navbar navbar-expand-lg text-black bg-dark fw-bold navbar-custom mb-5 bg-opacity-25 ">
            <div class="container d-flex ">
                <a class="navbar-brand text-white" href="#">RentalinAja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#layanan">Layanan Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#rental">Rental Sekarang</a>
                        </li>
                    </ul>
                </div>
                <div class="justify-content-end">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Register.php"> <button type="button" data-bs-toggle="modal" data-bs-target="#register" class="btn btn-outline-light">Register</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.php"> <button type="button" data-bs-toggle="modal" data-bs-target="#login" class="btn btn-light">Login</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="home">

            <div class="p">
                <h2 class="mb-3">RentalinAja</h2>
                <p class="">Kami adalah penyedia layanan Jasa Tempat Penyewaan Sepeda Motor di <br>
                    Bandung 24 Jam< Terbaik dan Terlengkap No #1, menawarkan Tarif Harga Sewa <br>
                        Motor Murah Harian, Mingguan dan Bulanan khusus untuk wisatawan.</p>
            </div>
        </section>
    </div>
    <section id="layanan">

        <div class="layanan">

            <h2 class="text-center">Layanan Kami</h2>
            <div class="d-flex justify-content-around mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="../img/icons8-money-bag-100.png" alt="" class="mb-3">
                        <h5 class="card-title">Harga Terjangkau</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="../img/icons8-customer-service-100.png" alt="" class="mb-3">
                        <h5 class="card-title">Pelayanan Cepat</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="../img/icons8-time-machine-100.png" alt="" class="mb-3">
                        <h5 class="card-title">Tersedia 24/7</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="rental">

        <div class="row">
            <div class="col">
                <img src="../img/rental1.jpg" alt="" style="width : 50vw" class="m-3">
            </div>
            <div class="col">
                <div class="text-center">
                    <h2 class="">Rental Sekarang</h2>
                    <div class="">
                        <a class="nav-link" href="#"> <button type="button" data-bs-toggle="modal" data-bs-target="#register" class="btn btn-outline-primary mt-5" style="width: 18rem; height: 50px;">Register</button></a>
                        <a class="nav-link" href="#"> <button type="button" data-bs-toggle="modal" data-bs-target="#login" class="btn btn-primary" style="height: 50px; width: 18rem;">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class="bg-dark bg-opacity-15 text-white">

            <div class="d-flex justify-content-around ">

                <div class="footer1">
                    <h3 class="mt-5">RentalinAja</h3>
                    <p class="fw-bold">RentalinAja merupakan usaha persewaan motor di Kota <br>
                        Bandung yang baru kami rintis tahun ini. Bisnis jasa sewa <br>
                        motor ini kami kelola di pusat kota yang sangat strategis lokasinya <br>
                        dekat dengan Stasiun Kereta Api dan Bandara Husein Sastranegara <br>
                        yakni Jl. Dr. Djunjunan No.64, Sukabungah, Kecamatan Sukajadi, Kota <br>
                        Bandung, Jawa Barat 40162.</p>
                </div>
                <div class="footer2">
                    <h3 class="mt-5">Alamat/Kontak</h3>
                    <p class="fw-bold">Jl. Sari Asih No.54, Kota Bandung, Jawa Barat 40151</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
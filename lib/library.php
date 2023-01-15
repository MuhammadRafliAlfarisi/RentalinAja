<?php
session_start();

function base_url()
{
    return "http://localhost/RentalinAja/";
}

function cekLogin()
{
    $email = @$_SESSION['email'];
    $level = @$_SESSION['level'];

    if (empty($email) && empty($level)) {
        header('location:../views/login.php');
    }
}

function sudahLogin()
{
    $email = @$_SESSION['email'];
    $level = @$_SESSION['level'];

    if (!empty($email) && $level == 'user' ) {
        header('location:../views/dashboard.php');
    } else if (!empty($email) && $level == 'admin'){
        header('location:../views/admin.php');
    }
}

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'rentalin_aja';

$mysqli = mysqli_connect($host, $user, $pass, $db) or die('Tidak dapat konek ke Database');

function query($query)
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'rentalin_aja';

    $mysqli = mysqli_connect($host, $user, $pass, $db) or die('Tidak dapat konek ke Database');
    $result = mysqli_query($mysqli, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'rentalin_aja';

    $mysqli = mysqli_connect($host, $user, $pass, $db) or die('Tidak dapat konek ke Database');

    $nama_motor = $data["nama_motor"];
    $jenis = $data["jenis"];
    $harga = $data["harga"];

    $query = "INSERT INTO motor (nama_motor, jenis, harga) VALUES ('$nama_motor' , '$jenis', '$harga')";
    $result = mysqli_query($mysqli, $query);

    return mysqli_affected_rows($mysqli);
}

function ubah($data)
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'rentalin_aja';

    $mysqli = mysqli_connect($host, $user, $pass, $db) or die('Tidak dapat konek ke Database');

    $id = $data["id"];
    $nama_motor = $data["nama_motor"];
    $jenis = $data["jenis"];
    $harga = $data["harga"];


    $query = "UPDATE motor SET
                                nama_motor = '" . $nama_motor . "',
                                jenis    = '" . $jenis . "',
                                harga       = '" . $harga . "'
                                WHERE id = '" . $id . "'";

    $result = mysqli_query($mysqli, $query);
    // var_dump($query);
    // die();

    return $result;
}

function hapus($id)
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'rentalin_aja';

    $mysqli = mysqli_connect($host, $user, $pass, $db) or die('Tidak dapat konek ke Database');
    $result = mysqli_query($mysqli, "DELETE FROM motor WHERE id = $id");

    return $result;
}

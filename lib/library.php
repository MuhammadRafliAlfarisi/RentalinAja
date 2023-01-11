<?php
    session_start();

    function base_url(){
        return "http://localhost/RentalinAja/";
    }

    function cekLogin(){
        $email = @$_SESSION['email'];

        if (empty($email)){
            header('location:../views/login.php');
        }
    }

    function sudahLogin(){
        $email = @$_SESSION['email'];

        if (!empty($email)){
            header('location:../views/dashboard.php');
        }
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'rentalin_aja';

    $mysqli = mysqli_connect($host, $user, $pass, $db)
                or die('Tidak dapat konek ke Database');
?>
<?php
    include '../lib/library.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $konfirm_password = $_POST['konfirm_password'];

        if ($password == $konfirm_password) {
            if (cek_email($mysqli, $email) == 0) {
                $sql = " INSERT INTO users (email, name, password, level) values ('$email', '$name', SHA1('$password'), 'user')";

                $data = $mysqli -> query($sql) or die($mysqli->error);
                if ($data) {
                    header('location:../views/Login.php');
                } else {
                    echo "Error";
                }
            } elseif (cek_email($mysqli, $email) != 0) {
                echo "email sudah terdaftar";
            }
        } elseif ($password != $konfirm_password) {
            echo "Password tidak sama";
        }
    }

    function cek_email($mysqli, $emails){
        $email = $_POST['email'];
        $sql = "SELECT * FROM users WHERE email = '$email';";

        if($data = $mysqli -> query($sql) or die($mysqli)){
            return $data->num_rows;
        }
    }
?>
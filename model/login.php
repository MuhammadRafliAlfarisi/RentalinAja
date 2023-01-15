<?php
include '../lib/library.php';

sudahLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT *  FROM users WHERE (email = '$email' OR name =  '$email') AND password = SHA1('$password')";

    $data = $mysqli->query($sql) or die($mysqli->error);

    if ($data->num_rows != 0) {
        $row = mysqli_fetch_object($data);
        $_SESSION['id'] = $row->id;
        $_SESSION['email'] = $row->email;
        $_SESSION['name'] = $row->name;
        $_SESSION['password'] = $row->password;
        $_SESSION['level'] = $row->level;

        if ($_SESSION['level'] == 'user') {
            header("location:dashboard.php");
        } else if ($_SESSION['level'] == 'admin') {
            header("location:admin.php");
        }
    } else {
        $error = "Email atau Password salah";
    }
}

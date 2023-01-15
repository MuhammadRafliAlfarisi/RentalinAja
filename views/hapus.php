<?php

require '../lib/library.php';


$id = $_GET["id"];

if (hapus($id)) {
    echo
    "<script>
        alert('Data berhasil dihapus');
        window.location.href = 'admin.php';
    </script>";
} else {
    echo
    "<script>
        alert('Data gagal dihapus');
        window.location.href = 'admin.php';
    </script>";
}

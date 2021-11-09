<?php
    include 'koneksi.php';
    if (isset($_GET['email'])){
        $delete = mysqli_query($conn, "DELETE FROM daftar mahasiswa sik WHERE email = '".$_GET['email']."'");
        header('location:index.php');
    }
?>
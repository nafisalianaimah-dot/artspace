<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    
    $query = "UPDATE kontak SET nama='$nama', email='$email', pesan='$pesan' WHERE id='$id'";
    } ELSE {
        $query = "UPDATE kontak SET nama='$nama', email='$email', pesan='$pesan' WHERE id='$id'";
    }

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data: " . mysqli_error($koneksi) . "'); window.location.href='index.php';</script>";
    }


    ?>


<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    mysqli_query($koneksi, "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')"); 

    echo "<script>window.location.href='index.php#testimoni   ';</script>";
}
?>
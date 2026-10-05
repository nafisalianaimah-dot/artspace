<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM kontak WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . mysqli_error($koneksi) . "'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location.href='index.php';</script>";
}
?>
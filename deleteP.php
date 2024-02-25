<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran=$id");
echo '<script>alert("Data berhasil dihapus!");</script>';
echo '<script>window.location.href = "pembayaran.php";</script>';
?>
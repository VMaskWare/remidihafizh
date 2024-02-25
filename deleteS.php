<?php
include_once("koneksi.php");
 
$id = $_GET['id'];

$check_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM pembayaran WHERE nis='$id'");
$check_data = mysqli_fetch_assoc($check_query);
$total = $check_data['total'];

if ($total > 0) {
    echo '<script>alert("Data kelas ini tidak bisa dihapus karena ada data siswa ini memiliki data pembayaran!");</script>';
    echo '<script>window.location.href = "kelas.php";</script>';
} else {
$result = mysqli_query($conn, "DELETE FROM siswa WHERE nis='$id' ");
 
if ($result) {

    echo '<script>alert("Data berhasil dihapus!");</script>';
    echo '<script>window.location.href = "siswa.php";</script>';
    }else{
        echo '<script>alert("Data pembayaran siswa ini belum dihapus!");</script>';
    }
}
?>
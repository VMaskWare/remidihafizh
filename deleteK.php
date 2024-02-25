<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Check if there are any related records in other tables
$check_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM siswa WHERE id_kelas='$id'");
$check_data = mysqli_fetch_assoc($check_query);
$total = $check_data['total'];

if ($total > 0) {
    echo '<script>alert("Data siswa ini tidak bisa dihapus karena ada data siswa di data pembayaran!");</script>';
    echo '<script>window.location.href = "kelas.php";</script>';
} else {

    $result = mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas='$id'");
    
    if ($result) {
        echo '<script>alert("Data berhasil dihapus!");</script>';
        echo '<script>window.location.href = "kelas.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data kelas!");</script>';
    }
}
?>

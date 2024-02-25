<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];

    // buat query update
    $sql = "UPDATE pembayaran SET tgl_bayar='$tanggal', jumlah_bayar='$jumlah' WHERE id_pembayaran=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: dashboard.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
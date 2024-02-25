<?php

include("koneksi.php");


if(isset($_POST['update'])){

    $nis = $_POST['nis'];
    $id_kelas = $_POST['idk'];
    $nama = $_POST['nama'];

 
    $sql = "UPDATE siswa SET nama='$nama'  WHERE nis='$nis'";
    $query = mysqli_query($conn, $sql);


    if( $query ) {

        header('Location: siswa.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>